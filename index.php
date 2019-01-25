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


<table class="table">
    <?php
    $get_cat = "select cat_title,cat_image,cat_hover,cat_link,cat_logo from categories";
    $run_cat = mysqli_query($con,$get_cat);
    $count_cat = mysqli_num_rows($run_cat);
    if($count_cat==0){
        echo "<h2> No Category exist. </h2>";
    }

    $i=0;

    while ($count_cat>0) {

        if($i%3==0)
        {
            echo "
            <div class=\"img_padding\">
                <div class=\"row\">";
        }

        $row_pro = mysqli_fetch_array($run_cat);
        $cat_title= $row_pro['cat_title'];
        $cat_image = $row_pro['cat_image'];
        $cat_hover =$row_pro['cat_hover'];
        $cat_link =$row_pro['cat_link'];
        $cat_logo=$row_pro['cat_logo'];

        echo"
                    <div class=\"col-md-4\" > <a class=\"cat_link\" href=\"/tib/server/$cat_link\" title=$cat_hover>
                        <img src=/tib/images/$cat_image width=\"400px\" height=\"300px\" class=\"img-responsive\">
                        <h2 class=\"cat_name\"><i class=\"$cat_logo\" aria-hidden=\"true\"></i> $cat_title </h2>  </a>
                    </div>";

        $i++;

        if($i%3==0)
        {
            echo"                    
                </div>
            </div>";
        }

        $count_cat--;
    }
    ?>


    <?php
    include ("server/footer.php")
    ?>
</body>
</html>