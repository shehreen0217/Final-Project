<?php
require_once "../server/tib_db.php";
if(!isset($_SESSION['login_checked'])) {
    header('location: login.php');
}
if(isset($_GET['delete_category'])){
    $cat_title = $_GET['delete_category'];
    $del_cat = "delete from categories where cat_title='$cat_title'";
    $run_del = mysqli_query($con,$del_cat);
    if($run_del){
        header('location: index.php?view_categories');
    }
}