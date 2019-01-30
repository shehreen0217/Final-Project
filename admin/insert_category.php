<?php
require_once "../server/tib_db.php";
if(!isset($_SESSION['login_checked'])) {
    header('location: login.php');
}

if (isset($_POST['insert_cat'])) {
    if(0===preg_match("/^[a-zA-Z0-9]+[^@_~!#$%^&()+=|\/*.,<>?:;{[}\]]$/",$_POST['cat_title'])) {
        echo "Enter a valid category name";
    }
    else if(0===preg_match("/.+\..+/",$_POST['cat_link']))
    {
        echo "Invalid Link";
    }
    else if(0===preg_match("/^[a-zA-Z0-9]+.*$/",$_POST['cat_logo'])) {
        echo "Enter something in logo field";
    }
    else if(0===preg_match("/^[a-zA-Z0-9]+.*$/",$_POST['cat_hover'])) {
        echo "Enter something in hover field";
    }
    else {
        $cat_title = $_POST['cat_title'];
        $cat_image = $_FILES['cat_image']['name'];
        $cat_image_tmp = $_FILES['cat_image']['tmp_name'];
        move_uploaded_file($cat_image_tmp, "../images/$cat_image");
        $cat_hover = $_POST['cat_hover'];
        $cat_link = $_POST['cat_link'];
        $cat_logo = $_POST['cat_logo'];


        $insert_cat = "insert into categories (cat_title, cat_image ,cat_hover, cat_link, cat_logo) 
                  VALUES ('$cat_title','$cat_image','$cat_hover','$cat_link','$cat_logo');";
        $query2 = mysqli_query($con, $insert_cat);
        if ($insert_cat) {
            header("location: " . $_SERVER['PHP_SELF']);
        }
    }
}
?>

<h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New Category </span></h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="row my-5">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-1 mt-auto ml">
            <label for="cat_title" class="float-md-right"> <span class="d-sm-none d-md-inline"> Title: </label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-auto ml">
            <input type="text" class="form-control" name="cat_title" placeholder="Enter Category Title" >
        </div>
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-1 mt-auto ml">
            <label for="cat_hover" class="float-md-right"> <span class="d-sm-none d-md-inline"> Hover: </label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-auto ml">
            <input type="text" class="form-control" name="cat_hover" placeholder="Enter Text For Hover" >
        </div>
    </div>
    <div class="row my-5">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-1 mt-auto ml">
            <label for="cat_link" class="float-md-right"> <span class="d-sm-none d-md-inline"> Link: </label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-auto ml">
            <input type="text" class="form-control" name="cat_link" placeholder="Enter Link to open when image is clicked" >
        </div>
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-1 mt-auto ml">
            <label for="cat_logo" class="float-md-right"> <span class="d-sm-none d-md-inline"> Logo: </label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-auto ml">
            <input type="text" class="form-control" name="cat_logo" placeholder="Enter Logo Name" >
        </div>
    </div>
    <div class="row my-5">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-1 mt-auto ml">
            <label for="cat_image" class="float-md-right"><span class="d-sm-none d-md-inline"> Image: </label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-auto ml">
            <div class="input-group-prepend">
                <input class="form-control" type="file" name="cat_image">
            </div>
        </div>
    </div>
    <div class="row my-5">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-4 mt-auto ml"></div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 m1">
            <button type="submit" name="insert_cat" class="btn btn_s btn-block"><i class="fas fa-plus"></i> Insert Now </button>
        </div>
    </div>
</form>