<?php
require "functions.php";
$e = $_REQUEST["e"];
$sel_username = "select * from users where u_username= '$e'";
$run_username  = mysqli_query($con,$sel_username);
$count2 = mysqli_num_rows($run_username);
if($count2>0)
    echo "Username Already registered ";