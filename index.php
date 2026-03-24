<?php include 'inc/header.php';

require_once 'app.php';

$products = $product->SelectAll();

?>

<div class="container my-5">

    <div class="row">

        <?php
        if ($session->get('success')) { ?>
            <div class="alert alert-success" > <?= $session->get('success') ?></div>
        <?php }
            $session->unset('success');
        ?>




        <?php foreach ($products as $product) { ?>
            <div class="col-lg-4 mb-3">



                <div class="card">
                    <img src="images/<?php echo $product['img'] ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo $product['name'] ?> </h5>
                        <p class="text-muted"><?php echo $product['price'] ?> $</p>
                        <p class="card-text"><?php echo Str::limit($product['description']) ?></p>
                        <a href="show.php?id=<?php echo $product['id'] ?>" class="btn btn-primary">Show</a>

                        <a href="edit.php?id=<?php echo $product['id'] ?>" class="btn btn-info">Edit</a>

                        <form action="handlers/delete.php" method="post">'
                            <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                        </form>

                    </div>
                </div>

            </div>
        <?php } ?>




    </div>

</div>



<?php include 'inc/footer.php'; ?>