<?php
require_once "../server/tib_db.php";
if(!isset($_SESSION['login_checked'])) {
    header('location: login.php');
}

if(isset($_POST['insert_pro'])){
    //getting text data from the fields
    $pro_title = $_POST['pro_title'];
    $pro_cat = $_POST['pro_cat'];
    $pro_brand = $_POST['pro_brand'];
    $pro_price = $_POST['pro_price'];
    $pro_desc = $_POST['pro_desc'];
    $pro_keywords = $_POST['pro_keywords'];

    //getting image from the field
    $pro_image = $_FILES['pro_image']['name'];
    $pro_image_tmp = $_FILES['pro_image']['tmp_name'];
    move_uploaded_file($pro_image_tmp,"product_images/$pro_image");

    $insert_product = "insert into products (pro_cat, pro_brand,pro_title,pro_price,pro_desc,pro_image,pro_keywords) 
                  VALUES ('$pro_cat','$pro_brand','$pro_title','$pro_price','$pro_desc','$pro_image','$pro_keywords');";
    $insert_pro = mysqli_query($con, $insert_product);
    if($insert_pro){
        header("location: ".$_SERVER['PHP_SELF']);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
</head>

<body>

<h1 class="text-center my-4 font2"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New Category </span></h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-1 mt-auto">
            <label for="pro_title" class="float-md-right"> <span class="d-sm-none d-md-inline"> Title: </label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-auto">
            <input type="text" class="form-control" name="title" placeholder="Enter Category Title" >
        </div>
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-3 mt-auto">
            <label for="pro_img" class="float-md-right"><span class="d-sm-none d-md-inline"> Image: </label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-auto">
            <div class="input-group-prepend">
                <input class="form-control" type="file" name="image">
            </div>
        </div>
    </div>
    <div class="row my-5">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-4 mt-auto"></div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
            <button type="submit" name="insert_pro" class="btn btn_s btn-block"><i class="fas fa-plus"></i> Insert Now </button>
        </div>
    </div>
</form>

</body>
</html>