<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ForgotPassword-The Instant Bloggers</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/forgot_password.css">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy|Pacifico|Spicy+Rice|Sedgwick+Ave|Archivo+Black" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy|Pacifico|Spicy+Rice|Sedgwick+Ave|Archivo+Black|Lobster" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body id="BG">

<?php
include("header.php")
?>

<h4 class="fp"><i class=" 	far fa-question-circle"></i> Forgot Password</h4>
<div class="box">
    <input class="int" type="text" placeholder="Your email:"><br>
    <button class="Code"type="button"> Send Code</button><br>
    <input class="int" type="text" placeholder="Code we sent:"><br>
    <h3 class="new"> Reset Password</h3>
    <input class="int" type="password" placeholder="New Password:"><br>
    <input class="int" type="password" placeholder="Confirm Password"><br>
    <button class="Submit" type="button">SUBMIT</button>
</div>


<footer id="f">
    <div class="Footer_top">
        <div class="Container">
            <div class="Row">
                <div class="col-lg-3 col-nd-6 footer-info">
                    <h3 class="lol">The Instant Bloggers</h3>
                    <div class="end">Content Disclaimer:
                        <p >All the content on our website is totally based on reality.The information is obtained from the sources that considers to be reliable. However no responsibility is accepted for the accuracy or completeness of the information</p>
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