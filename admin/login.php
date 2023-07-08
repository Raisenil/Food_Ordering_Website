<?php include('../config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Order Website - Login Page</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="login">
        <h1 class="text-center">Login</h1>
        <br>
        <?php 
            if (isset($_SESSION['login'])) {
                echo $_SESSION['login']; //displaying Session msg
                unset($_SESSION['login']); //Removing Session msg
            }
        ?>

        <br>

        <form action="" method= "POST" class="text-center">
            <p>Username:</p>
            <input type="text" name="username" placeholder="Enter Username"><br><br>
            
            <p>Password:</p>
            <input type="password" name="password" placeholder="Enter Password"><br><br>
            
            <input type="submit" value="Login" name="submit" class="btn-primary">
        </form>
        
    </div>

    <?php include("partials/footer.php");?>
</body>
</html>

<?php 
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password'";

        $res = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($res);

        if($count==1){
            $_SESSION['login'] = "<div class='success'>Login Successful</div>";

            header('location:'.SITEURL.'admin/');
        }else{
            $_SESSION['login'] = "<div class='error text-center'>Username and Password did not match</div>";

            header('location:'.SITEURL.'admin/login.php');
        }
    }
?>