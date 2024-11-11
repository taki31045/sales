<?php
session_start();

require "../classes/Product.php";

$product_obj = new Product;
$product = $product_obj->getProduct($_SESSION['id']);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <body>
  <?php
    include 'navbar.php';
    ?>
            <main class="row justify-content-center gx-0">
                <div class="col-4">
                    <h2 class="text-center text-warning mb-4"><i class="fa-solid fa-pen-to-square"></i>Edit Product</h2>

                    <form action="../actions/edit-user.php" method="post" enctype="multipart/form-data">
                        <div class="row justify-content-center mb-3">
                            
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label small fw-bold">Product Name</label>
                            <input type="text" name="product_name" id="product_name" class="form-control" max="50" required autofocus>
                            </div>

                            <div class="mb-3">
                            <label for="price" class="form-label small fw-bold">Price</label>
                            <div class="input-group float-start">
                                    <div class="input-group-text">$</div>
                                    <input type="number" name="price" id="price" class="form-control" step="any" required>
                            </div>
                            <div class="mb-3 float-end">
                                    <label for="quantity" class="form-label small fw-bold">Quantity</label>
                                    <input type="number" name="quantity" id="quantity" class="form-control" step="any" required>                                    
                            </div>

                        <div class="">
                            <button type="submit" class="btn btn-warning btn-small px-5">Edit</button>
                        </div>
                    </form>
                </div>


            </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>