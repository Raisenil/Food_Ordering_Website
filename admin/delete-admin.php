<?php 
    include('../config/constants.php');

    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_admin WHERE id=$id";

    $res = mysqli_query($conn, $sql);

    if($res == true){
        // echo "Admin Deleted";
        $_SESSION['delete'] = "Admin Deleted Successfully";
        header('localhost:'.SITEURL.'admin/manage-admin.php');
    }else{
        // echo "Failed ro Delete Admin";
        $_SESSION['delete'] = "Failed to Delete Admin. Try Again Later.";
        header('localhost:'.SITEURL.'admin/manage-admin.php');
    }
?>