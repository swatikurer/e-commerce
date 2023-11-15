<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    <!--bootsrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!--css link-->
    <link rel="stylesheet" href="../style.css">

    <!--font awsome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        .admin_image{
    width:100px;
    object-fit:contain;
}
.footer{
    position:abso;
    bottom:0;
}
    </style>
</head>

<body>
    <div class ="container-fluid p-0">
        <!--first child-->
        <nav class ="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/cart.jpg" alt="" class="logo">
                <nav class ="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="nav-link">welcome guest</a>
                </li>
                </ul>
                </nav>

            </div>
        </nav>

        <!--second child-->
        <div class="bg-center">
            <h3 text-center p-2>manage details</h3>
        </div>
        <!--third child-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-item-center">
                <div class="px-5">
                    <a href="#"><img src="../images/admin.jpg" alt="" class="admin_image"></a>
                    <p class="text-light text-center">admin name</p>
                </div>
                <div class="button text-center">
                    <button class="my-3">
                        <a href="insert_products.php" class="nav-link text-light bg-info my-1">insert products</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">view products</a>
                    </button>
                    <button>
                        <a href="index.php?insert_category" class="nav-link text-light bg-info my-1">insert catagories</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">view categories</a>
                    </button>
                    <button>
                        <a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">insert brands</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">view brands</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">all orders</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1"> all payments</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">list users</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">logout</a>
                    </button>
            </div>
        </div>

<!--fourth child-->
<div class="container my-3">
<?php

if(isset($_GET['insert_category'])){
    include('insert_category.php');
}
if(isset($_GET['insert_brands'])){
    include('insert_brands.php');
}
?></div>

        <!--last child-->
<div class="bg-info p-3 text-center footer">
    <p>all rights are reserved</p>
</div>
        </div>

    <!--bootsrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>