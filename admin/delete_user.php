<?php
require_once "../server/tib_db.php";
if(!isset($_SESSION['login_checked'])) {
    header('location: login.php');
}
if(isset($_GET['delete_user'])){
    $u_username = $_GET['delete_user'];
    $del_user = "delete from users where u_username='$u_username'";
    $run_del = mysqli_query($con,$del_user);
    if($run_del){
        header('location: index.php?view_users');
    }
}