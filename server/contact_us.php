<?php
require "tib_db.php";

function insertinfo()
{
    echo "here";
    global $con;
    if(isset($_POST['contactusbutton']))
    {
        $g_name = $_POST['name'];
        $g_email = $_POST['email'];
        $g_cn = $_POST['cn'];
        $g_message = $_POST['message'];

        $insert_data = " insert into guest (g_name, g_email, g_cn, g_message)
                          VALUES ('$g_name','$g_email','$g_cn','$g_message');";
        $insert_val = mysqli_query($con, $insert_data);
    }
}
?>

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

<form  action=""  onsubmit="ValidatingForm()" method="post">
<div class="container">
    <div class="header">
        <h1><i class="fas fa-mail-bulk"></i> Contact Us</h1>
    </div>
    <div class="para" align="center">
        <h4> <b> How can we help you? </b> </h4>
    </div>

    <div class="box" align="center">

        <label for="name"> Name</label>
        <div class="form">
            <input type="text" class="form-control" id="name" placeholder="          Your name here" name="name">
        </div>
        <label for="email"> Email</label>
        <div class="form">
            <input type="text" class="form-control" id="email" placeholder="          Your e-mail here" name="email">
        </div>
        <label for="cn"> Contact Number </label>
        <div class="form">
            <input type="text" class="form-control"   id="cn" placeholder="          Your contact number" name="cn">
        </div>
        <label for="message"> Message</label>
        <div class="form1">
            <input type="text" class="form-control" id="message" placeholder="                                         Your message here" name="message">
        </div>
        <button class="button1" type="submit" name="contactusbutton" value="Submit" onclick="ValidatingForm()">Let's Talk</button>
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


<script>
    function ValidatingForm()
    {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var cn = document.getElementById("cn").value;

        var regex = /[a-zA-Z]/;
        var result1 = name.match(regex);
        regex = /([a-zA-Z]((\.|_)*)?([0-9]*)?)+(@)(((g|hot)mail)| yahoo|outlook|ucp)((.com)|(.edu.pk)|(.co))/;
        var result2 = email.match(regex);
        regex = /([0-9]{4})?\-?([0-9]{7})?/;
        var result3 = cn.match(regex);

        if(result1 != null && result2 != null && result3 != null)
        {
            console.log("data inserted");
            <?php
            insertinfo();
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
</form>
</body>
</html>