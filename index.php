<?php 
    include('partials-font/menu.php');
?>

    <!-- Food Search Start -->
    <section class="food-search text-center">
        <div class="container">
            <form action="food-search.php">
                <input type="search" name="search" placeholder="Search For Food.." required>

                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>
        </div>
    </section>
    <!-- Food Search End -->

    <!-- Categories Start -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <a href="category-foods.php">
                <div class="box-3 float-container">
                    <img src="images/pizza.jpg" alt="Pizza" class="img-responsive img-curve">

                    <h3 class="float-text text-white">Pizza</h3>
                </div>
            </a>

            <a href="#">
                <div class="box-3 float-container">
                    <img src="images/burger.jpg" alt="Burger" class="img-responsive img-curve">

                    <h3 class="float-text text-white">Burger</h3>
                </div>
            </a>

            <a href="#">
                <div class="box-3 float-container">
                    <img src="images/momo.jpg" alt="Momo" class="img-responsive img-curve">

                    <h3 class="float-text text-white">Momo</h3>
                </div>
            </a>

            <div class="clearfix"></div>

            <p class="text-center">
                <a href="categories.php">See All Categories</a>
            </p>
        </div>
    </section>
    <!-- Categories End -->

    <!-- Food Menu Start -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>
            
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-pizza.jpg" alt="Chicken Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Food Title</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with italian Sauce, Chicken and organic vegetables
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-burger.jpg" alt="Chicken Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Food Title</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with italian Sauce, Chicken and organic vegetables
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>

                <div class="clearfix"></div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-pizza.jpg" alt="Chicken Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Food Title</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with italian Sauce, Chicken and organic vegetables
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-momo.jpg" alt="Chicken Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Food Title</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with italian Sauce, Chicken and organic vegetables
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>

        <p class="text-center">
            <a href="foods.php">See All Foods</a>
        </p>
    </section>
    <!-- Food-Menu End -->

<?php 
    include('partials-font/footer.php');
?>