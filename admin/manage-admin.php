<?php 
    $pageTitle="Food Order Website - Manage-Admin Page";
    include("partials/menu.php");
?>
    <!-- main start -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Admin</h1>
            <br>

            <?php 
                if (isset($_SESSION['add'])) {
                    echo $_SESSION['add']; //displaying Session msg
                    unset($_SESSION['add']); //Removing Session msg
                }
            ?>

            <br><br>
            <!-- Button to add Admin -->
            <a href="add-admin.php" class="btn-primary">Add Admin</a>
            <br><br><br>

            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>

                <?php 
                    // query to display all admin user
                    $sql = "SELECT * FROM tbl_admin";

                    $res=mysqli_query($conn, $sql);

                    // check if the sql executed
                    if($res=TRUE){
                        
                    }
                ?>
            </table>

            <div class="clearfix"></div>
        </div>
    </div>
    <!-- main end -->

<?php include("partials/footer.php");?>