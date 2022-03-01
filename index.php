<?php
require_once "Session.php";
require_once "product.php";
require_once "cart.php";
$data = Session::getInstance();


?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Bob Shop</title>

    <!--       Font Awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!--        Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    </head>
    <body>
        <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
            <p class="h5 my-0 me-md-auto fw-normal">BobShop 2.0</p>
            <nav class="my-2 my-md-0 me-md-3">
                <a class="p-2 text-dark" href="#">Subs</a>
                <a class="p-2 text-dark" href="#">Mailing</a>
                <a class="p-2 text-dark" href="#">Contact</a>
                <a class="p-2 text-dark" href="#">Basket</a>
            </nav>
        </header>
        <main class="container">
            <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h1 class="display-4">Products</h1>
                <p class="lead">Buy Awesome Subscriptions For No Reason</p>
            </div>

            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <?php $prod = new Product(); ?>
            </div>
            <div>
                <?php (new Cart)->init(); ?>

            </div>
            <footer class="border-top">
                <div class="row">
                    <div class="text-center">
                        <img class="mb-2" src="https://i.pinimg.com/originals/f6/02/72/f602726fba8ce056906f5e0cdb693fbb.png" alt="" width="54">
                        <small class="d-block mb-3 text-muted">© 1601–2021</small>
                    </div>
                </div>
            </footer>
        </main>
    </body>
</html>
