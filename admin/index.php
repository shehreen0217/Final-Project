<?php
session_start();
require_once "../server/tib_db.php";
if(!isset($_SESSION['login_checked'])) {
    header('location: login.php');
}
?>
</>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil|Dancing+Script|Lobster|Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy|Pacifico|Spicy+Rice|Sedgwick+Ave|Archivo+Black|Lobster||Allerta+Stencil" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
</head>
<body  id="bg">

<div id="navbar">
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="navitem1"><h1>TIB</h1> <h3>The Instant Bloggers</h3> </div>
                <div class="navitem1 font1"><h2>ADMIN PANEL</h2></div>
            </div>
        </div>
    </nav>
</div>

<div class="wrapper container-fluid row">
    <nav id="sidebar">
        <ul class="list-unstyled">
            <li>
                <a href="index.php?insert_category">
                    <i class="fas fa-plus"></i> Insert New Category
                </a>
            </li>
            <li>
                <a href="index.php?view_categories">
                    <i class="fas fa-list"></i> View All Categories
                </a>
            </li>
            <li>
                <a href="index.php?view_users">
                    <i class="fas fa-users"></i> View All Users
                </a>
            </li>
            <li>
                <a href="index.php?view_guests">
                    <i class="fas fa-street-view"></i> View All Guests
                </a>
            </li>
            <li>
                <a href="logout.php">
                    <i class="fa fa-sign-out-alt"></i> Admin logout</a>
            </li>
        </ul>
    </nav>
    <div class="body1">
        <h2 class="text-center text-primary"><?php echo @$_GET['logged_in']?></h2>
        <?php
        if(isset($_GET['insert_category'])){
            include ('insert_categories.php');
        }
        else if(isset($_GET['view_categories'])){
            include ('view_categories.php');
        }
        else if(isset($_GET['edit_categories'])){
            include ('edit_categories.php');
        }
        else if(isset($_GET['view_users'])){
            include ('view_users.php');
        }
        else if(isset($_GET['view_guests'])) {
            include('view_guests.php');
        }
        ?>
    </div>
</div>

<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
<script>
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });

    });
</script>
</body>
</html>
