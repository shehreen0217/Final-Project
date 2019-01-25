<?php
require_once "../server/tib_db.php";
if(!isset($_SESSION['login_checked'])) {
    header('location: login.php');
}
?>

<?php
global $cat_id;
if(isset($_GET['edit_category'])){
    $cat_title = $_GET['edit_category'];
    $get_cat = "select * from categories where cat_title='$cat_title'";
    $run_cat = mysqli_query($con, $get_cat);
    $row_cat = mysqli_fetch_array($run_cat);
    $cat_id = $row_cat['cat_id'];
    $cat_image = $row_cat['cat_image'];
    $cat_hover = $row_cat['cat_hover'];
    $cat_link = $row_cat['cat_link'];
    $cat_logo = $row_cat['cat_logo'];
}
if(isset($_POST['update_cat'])){
    $cat_title = $_POST['cat_title'];
    $cat_image = $_FILES['cat_image']['name'];
    $cat_image_tmp = $_FILES['cat_image']['tmp_name'];
    move_uploaded_file($cat_image_tmp,"../images/$cat_image");
    $cat_hover = $_POST['cat_hover'];
    $cat_link = $_POST['cat_link'];
    $cat_logo = $_POST['cat_logo'];

    $update_category = "update categories set cat_title = '$cat_title', 
                                        cat_image = '$cat_image',
                                        cat_hover = '$cat_hover' ,
                                        cat_link = '$cat_link',
                                        cat_logo = '$cat_logo'
                                        where cat_id='$cat_id'";

    echo $update_category;

    $update = mysqli_query($con, $update_category);

    echo $update;

    if($update){
        header("location: index.php?view_categories");
    }
}
?>

<h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Updating Category <?php echo $cat_title ?> </span></h1>
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
            <button type="submit" name="update_cat" class="btn btn_s btn-block"><i class="fas fa-wrench"></i> Update </button>
        </div>
    </div>
</form>