<?php 
    $pageTitle="Food Order Website - Manage-Category Page";
    include("partials/menu.php");
?>
    <!-- category start -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Category</h1>
            <br>
            <?php 
                if (isset($_SESSION['add'])) {
                    echo $_SESSION['add']; 
                    unset($_SESSION['add']); 
                }

                if (isset($_SESSION['remove'])) {
                    echo $_SESSION['remove']; 
                    unset($_SESSION['remove']); 
                }

                if (isset($_SESSION['delete'])) {
                    echo $_SESSION['delete']; 
                    unset($_SESSION['delete']); 
                }

                if (isset($_SESSION['no-category-found'])) {
                    echo $_SESSION['no-category-found']; 
                    unset($_SESSION['no-category-found']); 
                }

                if (isset($_SESSION['update'])) {
                    echo $_SESSION['update']; 
                    unset($_SESSION['update']); 
                }

                if (isset($_SESSION['upload'])) {
                    echo $_SESSION['upload']; 
                    unset($_SESSION['upload']); 
                }

                if (isset($_SESSION['failed-remove'])) {
                    echo $_SESSION['failed-remove']; 
                    unset($_SESSION['failed-remove']); 
                }
            ?>
            <br>
            <!-- Button to add Category -->
            <a href="<?php echo SITEURL; ?>admin/add-category.php" class="btn-primary">Add Category</a>
            <br><br><br>

            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Featured</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>

                <?php 
                    // query to display all category
                    $sql = "SELECT * FROM tbl_category";

                    $res=mysqli_query($conn, $sql);

                    // check if the sql executed
                    if($res==TRUE){
                        $count = mysqli_num_rows($res); //count rows in database

                        $sn=1; //this is for S.N.
                        if($count>0){
                            while($rows=mysqli_fetch_assoc($res)){
                                $id = $rows['id'];
                                $title = $rows['title'];
                                $image_name = $rows['image_name'];
                                $featured = $rows['featured'];
                                $active = $rows['active'];
                            ?>

                            <tr>
                                <td><?php echo $sn++?></td>
                                <td><?php echo $title?></td>
                                
                                <td>
                                    <?php 
                                        if($image_name!=""){
                                            ?>
                                                <img src="<?php echo SITEURL;?>images/category/<?php echo $image_name;?>" width= "100px">
                                            <?php 
                                        }else{
                                            echo "<div class = 'error'>Image Not Added.</div>";
                                        }
                                    ?>
                                </td>
                                
                                <td><?php echo $featured?></td>
                                <td><?php echo $active?></td>
                                <td>
                                    <a href="<?php echo SITEURL; ?>admin/update-category.php?id=<?php echo $id; ?>" class="btn-secondary">Update Category</a>
                                    <a href="<?php echo SITEURL; ?>admin/delete-category.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name;?>" class="btn-red">Delete Category</a>
                                </td>
                            </tr>

                            <?php
                            
                            }
                        }else{
                            ?>

                            <tr>
                                <td colspan = "6"><div class="error">No Category Added.</div></td>
                            </tr>
                            
                            <?php
                        }
                    }
                ?>
            </table>

            <div class="clearfix"></div>
        </div>
    </div>
    <!-- category end -->

<?php include("partials/footer.php");?>