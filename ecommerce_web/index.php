<?php
include('./includes/connect.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ecommerce</title>
    <!-- bootsrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--font awsome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--css files-->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container-fluid">
        <!--first child-->
        <nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid p-0" >
<img src="./images/logo.png" alt="error" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">PRODUCTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">REGISTER</a>
        </li> <li class="nav-item">
          <a class="nav-link" href="#">CANTACT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="#">TOTAL PRICE:</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!--second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
          <a class="nav-link" href="#">WELCOME GUEST</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">LOGIN</a>
        </li>
    </ul>
</nav>


    <!--THIRD CHILD-->
    <div class="bg-light">
        <h3 class="text-center">ecommerce</h3>
        <p class="text-center">communication is the heart of ecommerceand community</p>
</div>


<!--fourth child-->
<div class="row">
    <div class="col-md-10">
            <!--products-->
            <div class="row">

                <div class="col-md-4 mb-2">
                <div class="card">
  <img src="./images/books.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">BOOKS</h5>
    <p class="card-text">check this out</p>
    <a href="#" class="btn btn-info">add to cart</a>
    <a href="#" class="btn btn-secondary">view more</a>

  </div>
</div>
                </div>

                <div class="col-md-4 mb-2">
                <div class="card">
  <img src="./images/cloths.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">CLOTHS</h5>
    <p class="card-text">All sections are available</p>
    <a href="#" class="btn btn-info">add to cart</a>
    <a href="#" class="btn btn-secondary">view more</a>  </div>
</div>
                </div>

                <div class="col-md-4 mb-2">
                <div class="card">
  <img src="./images/fruits.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">FRUITS</h5>
    <p class="card-text">fresh fruits are there check at once </p>
    <a href="#" class="btn btn-info">add to cart</a>
    <a href="#" class="btn btn-secondary">view more</a>  </div>
</div>
                </div>

            <div class="col-md-4 mb-2">
                <div class="card">
  <img src="./images/cosmetics.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">add to cart</a>
    <a href="#" class="btn btn-secondary">view more</a>
  </div>
</div>
                </div>

                <div class="col-md-4 mb-2">
                <div class="card">
  <img src="./images/electronic.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">ELECTRONICS</h5>
    <p class="card-text">electronic gadgets like mobile phone and other things</p>
    <a href="#" class="btn btn-info">add to cart</a>
    <a href="#" class="btn btn-secondary">view more</a> 
 </div>
</div>
                </div>

                <div class="col-md-4 mb-2 ">
                <div class="card">
  <img src="./images/home.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">HOME APPLIANCES</h5>
    <p class="card-text">neccessary daily routine home appiances</p>
    <a href="#" class="btn btn-info">add to cart</a>
    <a href="#" class="btn btn-secondary">view more</a>  
</div>
</div>
</div>
    </div>
</div>
            <!--sidenav-->
            <div class="col-md-2 bg-secondary p-0">
                <!--brands to be dis[played-->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info">
                    <a href ="#" class="nav-link text-light"><h4>delivery brands</h4></a>
                </li>

                <?php
                $select_brands="Select * from brands";
                $result_brands=mysqli_query($con,$select_brands);
                while($row_data=mysqli_fetch_assoc($result_brands)){
                    $brand_title=$row_data['brand_title'];
                    $brand_id=$row_data['brand_id'];
                    echo "<li class='nav-item'>
                    <a href ='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
                </li>";
            
             
            

             

                }
                ?>
                </ul>

                 <!--catogories to be dis[played-->]
                 <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info">
                    <a href ="#" class="nav-link text-light"><h4>catogories</h4></a>
                </li>
                
                <?php
                $select_categories="Select * from categories";
                $result_categories=mysqli_query($con,$select_categories);
                while($row_data=mysqli_fetch_assoc($result_categories)){
                    $category_title=$row_data['category_title'];
                    $category_id=$row_data['category_id'];
                    echo"<li class='nav-item'>
                    <a href ='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
                </li>";
                

              

                }
                ?>
               
                </ul>


    </div>

</div>



<!--big child-->
<div class="bg-info p-3 text-center">
    <p>all rights are reserved</p>
</div>

    <!-- bootsrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>