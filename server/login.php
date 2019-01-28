<?php
include("header.php");
include("tib_db.php");
$error_msg=' ';

if (isset($_POST['login2'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $query = "select * from users where u_username='$uname' and u_password= '$pass'";
    $count = mysqli_query($con, $query);
    $checking = mysqli_num_rows($count);  //getting user names if there are any according to the input

    if($checking!=0) {
        if(empty($_POST['remember'])) {
            setcookie('uname','' );
            setcookie('pass', '');
        } else {
            setcookie('uname', $uname, time() + (10 * 365 * 24 * 60 * 60));
            setcookie('pass', $pass, time() + (10 * 365 * 24 * 60 * 60));
        }
        header('location:../index.php');
    }
    else
        $error_msg = 'Wrong username or password, try again';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page-The Instant Bloggers</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css"href="../css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy|Pacifico|Spicy+Rice|Sedgwick+Ave|Archivo+Black|Lobster" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



    <style>
        h1, h2, h3, h4, h5, h6, a {
            margin:0; padding:10px;
        }
        .login {
            margin:0 auto;
            max-width:500px;
        }
        .login-header {
            color:#fff;
            text-align:center;
            font-size:300%;
            text-shadow: 6px 4px 2px #000000;
            font-family: 'Lobster', cursive;
        }
        .login-form {
            border: 5px solid maroon;
            background:maroon;
            border-radius:10px;
            box-shadow:0px 0px 10px #000;
        }
        .login-form h3 {
            text-align:left;
            margin-left:40px;
            color:#fff;
        }
        .login-form {
            box-sizing:content-box;
            padding-top: 15px;
            padding-bottom: 6%;
            margin: 5% auto;
            text-align: center
        }
        .login input[type="text"],
        .login input[type="password"] {
            max-width:400px;
            width: 80%;
            line-height:3em;
            font-family: '', sans-serif;
            margin:1em 2em;
            border-radius:5px;
            border:2px solid #f2f2f2;
            outline:none;
            padding-left:10px;
        }
        .login-form input[type="button"] {
            height:30px;
            width:100px;
            background:#fff;
            border:1px solid #f2f2f2;
            border-radius:20px;
            color: slategrey;
            text-transform:uppercase;
            font-family: 'Ubuntu', sans-serif;
            cursor:pointer;
        }
        .no-access {
            color:red;
            margin:20px 0px 20px -57%;
            text-decoration:underline;
            cursor:pointer;
            font-family: 'Ubuntu', sans-serif;
        }
        .try-again {
            color:#f2f2f2;
            text-decoration:underline;
            cursor:pointer;
        }
        .no-access {
            margin:10px 0;
        }
        .login-button {
            margin-bottom:10px;

        }
    </style>
</head>


<body id="bg">


<form class="login_form" action="login.php" method="post">
<div class="container">
    <div  class="login">
        <div class="login-header">
            <h1> <i class="fas fa-users"> </i> Log In</h1>
        </div>
        <div class="login-form">
            <h3><i class="fas fa-user"></i> Username:</h3>
            <input type="text" value="<?php echo @$_COOKIE['uname']?>" name="uname" placeholder="Username"/><br>
            <h3><i class="fas fa-key"></i> Password:</h3>
            <input type="password" value="<?php echo @$_COOKIE['pass']?>" name="pass" placeholder="Password"/>
            <div class="text-danger"><?php echo $error_msg;?></div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">&nbsp; &nbsp; Remember me</label>
            </div>
            <br>
            <input type="submit" value="Log In" name="login2" class="login-button" style="width: 160px;">     <br>
            <h6 class="no-access"><a href="forget_password.php">Forget Password?</a></h6>
        </div>
    </div>

</div>
</form>

<?php
include ("footer.php")
?>

</body>
</html>