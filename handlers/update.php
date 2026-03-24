<?php
require_once '../app.php';
require_once '../classes/img.php';

if ($request->hasPost('submit') && $request->post('id')) {

    $id = $request->post('id');
    $name = $request->post('name');
    $description = $request->post('description');
    $price = $request->post('price');
    $file = $request->file('img');

    // validation
    $validate->rules('Name', $name, ['required', 'string', 'max:100']);
    $validate->rules('price', $price, ['required', 'number']);
    $validate->rules('description', $description, ['string']);

    if ($validate->errors) {
        $session->set('errors', $validate->errors);
        $request->redirect("../edit.php?id=$id");
        exit();
    }

    // handle image
    if ($file['name']) {
        $img = new img($file);
        $imgName = $img->newName;
    } else {
        $oldProduct = $product->SelectOne($id);
        $imgName = $oldProduct['img'];
    }

    $res = $product->Update($id, $name, $price, $description, $imgName);

    if ($res) {

        if ($file['name']) {
            $img->upload();
        }

        $session->set('success', 'Product Updated Successfully');
        $request->redirect("../index.php");

    } else {
        $session->set('error', 'Update Failed');
        $request->redirect("../edit.php?id=$id");
    }

} else {
    $request->redirect('../index.php');
}