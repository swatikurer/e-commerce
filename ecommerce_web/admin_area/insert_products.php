<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_discription'];
    $product_keywords=$_POST['product_keywords'];
    $product_category=$_POST['product_category'];
    $product_brands=$_POST['product_brands'];
    $product_price=$_POST['product_price'];
    $product_status='true';

    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];

    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];

    //checking empty condition
    if($product_title=='' or $product_description=='' or $product_keywords=='' or $product_category=='' or $product_brands=='' or $product_price=='' or
    $product_image1=='' or $product_image2=='' or $product_image3==''){
        echo "<script>alert('please fill all the fields')</script>";
        exit();

    }else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");

        //insert query
        $insert_products="insert into products (product_title,product_description,product_keyword,category_id,brand_id,
        product_image1,product_image2,product_image3,product_price,date,status)
        values('$product_title','$product_description','$product_keywords','$product_category','$product_brands','$product_image1','$product_image2','$product_image3',
        '$product_price',NOW(),'$product_status')";
        $result_query=mysqli_query($con,$insert_products);
        if($result_query){
            echo "<script>alert('successfuly inserted the products')</script>";

        }

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert products-admin dashboard</title>
     <!-- bootsrap css link-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--font awsome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--css files-->
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">insert products</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">product title</label>
                <input type="text" name="product_title" id="product_title" 
                class="form-control" placeholder="enter product title" autocomplete="off" required="required">
</div>
                <!--discription-->
                <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_discription" class="form-label">product discription</label>
                <input type="text" name="product_discription" id="product_discription" 
                class="form-control" placeholder="enter product discription" autocomplete="off" required="required">
            </div>

               <!--keywords-->
               <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">product keywords</label>
                <input type="text" name="product_keywords" id="product_keyword" 
                class="form-control" placeholder="enter product keywords" autocomplete="off" required="required">
            </div>

            
               <!--category-->
               <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id=""
                class="form-select">
                <option value="">select category</option>

                <?php
                $select_query="Select * from categories";
                $result_query=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result_query)){
                    $category_title=$row['category_title'];
                    $category_id=$row['category_id'];
                    echo "<option values=''>$category_title</option>";

                }
                ?>

                <!--<option value="">select category1</option>
                <option value="">select category2</option>
                <option value="">select category3</option>
                <option value="">select category4</option>-->
</select>
            </div>
            
               <!--brands-->
               <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brands" id=""
                class="form-select">
                <option value="">select brands</option>

                <?php
                $select_query="Select * from brands";
                $result_query=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result_query)){
                    $brand_title=$row['brand_title'];
                    $brand_id=$row['brand_id'];
                    echo "<option values=''>$brand_title</option>";

                }
                ?>
                <!--<option value="">select brands</option>
                <option value="">select brands</option>
                <option value="">select brands</option>
                <option value="">select brands</option>-->
</select>
            </div>
              <!--images-->
              <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">product image 1</label>
                <input type="file" name="product_image1" id="product_image1" 
                class="form-control" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">product image 2</label>
                <input type="file" name="product_image2" id="product_image2" 
                class="form-control" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">product image 3</label>
                <input type="file" name="product_image3" id="product_image3" 
                class="form-control" required="required">
            </div>
              <!--price-->
              <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">product price</label>
                <input type="text" name="product_price" id="product_price" 
                class="form-control" placeholder="enter product price" autocomplete="off" required="required">
            </div>
              <!--keywords-->
              <div class="form-outline mb-4 w-50 m-auto">
               <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="insert products">
            </div>


        </form>

    </div>
    
</body>
</html>