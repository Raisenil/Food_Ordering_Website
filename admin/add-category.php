<?php 
    $pageTitle="Food Order Website - Add-Category Page";
    include("partials/menu.php");
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1>

        <br><br>

        <?php 
            if (isset($_SESSION['add'])) {
                echo $_SESSION['add']; 
                unset($_SESSION['add']); 
            }
        ?>

        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Title:</td>
                    <td><input type="text" name="title" placeholder="Category Title" required></td>
                </tr>

                <tr>
                    <td>Select Image:</td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>

                <tr>
                    <td>Featured:</td>
                    <td>
                        <input type="radio" name="featured" value="Yes">Yes
                        <input type="radio" name="featured" value="No">No
                    </td>
                </tr>

                <tr>
                    <td>Active:</td>
                    <td>
                        <input type="radio" name="active" value="Yes">Yes
                        <input type="radio" name="active" value="No">No
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Category" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>


    </div>
</div>

<?php include("partials/footer.php");?>

<?php 
    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        
        if(isset($_POST['featured'])){
            $featured = $_POST['featured'];
        }else{
            $featured = "NO";
        }

        if(isset($_POST['active'])){
            $active = $_POST['active'];
        }else{
            $active = "NO";
        }

        if(isset($_FILES['image']['name'])){
            $image_name = $_FILES['image']['name'];
            
            $source_path = $_FILES['image']['tmp_name'];
            
            $destination_path = "../images/category/".$image_name;

            $upload = move_uploaded_file($source_path,$destination_path);

            // continue working from here

        }else{
            $image_name = "";
        }

        $sql = "INSERT INTO tbl_category SET
            title = '$title',
            featured = '$featured',
            active = '$active'
            ";

            $res = mysqli_query($conn,$sql) or die(mysqli_error());


            if($res==true){
                // echo "Data inserted";
                $_SESSION['add']="<div class='success'>Category Added Successfully</div>";
                // redirect to manage-category page
                header('location:'.SITEURL.'admin/manage-category.php');
            }else{
                // echo "failed to insert";
                $_SESSION['add']="<div class='error'>Failed to Add Category</div>";
                // redirect to add-admin page
                header('location:'.SITEURL.'admin/add-category.php');
            }
    }
?>