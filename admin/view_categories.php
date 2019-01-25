<?php
require_once "../server/tib_db.php";
if(!isset($_SESSION['login_checked'])) {
    header('location: login.php');
}
?>

<div class="row">
    <div class="col-sm-12">
        <h1 align="center">Categories</h1>
        <table class="table">
            <?php
            $get_cat = "select * from categories";
            $run_cat = mysqli_query($con,$get_cat);
            $count_cat = mysqli_num_rows($run_cat);
            if($count_cat==0){
                echo "<h2> No Category exist. </h2>";
            }
            else {?>
            <thead>
            <tr>
                <th><h3>Title</h3></th>
                <th><h3>Image</h3></th>
            </tr>
            </thead>
            <?php
                while ($row_pro = mysqli_fetch_array($run_cat)) {
                    $cat_title = $row_pro['cat_title'];
                    $cat_image = $row_pro['cat_image'];
                    ?>
                    <tr>
                        <th><?php echo $cat_title; ?></th>
                        <th><img class="img-thumbnail" src='../images/<?php echo $cat_image;?>' width='320' height='160'></th>
                        <th><a href="index.php?edit_category=<?php echo $cat_title?>" class="btn btn-primary">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="index.php?delete_category=<?php echo $cat_title?>" class="btn btn-danger">
                                <i class="fa fa-trash-alt"></i> Delete
                            </a>
                        </th>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
</div>