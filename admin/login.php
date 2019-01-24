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
    <input type="text" name="admin_username" class="form-control input_box" placeholder="Username">
    <input type="password" name="admin_password" class="form-control input_box" placeholder="Password"><br>
    <div class="text-danger"><?php echo $error_msg;?></div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="remember" name="remember">
        <label class="form-check-label" for="remember">Remember me</label>
    </div>
    <input class="btn btn_s btn-lg" type="submit" name="login" value="Sign in">
</form>

</body>
</html>