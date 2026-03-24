<?php include 'inc/header.php';
require_once 'app.php';

$id = $request->get('id');
$product = $product->SelectOne($id);
?>

<div class="container my-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">


            <form action="handlers/update.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $product['id'] ?>">

                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $product['name'] ?>">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="number" class="form-control" id="price" name="price" value="<?php echo $product['price'] ?>">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"> <?=  $product['description'] ?> </textarea>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Image:</label>
                    <input class="form-control" type="file" id="formFile" name="img">
                </div>

                <div class="col-lg-3">
                    <img src="images/<?= $product['img'] ?>" class="card-img-top">
                </div>

                <center><button on type="submit" class="btn btn-primary" name="submit">Update</button></center>
            </form>
        </div>
    </div>
</div>



<?php include 'inc/footer.php'; ?>