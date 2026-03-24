<?php
require_once '../app.php';
require_once '../classes/img.php';

if ($request->hasPost('submit')) {

    $name = $request->post('name');
    $description = $request->post('description');
    $price = $request->post('price');
    $img = $request->file('img');

    $img = new img($img);

    //validate according on Class Validation
    $validate->rules('Name', $name, ['required', 'string', 'max:100']);
    $validate->rules('price', $price, ['required', 'number']);
    $validate->rules('description', $description, ['string']);

    if ($validate->errors) {
        $session->set('name', $name);
        $session->set('description', $description);
        $session->set('price', $price);

        $session->set('errors', $validate->errors);
        $request->redirect('../add.php');
        exit();
    }

    $res = $product->Create($name, $price, $description, $img->newName);
    if ($res) {
        $img->upload();
        $session->set('success', 'Product Created Successfully');
        $request->redirect("../index.php");
    } else {
        $request->redirect('insert.php');
    }
} else {
    $request->redirect('../index.php');
}
