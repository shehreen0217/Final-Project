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
<div id="navbar">
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
            <!--logo-->

            <div class="navbar-header">
                <a class="navitem1" href="#" class="navbar-brand"><h1>TIB</h1> <h4>The Instant Bloggers</h4> </a>
            </div>

            <div>
                <ul class="nav navbar-collapse">
                    <li class="active"> <a class="navitem" href="../index.php"><i class="fa fa-home" aria-hidden="true"></i> Home </a> </li>
                    <li> <a class="navitem" href="about_us.php"> <i class="fa fa-users" aria-hidden="true"></i> About Us </a> </li>


                    <!--drop down list-->
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="login.php"><i class="fa fa-user-circle" aria-hidden="true"></i> Log In</a>
                            <a class="dropdown-item" href="register.php"><i class="fa fa-book" aria-hidden="true"></i> Register</a>
                            <a class="dropdown-item" href="forget_password.php"><i class="fa fa-frown"></i> Forgot Password</a>
                            <a class="dropdown-item" href="contact_us.php"> <i class="fa fa-phone" aria-hidden="true"></i> Contact us</a>
                        </div>
                    </div>
                </ul>

            </div>

        </div>
    </nav>
</div>

<div class="container">
    <div  class="login">
        <div class="login-header">
            <h1> <i class="fas fa-users"> </i> Log In</h1>
        </div>
        <div class="login-form">
            <h3><i class="fas fa-user"></i> Username:</h3>
            <input type="text" placeholder="Username"/><br>
            <h3><i class="fas fa-key"></i> Password:</h3>
            <input type="password" placeholder="Password"/>
            <br>
            <input type="button" value="Log In" class="login-button"/>
            <br>
            <h6 class="no-access"><a href="forget_password.php">Forget Password?</a></h6>
        </div>
    </div>

</div>

<footer id="f">
    <div class="Footer_top">
        <div class="Container">
            <div class="Row">
                <div class="col-lg-3 col-nd-6 footer-info">
                    <h3 class="lol">The Instant Bloggers</h3>
                    <div class="end">Content Disclaimer:
                        <p >All the content on out website is totally based on reality.The information is obtained from the sources that considers to be reliable. However no responsibility is accepted for the accuracy or completeness of the information</p>
                    </div>
                </div>
                <div class="col-lg-3 col-nd-6 footer-links">
                    <h4 class="end">Useful Links</h4>
                    <ul>
                        <li> <i class="ion-ios-arrow-right"></i><a href="../index.php">Home</a> </li>
                        <li> <i class="ion-ios-arrow-right"></i><a href="register.php">Register</a> </li>
                        <li> <i class="ion-ios-arrow-right"></i><a href="login.php">Login</a> </li>
                        <li> <i class="ion-ios-arrow-right"></i><a href="about_us.php">About us</a> </li>
                        <li> <i class="ion-ios-arrow-right"></i><a href="contact_us.php">Contact us</a> </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-nd-6 footer-contact">
                    <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="fab fa-google-plus"></i></a>
                    <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
                </div>
                <div class="col-lg-3 col-nd-6 footer-newslatter">
                    <h4>Our newsletter</h4>
                    <p>Authentic content will be posted by authentic sources.To get our latest updates and news Subscribe us and stay tuned</p>
                    <form action="" method="post">
                        <input class ="ss"type="email" placeholder="Email:"><input class="last"  type="submit"value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <p class="copyright text-muted">Copyright &copy;TIB 2018</p>
</footer>

</body>
</html>