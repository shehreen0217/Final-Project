<?php
require "tib_db.php";

include "functions.php";
?>

<?php
$count=0;
?>

<?php
/*$errors=array();
if(isset($_POST['signupbutton']))
{
    if(0===preg_match("/[a-zA-Z]/",$_POST['fname']))
    {
        $errors['fname']="please enter first name";
    }
    if(0===preg_match("/[a-zA-Z]/",$_POST['lname']))
    {
        $errors['lname']="please enter last name";
    }
    if(0===preg_match("/^[a-zA-Z0-9]+([a-zA-Z0-9](_|-| )[a-zA-Z0-9])*[a-zA-Z0-9]+$/",$_POST['username']))
    {
        $errors['username']="please enter username";
    }
    if(0===preg_match("/.+@.+\..+/",$_POST['email']))
    {
        $errors['email']="please enter email";
    }
    if(0===preg_match("/\d[4]/",$_POST['year']))
    {
        $errors['year']="please enter year";
    }
    if(0===preg_match("/(.*)/",$_POST['pwd']))
    {
        $errors['pwd']="please enter password";
    }
    if(0!== strcmp($_POST['pwd'],$_POST['rpwd']))
    {
        $errors['rpwd']="password does'nt match";
    }
    if(0===count($errors))
    {
        insertdata();
    }
}
*/?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Signup-The Instant Bloggers</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy|Pacifico|Spicy+Rice|Sedgwick+Ave|Archivo+Black" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy|Pacifico|Spicy+Rice|Sedgwick+Ave|Archivo+Black|Lobster" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


</head>
<body  id="bg">
<?php
include("header.php")
?>

<div class="container">
    <style class="col-lg-6">

        .sss{border-radius: 8px;
            margin:  100px 10px 100px;
            font-family:'Ubuntu',sans-serif;
            box-shadow: 0px 0px 10px #000000;
            background-color: maroon;
            color: #f7f7f7;
            padding: 20px 20px;
        }
    </style>
    <h1 class="hhh" > <i class="fas fa-users"></i> Sign Up</h1>
    <form class="sss box" action="register.php" method="post" enctype="multipart/form-data " onsubmit="ValidatingForm()">
        <div class="form-group">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-2">
                    <label for="fname"><i class="fas fa-user-circle"></i> First Name:</label>
                </div>
                <div class="col-lg-2">
                    <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname">
                    <?php
                    if(isset($_POST['signupbutton'])) {
                        if (0 === preg_match("/[a-zA-Z]/", $_POST['fname'])) {
                            $count++;
                            echo "Enter Valid First Name";
                        }
                    }
                    ?>
                </div>
                <div class="col-lg-2">
                    <label for="lname"><i class="fas fa-user-circle"></i> Last Name:</label>
                </div>
                <div class="col-lg-2">
                    <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname">
                    <?php
                    if(isset($_POST['signupbutton'])) {
                        if (0 === preg_match("/[a-zA-Z]/", $_POST['lname'])) {
                            $count++;
                            echo "Enter Valid Last Name";
                        }
                    }
                    ?>
                </div>
                <div class="col-lg-3"></div>

            </div>

        </div>

        <div class="form-group">

            <div class="row">
                <div class="col-lg-1">

                </div>
                <div class="col-lg-2">
                    <label for="username"><i class="far fa-user"></i> Username:</label>
                </div>
                <div class="col-lg-5">
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                    <?php
                    if(isset($_POST['signupbutton'])) {
                        if(0===preg_match("/^[a-zA-Z0-9]+([a-zA-Z0-9](_|-| )[a-zA-Z0-9])*[a-zA-Z0-9]+$/",$_POST['username'])) {
                            $count++;
                            echo "Enter Valid Username";
                        }
                    }
                    ?>
                </div>


            </div>


        </div>
        <div class="form-group">

            <div class="row">
                <div class="col-lg-1">

                </div>
                <div class="col-lg-2">
                    <label for="email"><i class="far fa-envelope-open"></i> Email:</label>
                </div>
                <div class="col-lg-6">
                    <input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
                    <?php
                    if(isset($_POST['signupbutton'])) {
                        if(0===preg_match("/.+@.+\..+/",$_POST['email']))
                        {
                            $count++;
                            echo "Invalid Email Please Enter Again";
                        }
                    }
                    ?>
                </div>


            </div>


        </div>

        <div class="form-group" id = "gender">
            <div class="row">
                <div class="col-lg-1"></div>
               <div class="col-lg-2">
                    <label ><i class="fas fa-transgender"></i> Gender:</label>
                </div>
                <div class="col-lg-2">
                    <label>  <input type="radio" name="u_gender" value="M">Male </label>
                </div>
                <div class="col-lg-2">
                    <label>  <input type="radio" name="u_gender" value="F">Female </label>
                </div>
            </div>


        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-2">
                    <label ><i class="far fa-calendar-alt"></i> Date Of Birth:</label>
                </div>
                <div class="col-lg-2">
                    <label> Date <select class="form-control" id = "date" name="date">
                        <option value="select">-select-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select> </label>
                </div>
                <div class="col-lg-2">
                    <label> Month <select class="form-control" id= "month" name ="month">
                        <option value="select">-select-</option>
                        <option value="jan">January</option>
                        <option value="feb">February</option>
                        <option value="march">March</option>
                        <option value="april">April</option>
                        <option value="may">May</option>
                        <option value="june">June</option>
                        <option value="july">July</option>
                        <option value="aug">August</option>
                        <option value="sep">September</option>
                        <option value="oct">October</option>
                        <option value="nov">November</option>
                        <option value="dec">December</option>
                    </select>
                    </label>
                </div>

                <div class="col-lg-2">
                    <label>Year <input type="text" class="form-control" id="year" placeholder="2018" name="year">
                        <?php
                        if(isset($_POST['signupbutton'])) {
                            if(0===preg_match("/\d{4}/",$_POST['year']))
                            {
                                $count++;
                                echo "Enter Valid year";
                            }
                        }
                        ?>

                    </label>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">

                <div class="col-lg-1">

                </div>
                <div class="col-lg-2">
                    <label for="pwd"><i class="fas fa-lock"></i> Password:</label>
                </div>
                <div class="col-lg-6">
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                    <?php
                    if(isset($_POST['signupbutton'])) {
                        if(0===preg_match("/(.*)/",$_POST['pwd'])) {
                            $count++;
                            echo "Not Allowed";
                        }
                    }
                    ?>

                </div>
                <div class="col-lg-3"></div>
            </div>


        </div>
        <div class="form-group">

            <div class="row">

                <div class="col-lg-1">

                </div>
                <div class="col-lg-2">
                    <label for="rpwd"><i class="fas fa-lock"></i> Re-Password:</label>
                </div>
                <div class="col-lg-6">
                    <input type="password" class="form-control" id="rpwd" placeholder="confirm password" name="rpwd">
                    <?php
                    if(isset($_POST['signupbutton'])) {
                        if(0!== strcmp($_POST['pwd'],$_POST['rpwd']))
                        {
                            $count++;
                            echo "password does'nt match";
                        }
                    }
                    ?>
                </div>
                <?php
                if($count==0 )
                {
                    echo $count;
                    $u_username = $_POST['username'];
                    $u_fname = $_POST['fname'];
                    $u_lname = $_POST['lname'];
                    $u_email = $_POST['email'];
                    $u_gender = $_POST['u_gender'];
                    $u_date = $_POST['date'];
                    $u_month = $_POST['month'];
                    $u_year = $_POST['year'];
                    $u_pass = $_POST['rpwd'];

                    $insert_data = " insert into users (u_username, u_fname, u_lname, u_email, u_gender, u_date, u_month, u_year, u_password)
                          VALUES ('$u_username','$u_fname','$u_lname','$u_email','$u_gender','$u_date','$u_month','$u_year','$u_pass');";
                    $insert_val = mysqli_query($con, $insert_data);

                }
                ?>
                <div class="col-lg-3"></div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-2">
                    <button class="button3" type="submit" name="signupbutton" value="Submit">Sign Up</button>
                </div>

                <div class="col-lg-2"></div>
                <div class="col-lg-2">
                    <a class="linkk" href="login.php">already have an account?</a>
                </div>
            </div>
        </div>


    </form>

