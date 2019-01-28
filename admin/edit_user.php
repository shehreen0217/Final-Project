<?php
require_once "../server/tib_db.php";
if(!isset($_SESSION['login_checked'])) {
    header('location: login.php');
}
?>

<?php
global $u_id;
if(isset($_GET['edit_user'])){
    $u_username = $_GET['edit_user'];
    $get_user = "select * from users where u_username='$u_username'";
    $run_user = mysqli_query($con, $get_user);
    $row_user = mysqli_fetch_array($run_user);
    $u_id = $row_user['u_id'];
    $u_username = $row_user['u_username'];
    $u_fname = $row_user['u_fname'];
    $u_lname = $row_user['u_lname'];
    $u_gender = $row_user['u_gender'];
    $u_date = $row_user['u_date'];
    $u_month = $row_user['u_month'];
    $u_year = $row_user['u_year'];
    $u_email = $row_user['u_email'];
    $u_password = $row_user['u_password'];
}
if(isset($_POST['update_user'])){
    $u_username = $_POST['u_username'];
    $u_fname = $_POST['u_fname'];
    $u_lname = $_POST['u_lname'];
    $u_gender = $_POST['u_gender'];
    $u_date = $_POST['u_date'];
    $u_month = $_POST['u_month'];
    $u_year = $_POST['u_year'];
    $u_email = $_POST['u_email'];
    $u_password = $_POST['u_password'];

    $update_users = "update users set u_username = '$u_username', 
                                        u_fname = '$u_fname',
                                        u_lname = '$u_lname' ,
                                        u_gender = '$u_gender',
                                        u_date = '$u_date',
                                        u_month = '$u_month',
                                        u_year = '$u_year',
                                        u_email='$u_email',
                                        u_password = '$u_password'
                                        where u_id='$u_id'";

    echo $update_users;

    $update = mysqli_query($con, $update_users);

    echo $update;

    if($update){
        header("location: index.php?view_users");
    }
}
?>

<h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Updating User <?php echo $u_username ?> </span></h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="row my-5">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-1 mt-auto ml">
            <label for="u_username" class="float-md-right"> <span class="d-sm-none d-md-inline"> Username: </label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-auto ml">
            <input type="text" class="form-control" name="u_username" placeholder="Enter Username " >
        </div>
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-1 mt-auto ml">
            <label for="u_password" class="float-md-right"> <span class="d-sm-none d-md-inline">Password:  </label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-auto ml">
            <input type="text" class="form-control" name="u_password" placeholder="Enter Password" >
        </div>
    </div>

    <div class="row my-5">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-1 mt-auto ml">
            <label for="u_fname" class="float-md-right"> <span class="d-sm-none d-md-inline"> First Name: </label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-auto ml">
            <input type="text" class="form-control" name="u_fname" placeholder="Enter First Name " >
        </div>
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-1 mt-auto ml">
            <label for="u_lname" class="float-md-right"> <span class="d-sm-none d-md-inline"> Last Name:  </label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-auto ml">
            <input type="text" class="form-control" name="u_lname" placeholder="Enter Last Name" >
        </div>
    </div>


    <div class="row my-5">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-1 mt-auto ml">
            <label for="u_date" class="float-md-right"> <span class="d-sm-none d-md-inline"> Date: </label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-auto ml">
            <input type="text" class="form-control" name="u_date" placeholder="Enter Date for Birthday" >
        </div>
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-1 mt-auto ml">
            <label for="u_month" class="float-md-right"> <span class="d-sm-none d-md-inline"> Month: </label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-auto ml">
            <input type="text" class="form-control" name="u_month" placeholder="Enter Month for Birthday" >
        </div>

    </div>

    <div class="row my-5">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-1 mt-auto ml">
            <label for="u_year" class="float-md-right"> <span class="d-sm-none d-md-inline"> Year: </label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-auto ml">
            <input type="text" class="form-control" name="u_year" placeholder="Enter Year for Birthday" >
        </div>
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-1 mt-auto ml">
            <label for="u_gender" class="float-md-right"> <span class="d-sm-none d-md-inline"> Gender: </label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-auto ml">
            <input type="text" class="form-control" name="u_gender" placeholder="Enter Gender" >
        </div>
    </div>

    <div class="row my-5">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-1 mt-auto ml">
            <label for="u_email" class="float-md-right"> <span class="d-sm-none d-md-inline"> Email: </label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-auto ml">
            <input type="text" class="form-control" name="u_email" placeholder="Enter Email" >
        </div>
    </div>





    <div class="row my-5">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-4 mt-auto ml"></div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 m1">
            <button type="submit" name="update_user" class="btn btn_s btn-block"><i class="fas fa-wrench"></i> Update </button>
        </div>
    </div>


</form>