<?php
require "tib_db.php";

function matchdetails()
{
    global $con;
    $getQuery = "select * from users";
    $getresult=mysqli_query($con,$getQuery);
    while($row=mysqli_fetch_assoc($getresult))
    {
        $username=$row['u_username'];
        $password= $row['u_password'];

    }

}

