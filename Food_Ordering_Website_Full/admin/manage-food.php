<?php 
    $pageTitle="Food Order Website - Manage-Food Page";
    include("partials/menu.php");
?>
    <!-- Food start -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Food</h1>
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

                if (isset($_SESSION['no-food-found'])) {
                    echo $_SESSION['no-food-found']; 
                    unset($_SESSION['no-food-found']); 
                }

                if (isset($_SESSION['upload'])) {
                    echo $_SESSION['upload']; 
                    unset($_SESSION['upload']); 
                }

                if (isset($_SESSION['failed-remove'])) {
                    echo $_SESSION['failed-remove']; 
                    unset($_SESSION['failed-remove']); 
                }

                if (isset($_SESSION['update'])) {
                    echo $_SESSION['update']; 
                    unset($_SESSION['update']); 
                }
            ?>
            <br>

            <!-- Button to add Food -->
            <a href="<?php echo SITEURL;?>admin/add-food.php" class="btn-primary">Add Food</a>
            <br><br><br>

            

            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Featured</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>

                <?php 
                    // query to display all Food
                    $sql = "SELECT * FROM tbl_food";

                    $res=mysqli_query($conn, $sql);

                    // check if the sql executed
                    if($res==TRUE){
                        $count = mysqli_num_rows($res); //count rows in database

                        $sn=1; //this is for S.N.
                        if($count>0){
                            while($rows=mysqli_fetch_assoc($res)){
                                $id = $rows['id'];
                                $title = $rows['title'];
                                $price = $rows['price'];
                                $image_name = $rows['image_name'];
                                $featured = $rows['featured'];
                                $active = $rows['active'];
                            ?>

                            <tr>
                                <td><?php echo $sn++?></td>
                                <td><?php echo $title?></td>
                                <td>$<?php echo $price?></td>
                                
                                <td>
                                    <?php 
                                        if($image_name!=""){
                                            ?>
                                                <img src="<?php echo SITEURL;?>images/food/<?php echo $image_name;?>" width= "100px">
                                            <?php 
                                        }else{
                                            echo "<div class = 'error'>Image Not Added.</div>";
                                        }
                                    ?>
                                </td>
                                
                                <td><?php echo $featured?></td>
                                <td><?php echo $active?></td>
                                <td>
                                    <a href="<?php echo SITEURL; ?>admin/update-food.php?id=<?php echo $id; ?>" class="btn-secondary">Update Food</a>
                                    <a href="<?php echo SITEURL; ?>admin/delete-food.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name;?>" class="btn-red">Delete Food</a>
                                </td>
                            </tr>

                            <?php
                            
                            }
                        }else{
                            ?>

                            <tr>
                                <td colspan = "6"><div class="error">No Food Added.</div></td>
                            </tr>
                            
                            <?php
                        }
                    }
                ?>
            </table>

            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Food end -->

<?php include("partials/footer.php");?>