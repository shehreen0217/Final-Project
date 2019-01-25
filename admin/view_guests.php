<?php
require_once "../server/tib_db.php";
if(!isset($_SESSION['login_checked'])) {
    header('location: login.php');
}
?>

<div class="row">
    <div class="col-sm-12">
        <h1 align="center">Guests</h1>
        <table class="table">
            <?php
            $get_u = "select * from guest";
            $run_u = mysqli_query($con,$get_u);
            $count_u = mysqli_num_rows($run_u);
            if($count_u==0){
                echo "<h2> No Category exist. </h2>";
            }
            else {?>
                <thead>
                <tr>
                    <th><h3>Name</h3></th>
                    <th><h3>Information</h3></th>

                </tr>
                </thead>
                <?php
                while ($row_u = mysqli_fetch_array($run_u)) {
                    $id = $row_u['g_id'];
                    $name = $row_u['g_name'];
                    $email = $row_u['g_email'];
                    $cn = $row_u['g_cn'];
                    $message = $row_u['g_message'];

                    ?>
                    <tr>
                        <th><?php echo "ID: $id"; ?></th>
                        <th><?php echo "Name: $name";?>
                            <br> <?php echo "Email: $email"; ?>
                            <br> <?php echo "Contact Number: $cn";?>
                            <br> <?php echo "Message: $message"; ?>
                        <th><a href="" class="btn btn-primary">

                            </a>
                            <a href="" class="btn btn-danger">

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