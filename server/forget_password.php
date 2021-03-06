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
    <?php
    require "tib_db.php";
    ?>
    <script src="/admin/js/jquery-3.3.1.js"></script>
    <script>
        function password_match() {
            var password=document.getElementById('password').value;

            var cpassword=document.getElementById('cpassword').value;
            $.post("check.php",
                {
                    pass1:password,pass2:cpassword
                },
                function (data,status) {
                    document.getElementById('show_res').innerHTML=data;

                }
            )

        }
    </script>
    <?php
    global $con;

    if(!$con)
    {
        echo "Not Connected";
    }
    if(!mysqli_select_db($con,'tib'))
    {
        echo "DB not selected";
    }

    if(isset($_POST['submitInfo']))
    {
        $yourEmail=$_POST['yourEmail'];
        $password=$_POST['password'];
        $selectQuery="select * from users where u_email='$yourEmail'";
        $count=mysqli_query($con,$selectQuery);
        $row=mysqli_num_rows($count);
        while($row>0)
        {
            $sQuery = mysqli_query($con,"UPDATE users SET u_password='$password' where u_email='$yourEmail'");
            break;
            /*echo "<script>alert('Email Does not exist!')</script>";*/
        }
    }?>

</head>
<body id="BG">
<?php
include("header.php");
?>
<form action="forget_password.php" method="post">
    <h4 class="fp"><i class=" 	far fa-question-circle"></i> Forgot Password</h4>
    <div class="box">
        <input class="int" type="text"  id=yourEmail name=yourEmail placeholder="Your email:"><br>
        <button class="Code" type="button" name="sendCode"> Send Code</button><br>
        <input class="int" type="text" placeholder="Code we sent:"><br>
        <h3 class="new"> Reset Password</h3>
        <input class="int" type="password" name="password" id="password" placeholder="New Password:"><br>
        <input class="int" type="password" name="cpassword" id="cpassword" placeholder="Confirm Password"><br>
        <button class="Submit" id="button" name="submitInfo" type="submit" onclick="password_match()">SUBMIT</button><br><br>
        <div id="show_res"></div>
    </div>
</form>

<?php
include ("footer.php");
?>

</body>
</html>