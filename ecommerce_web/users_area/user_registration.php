<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user registration</title>
        <!-- bootsrap css link-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--font awsome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container-fluid">
        <h2 class="text-center">registration form</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="form-outline">
                        <label for="user_username" class="form-label">username</label>
                        <input type="text" id="user_username" class="form-control"
                        placeholder="enter your username" autocomplete="off" required="required" name="user_username">
                    </div>
                    <div class="form-outline">
                        <label for="user_email" class="form-label">email</label>
                        <input type="text" id="user_email" class="form-control"
                        placeholder="enter your email" autocomplete="off" required="required" name="user_email">
                    </div>
                    <div class="form-outline">
                        <label for="user_password" class="form-label">password</label>
                        <input type="password" id="user_password" class="form-control"
                        placeholder="enter your password" autocomplete="off" required="required" name="user_password">
                    </div>
                    <div class="form-outline">
                        <label for="conf_user_password" class="form-label">confirm password</label>
                        <input type="password" id="conf_user_password" class="form-control"
                        placeholder="cofirm user password" autocomplete="off" required="required" name="conf_user_password">
                    </div>
                    <div class="form-outline">
                        <label for="user_address" class="form-label">address</label>
                        <input type="text" id="user_address" class="form-control"
                        placeholder="enter your address" autocomplete="off" required="required" name="user_address">
                    </div>
                    <div class="form-outline">
                        <label for="user_contact" class="form-label">contact</label>
                        <input type="text" id="user_contact" class="form-control"
                        placeholder="enter your contact number" autocomplete="off" required="required" name="user_contact">
                    </div>
                    <div class="mt-4 pt-2">
                        <input type="submit" value="register" class="bg-info py-2 px-3 border-0 " name="user_reister">
                        <p class="small fw-bold mt-2 pt-1"> already have an account?<a href="user_login.php"> login</a></p>
                </form>
            </div>
        </div>
</body>
</html>