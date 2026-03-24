<?php
require_once '../app.php';

if ($request->hasPost('delete') && $request->post('id')) {

    $id = $request->post('id');

    $productData = $product->SelectOne($id);

    if ($productData) {
        unlink("../images/" . $productData['img']);
    }

    $res = $product->Delete($id);

    if ($res) {
        $request->redirect('../index.php');
    } else {
        echo "Error deleting";
    }

} else {
    $request->redirect('../index.php');
}
