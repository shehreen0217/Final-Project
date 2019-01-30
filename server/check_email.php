<?php
require "functions.php";

$e = $_REQUEST["e"];
$sel_email = "select * from users where u_email= '$e'";
$run_email  = mysqli_query($con,$sel_email);
$count1 = mysqli_num_rows($run_email);
if($count1>0)
    echo "Email Already registered";