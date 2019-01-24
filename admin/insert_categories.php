<?php
require_once "../server/tib_db.php";
if(!isset($_SESSION['login_checked'])) {
    header('location: login.php');
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
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
            <label for="pro_title" class="float-md-right"> <span class="d-sm-none d-md-inline"> Title: </label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-auto">
            <input type="text" class="form-control" id="pro_title" name="pro_title" placeholder="Enter Product Title" >
        </div>
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
            <label for="pro_img" class="float-md-right"><span class="d-sm-none d-md-inline"> Image: </label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-auto">
            <div class="input-group-prepend">
                <input class="form-control" type="file" id="pro_image" name="pro_image">
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