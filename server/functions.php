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

function insertdata()
{
    global $con;
    if(isset($_POST['signupbutton']))
    {
        $u_username = $_POST['username'];
        $u_fname = $_POST['fname'];
        $u_lname = $_POST['lname'];
        $u_email = $_POST['email'];
        $u_gender = $_POST['gender'];
        $u_date = $_POST['date'];
        $u_month = $_POST['month'];
        $u_year = $_POST['year'];
        $u_pass = $_POST['rpwd'];

        $insert_data = " insert into users (u_username, u_fname, u_lname, u_email, u_gender, u_date, u_month, u_year, u_password)
                          VALUES ('$u_username','$u_fname','$u_lname','$u_email','$u_gender','$u_date','$u_month','$u_year','$u_pass');";
        $insert_val = mysqli_query($con, $insert_data);

        if($insert_val)
        {
            header("location: ".$_SERVER['PHP_SELF']);
        }

    }
}
