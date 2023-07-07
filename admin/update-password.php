<?php 
    $pageTitle="Food Order Website - Update-Password Page";
    include("partials/menu.php");
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Change Password</h1>
        <br><br>

        <?php 
            if(isset($_GET['id'])){
                $id=$_GET['id'];
            }
        ?>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Current Password: </td>
                    <td><input type="password" name="current_password" placeholder="Current Password" required></td>
                </tr>

                <tr>
                    <td>New Password: </td>
                    <td><input type="password" name="new_password" placeholder="New Password" required></td>
                </tr>

                <tr>
                    <td>Confirm Password: </td>
                    <td><input type="password" name="confirm_password" placeholder="Confirm Password" required></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                        <input type="submit" name="submit" value="change password" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php 
    if(isset($_POST['submit'])){
        
        $id = $_POST['id'];
        $current_password= md5($_POST['current_password']);
        $new_password= md5($_POST['current_password']);
        $confirem_password= md5($_POST['current_password']);

    }
    
?>

<?php include("partials/footer.php");?>