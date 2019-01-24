<?php
require_once "../server/tib_db.php";
if(!isset($_SESSION['login_checked'])) {
    header('location: login.php');
}
?>

<div class="row">
    <div class="col-sm-12">
        <h1 align="center">Categories</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
            </tr>
            </thead>
            <?php
            $get_cat = "select * from categories";
            $run_cat = mysqli_query($con,$get_cat);
            $count_cat = mysqli_num_rows($run_cat);
            if($count_cat==0){
                echo "<h2> No Category exist. </h2>";
            }
            ?>
            else {
            <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
            </tr>
            </thead>
            <?php
            $i = 1;
                while ($row_pro = mysqli_fetch_array($run_cat)) {
                    $cat_title = $row_pro['cat_title'];
                    $cat_image = $row_pro['cat_image'];
                    ?>
                    <tr>
                        <th><?php echo $cat_title; ?></th>
                        <th><img class="img-thumbnail" src='product_images/<?php echo $cat_image;?>' width='80' height='80'></th>
                        <th><a href="index.php?edit_pro=<?php echo $cat_title?>" class="btn btn-primary">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="index.php?del_pro=<?php echo $cat_title?>" class="btn btn-danger">
                                <i class="fa fa-trash-alt"></i> Delete
                            </a>
                        </th>
                    </tr>
                <?php}?>
            }
        </table>
    </div>
</div>