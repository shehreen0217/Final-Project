<!DOCTYPE html>
<html lang="en">
<head>
    <title>The Instant Bloggers</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link rel="stylesheet"href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil|Dancing+Script|Lobster|Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy|Pacifico|Spicy+Rice|Sedgwick+Ave|Archivo+Black|Lobster||Allerta+Stencil" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <?php
    require "server/tib_db.php"
    ?>
</head>
<body id="bg">

<?php
include("server/header.php")
?>

<h1 class="cat" align="center"><b> <i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Categories </b></h1>

<div class="img_padding">

    <div class="row">
        <div class="col-md-4" > <a class="cat_link" href="server/sports.php" title="Sports">  <img src="images/pak2.jpg " width="500" height="300" class="img-responsive"> <h2 class="cat_name"><i class="fa fa-trophy" aria-hidden="true"></i> Sports </h2>  </a> </div>
        <div class="col-md-4" > <a class="cat_link" href="#" title="Technology">  <img src="images/tec.jpg " width="460" height="300" class="img-responsive"> <h2 class="cat_name"> <i class="fa fa-mobile" aria-hidden="true"></i> Technology </h2> </a></div>
        <div class="col-md-4" > <a class="cat_link" href="#" title="Entertainment">  <img src="images/enter.jpg " width="460" height="300" class="img-responsive"> <h2 class="cat_name"><i class="fa fa-camera-retro" aria-hidden="true"> </i> Entertainment</h2></a></div>

    </div>
</div>

<div class="img_padding">
    <div class="row">

        <div class="col-md-4"><a class="cat_link" href="#" title="Humor" >   <img src="images/humor.jpg " width="500" height="400" class="img-responsive"> <h2 class="cat_name"> <i class="far fa-laugh-beam"></i> Humor </h2></a> </div>
        <div class="col-md-6"><a class="cat_link" href="#" title="Trending" >

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
                        <p >All the content on our website is totally based on reality.The information is obtained from the sources that considers to be reliable. However no responsibility is accepted for the accuracy or completeness of the information</p>
                    </div>
                </div>
                <div class="col-lg-3 col-nd-6 footer-links">
                    <h4 class="end">Useful Links</h4>
                    <ul>
                        <li> <i class="ion-ios-arrow-right"></i><a href="index.php">Home</a> </li>
                        <li> <i class="ion-ios-arrow-right"></i><a href="server/register.php">Register</a> </li>
                        <li> <i class="ion-ios-arrow-right"></i><a href="server/login.php">Login</a> </li>
                        <li> <i class="ion-ios-arrow-right"></i><a href="server/about_us.php">About us</a> </li>
                        <li> <i class="ion-ios-arrow-right"></i><a href="server/contact_us.php">Contact us</a> </li>
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