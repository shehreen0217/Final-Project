<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us-The Instant Bloggers</title>
    <link rel="stylesheet" href="../css/contact_us.css">
    <link rel="stylesheet" href="../css/about_us.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700">
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy|Pacifico|Spicy+Rice|Sedgwick+Ave|Archivo+Black|Lobster" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body id="bg">

<?php
include("header.php")
?>

<div class="container">
    <div class="header">
        <h1><i class="fas fa-mail-bulk"></i> Contact Us</h1>
    </div>
    <div class="para" align="center">
        <h4> <b> How can we help you? </b> </h4>
    </div>

    <div class="box" align="center">

        <label for="rpwd"> Name</label>
        <div class="form">
            <input type="text" class="form-control" id="rpwd" placeholder="          Your name here" name="rpwd">
        </div>
        <label for="rpwd"> Email</label>
        <div class="form">
            <input type="text" class="form-control" id="rpwd" placeholder="          Your e-mail here" name="rpwd">
        </div>
        <label for="rpwd"> Contact Number </label>
        <div class="form">
            <input type="text" class="form-control" id="rpwd" placeholder="          Your contact number" name="rpwd">
        </div>
        <label for="rpwd"> Message</label>
        <div class="form1">
            <input type="text" class="form-control" id="rpwd" placeholder="                                         Your message here" name="rpwd">
        </div>
        <button class="button1" type="submit" value="Submit">Let's Talk</button>
    </div>
    <div class="para" align="center">
        <h4> <b> Our Links </b> </h4>
    </div>
    <div class="buttonbox" align="center">
        <label for="rpwd"> Our Email:    <i>www.theinstantbloggers.com</i> </label>
        <br>
        <label for="rpwd"> Our Contact:     <i>+92 323 8838679, +92 322 8034596</i> </label>
    </div>
    <div class="para" align="center">
        <h4> <b> Our Location </b> </h4>
    </div>
    <div class="col map_container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.616123601826!2d74.26573642537555!3d31.446915973919346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919017432b1835b%3A0xe396992a5b05891c!2sUniversity+of+Central+Punjab!5e0!3m2!1sen!2s!4v1542485280139" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
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