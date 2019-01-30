<?php
require "tib_db.php";

function insertdata()
{
    global $con;
    if(isset($_POST['signupbutton']))
    {
        $u_username = $_POST['username'];
        $u_fname = $_POST['fname'];
        $u_lname = $_POST['lname'];
        $u_email = $_POST['email'];
        $u_gender = $_POST['u_gender'];
        $u_date = $_POST['date'];
        $u_month = $_POST['month'];
        $u_year = $_POST['year'];
        $u_pass = $_POST['rpwd'];

        if($u_username != null && $u_fname != null && $u_lname != null && $u_email != null
            && $u_gender != null && $u_pass != null )
        {
            $insert_data = " insert into users (u_username, u_fname, u_lname, u_email, u_gender, u_date, u_month, u_year, u_password)
                          VALUES ('$u_username','$u_fname','$u_lname','$u_email','$u_gender','$u_date','$u_month','$u_year','$u_pass');";
            $insert_val = mysqli_query($con, $insert_data);

           /* if($insert_val)
            {
                header('location:register.php');
            }*/

        }
        else
        {
            echo "Enter Data in all fields";
        }


    }

}