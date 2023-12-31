<?php 
    $pageTitle="Food Order Website - Add-Admin Page";
    include("partials/menu.php");
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        
        <br><br>
        
        <?php 
            if (isset($_SESSION['add'])) {
                echo $_SESSION['add']; //displaying Session msg
                unset($_SESSION['add']); //Removing Session msg
            }
        ?>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name" placeholder="Enter Your Name" required></td>
                </tr>

                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" placeholder="Your Username" required></td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="Enter Your Password" required></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>


<?php include("partials/footer.php");?>

<?php 
    if(isset($_POST['submit'])){
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); //password encrypted with MD5


        $sql = "INSERT INTO tbl_admin SET
            full_name = '$full_name',
            username = '$username',
            password = '$password'
            ";

            $res = mysqli_query($conn,$sql) or die(mysqli_error());


            if($res==true){
                // echo "Data inserted";
                $_SESSION['add']="<div class='success'>Admin Added Successfully</div>";
                // redirect to manage-admin page
                header('location:'.SITEURL.'admin/manage-admin.php');
            }else{
                // echo "failed to insert";
                $_SESSION['add']="<div class='error'>Failed to Add Admin</div>";
                // redirect to add-admin page
                header('location:'.SITEURL.'admin/add-admin.php');
            }
    }
?>