</div>



<script>
    function ValidatingForm()
    {
       /* var fname = document.getElementById("fname").value;
        var lname = document.getElementById("lname").value;
        var username = document.getElementById("username").value;
        var email = document.getElementById("email").value;
        var date = document.getElementById("date").value;
        var month = document.getElementById("month").value;
        var year = document.getElementById("year").value;
        var pass = document.getElementById("pwd").value;
        var pass2 = document.getElementById("rpwd").value;
        var gender = document.getElementById("gender").value;

        var regex = /[a-zA-Z]+/;
        var result1 = fname.match(regex); // firstname validation
        regex = /[a-zA-Z]+/;
        var result2 = lname.match(regex); // lastname validation
        regex = /[a-zA-Z]((\.|_)*)?([0-9]*)?/;
        var result3 = username.match(regex); // username validation
        regex = /([a-zA-Z]((\.|_)*)?([0-9]*)?)+(@)(((g|hot)mail)| yahoo|outlook|ucp)((.com)|(.edu.pk)|(.co))/;
        var result4 = email.match(regex); // email validation
        regex = /\d[4]/;
        var result5 = year.match(regex); //year validation
        regex = /(.*)/;
        var result6 = pass.match(regex); //password validation

        if(fname.length != 0 )
        {
            if(lname.length != 0 )
            {
                if(pass.length >= 6 )
                {
                    if(pass === pass2)
                    {
                        if(result1 != null && result2 != null && result3 != null && result4 != null
                            && result5 != null && result6 != null  )
                        {



                        }
                        else
                        {
                            alert("result1:"+result1);
                        }
                    }
                    else
                    {
                        document.getElementById(pass2).innerText = "Password Does not Match, Enter Same Password";
                    }
                }
                else
                {
                    document.getElementById(pass).innerText = "Password should be longer than 6 characters";
                }
            }
            else
            {
                document.getElementById(lname).innerText= "Please enter last name";
            }
        }
        else
        {
            document.getElementById(fname).innerText = " Please enter first name";
        }*/

    }
</script>



<?php
include ("footer.php")
?>

</body>
</html>



