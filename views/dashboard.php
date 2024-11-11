<?php
session_start();

require "../classes/Product.php";

$product_obj = new Product;
$all_products = $product_obj->getAllProducts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVcey
    
    QqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php
    include 'navbar.php';
    ?>

    <main>
        <div class="row justify-content-center gx-0">
            <div class="col-6 d-flex justify-content-between align-items-center">
                <h2>Product List</h2>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-plus"></i></button>
            </div>
        </div>
        <div class="row justify-content-center gx-0">
            <div class="col-6">
                <table class="table table-hover align-middle">
                    <thead class="table-dark text-white">
                        <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th><!-- For action buttons --></th>
                        <th><!-- For action buttons --></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        while($product = $all_products->fetch_assoc()){
                        ?>
                            <tr>
                                <td><?= $product['id'] ?></td>
                                <td><?= $product['product_name'] ?></td>   
                                <td><?= $product['price'] ?></td>   
                                <td><?= $product['quantity'] ?></td>
                                <td>
                                        <a href="edit-product.php" class="btn btn-warning" title="Edit">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        <a href="delete-product.php" class="btn btn-danger" title="Delete">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                </td>
                                <td>
                                        <a href="buy-product.php" class="btn btn-success" title="Buy Product">
                                            <i class="fa-solid fa-file-lines"></i>
                                        </a>
                                </td>                              
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </main>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="fw-light mb-3 float-start">New Product</h2>

                        <form action="../actions/add-product.php
                        " method="post">
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
                            </div>
                            <button type="submit" name="btn_add" class="btn btn-primary fw-bold px-5">Add</button>

                        </form>
                    </div>
                </div>
            </div>
    </div>
  </div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>