<?php
require_once "../server/tib_db.php";
if(!isset($_SESSION['login_checked'])) {
    header('location: login.php');
}

if(isset($_GET['delete_guest'])){
    $id = $_GET['delete_guest'];
    $del_g = "delete from guest where g_id='$id'";
    $run_del = mysqli_query($con,$del_g);
    if($run_del){
        header('location: index.php?view_guests');
    }
}