<?php
session_start();
include ('../server/tib_db.php');
$error_msg = '';
if(isset($_POST['login'])){
    $username = $_POST['admin_username'];
    $password = $_POST['admin_password'];
    $query = "select * from admins where a_username='$username' AND a_password='$password'";
    $a = mysqli_query($con, $query);
    $checking_for_admin = mysqli_num_rows($a);  //getting user names if there are any according to the input
    if($checking_for_admin!=0) {
        //cookies:

        if(empty($_POST['remember'])) {
            setcookie('a_username','' );
            setcookie('a_password', '');
        } else {
            setcookie('a_username', $username, time() + (10 * 365 * 24 * 60 * 60));
            setcookie('a_password', $password, time() + (10 * 365 * 24 * 60 * 60));
        }

        $_SESSION['login_checked'] = $username;
        header('location:index.php');
    }
    else
        $error_msg = 'Wrong username or password, try again';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>TIB Admin Page - Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>


<body class="text-center" id="bg">

<form class="login_form" action="login.php" method="post">
    <h1 class="text-primary">Admin Login</h1>
    <h3 class="text-danger"> You are not an Admin of this website! Login first. </h3>
    <input type="text" value="<?php echo @$_COOKIE['a_username']?>" name="admin_username" class="form-control input_box" placeholder="Username">
    <?php
    if(isset($_POST['login'])) {
        if(0===preg_match("/^[a-zA-Z0-9]+([a-zA-Z0-9](_|-| )[a-zA-Z0-9])*[a-zA-Z0-9]+$/",$_POST['admin_username'])) {
            echo "Enter Valid Admin Username";
        }
    }
    ?>
    <input type="password" value="<?php echo @$_COOKIE['a_password']?>" name="admin_password" class="form-control input_box" placeholder="Password">
    <?php
    if(isset($_POST['login'])) {
        if(0===preg_match("/(.*)/",$_POST['admin_password'])) {
            echo "Not Allowed";
        }
    }
    ?>
    <br>
    <div class="text-danger"><?php echo $error_msg;?></div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="remember" name="remember">
        <label class="form-check-label" for="remember">Remember me</label>
    </div>
    <input class="btn btn_s btn-lg" type="submit" name="login" value="Log in">
</form>

</body>
</html>