<?php
require_once "../server/tib_db.php";
if(!isset($_SESSION['login_checked'])) {
    header('location: login.php');
}
?>
<div class="row">
    <div class="col-sm-12">
        <h1 align="center">Users</h1>
        <table class="table">
            <?php
            $get_u = "select * from users";
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
                    $u_username = $row_u['u_username'];
                    $u_password = $row_u['u_password'];
                    $u_fname = $row_u['u_fname'];
                    $u_lname = $row_u['u_lname'];
                    $u_date = $row_u['u_date'];
                    $u_month = $row_u['u_month'];
                    $u_year = $row_u['u_year'];
                    $u_gender= $row_u['u_gender'];
                    $u_email = $row_u['u_email'];

                    ?>
                    <tr>
                        <th><?php echo "Username: $u_username"; ?></th>
                        <th><?php echo "Password: $u_password";?>
                           <br> <?php echo "Email: $u_email"; ?>
                            <br> <?php echo "Full Name: $u_fname $u_lname";?>
                            <br> <?php echo "Date of Birth: $u_date-$u_month-$u_year"; ?>
                            <br> <?php echo "Gender: $u_gender";?></th>
                        <th><a href="index.php?edit_users=<?php echo $u_username?>" class="btn btn-primary">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="index.php?delete_users=<?php echo $u_username?>" class="btn btn-danger">
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