<?php 
    $pageTitle="Food Order Website - Manage-Order Page";
    include("partials/menu.php");
?>
    <!-- Order start -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Order</h1>
            <br><br>
            <!-- Button to add Admin -->
            <a href="<?php echo SITEURL;?>admin/add-order.php" class="btn-primary">Add Order</a>
            <br><br><br>

            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>

                <tr>
                    <td>1.</td>
                    <td>Raise nil</td>
                    <td>Raise</td>
                    <td>
                        <a href="#" class="btn-secondary">Update Admin</a>
                        <a href="#" class="btn-red">Delete Admin</a>
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Raise nil</td>
                    <td>Raise</td>
                    <td>
                    <a href="#" class="btn-secondary">Update Admin</a>
                        <a href="#" class="btn-red">Delete Admin</a>
                    </td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Raise nil</td>
                    <td>Raise</td>
                    <td>
                    <a href="#" class="btn-secondary">Update Admin</a>
                        <a href="#" class="btn-red">Delete Admin</a>
                    </td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Raise nil</td>
                    <td>Raise</td>
                    <td>
                    <a href="#" class="btn-secondary">Update Admin</a>
                        <a href="#" class="btn-red">Delete Admin</a>
                    </td>
                </tr>
            </table>

            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Order end -->

<?php include("partials/footer.php");?>