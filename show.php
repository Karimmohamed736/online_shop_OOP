<?php include 'inc/header.php';
require_once  'app.php';
?>

<?php 
$product->SelectOne($product['id']);
if (empty($product)) {
    echo "EMPTY";
}

?>


<div class="container my-5">

    <div class="row">


    <div class="col-lg-6">
            <img src="<?php echo $product['img'] ?>" class="card-img-top">
            </div>
            <div class="col-lg-6">
            <h5 ><?php echo $product['name'] ?></h5>
            <p class="text-muted">Price: <?php echo $product['price'] ?> EGP</p>
            <p><?php echo $product['description'] ?></p>
            <a href="index.php" class="btn btn-primary">Back</a>
            <a href="edit.php?id=<?php echo $product['id'] ?>" class="btn btn-info">Edit</a>
            <a href="delete.php?id=<?php echo $product['id'] ?>" class="btn btn-danger">Delete</a>
        </div>
        
    </div>
</div>



<?php include 'inc/footer.php'; ?>