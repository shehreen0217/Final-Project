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


?>

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
    <form class="sss box" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-2">
                    <label for="fname"><i class="fas fa-user-circle"></i> First Name:</label>
                </div>
                <div class="col-lg-2">
                    <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname">
                </div>
                <div class="col-lg-2">
                    <label for="lname"><i class="fas fa-user-circle"></i> Last Name:</label>
                </div>
                <div class="col-lg-2">
                    <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname">
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
                    <label>  <input type="radio" name="gender">Male </label>
                </div>
                <div class="col-lg-2">
                    <label>  <input type="radio" name="gender">Female </label>
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
                    <label>Year <input type="text" class="form-control" id="year" placeholder="2018" name="year"> </label>
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
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-2">
                    <button class="button3" type="submit" name="signupbutton" value="Submit" onclick="ValidatingForm()">Sign Up</button>
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
        var fname = document.getElementById("fname").value;
        var lname = document.getElementById("lname").value;
        var username = document.getElementById("username").value;
        var email = document.getElementById("email").value;
        var date = document.getElementById("date").value;
        var month = document.getElementById("month").value;
        var year = document.getElementById("year").value;
        var pass = document.getElementById("pwd").value;
        var pass2 = document.getElementById("rpwd").value;
        var gender = document.getElementById("gender").value;

        var regex = /[a-zA-Z]/;
        var result1 = fname.match(regex);
        regex = /[a-zA-Z]/;
        var result2 = lname.match(regex);
        regex = /[a-zA-Z]((\.|_)*)?([0-9]*)?/;
        var result3 = username.match(regex);
        regex = /([a-zA-Z]((\.|_)*)?([0-9]*)?)+(@)(((g|hot)mail)| yahoo|outlook|ucp)((.com)|(.edu.pk)|(.co))/;
        var result4 = email.match(regex);
        regex = /\d[2]/;
        var result5 = date.match(regex);
        regex = /(.*)/;
        var result6 = month.match(regex);
        regex = /\d[4]/;
        var result7 = year.match(regex);
        regex = /(.*)/;
        var result8 = pass.match(regex);
        regex = /(.*)/;
        var result9 = pass2.match(regex);
        regex = /(.*)/;
        var result10 = gender.match(regex);
        
        if(result1 != null && result2 != null && result3 != null && result4 != null && result5 != null && result6 != null
            && result7 != null && result8 != null && result9 != null && result10 != null)
        {
            console.log("data inserted");
            <?php
                insertdata();
            ?>


        }
        else
        {
            console.log("data not inserted");
        }

    }


</script>

<?php
include ("footer.php")
?>

</body>
</html>



