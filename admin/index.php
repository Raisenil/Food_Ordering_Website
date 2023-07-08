<?php 
    $pageTitle="Food Order Website - Home Page";
    include("partials/menu.php");
?>

    <!-- main start -->
    <div class="main-content">
        <div class="wrapper">
            <h1>DASHBOARD</h1>
            <br><br>
            <?php 
                if (isset($_SESSION['login'])) {
                    echo $_SESSION['login']; //displaying Session msg
                    unset($_SESSION['login']); //Removing Session msg
                }

                if (isset($_SESSION['logged-in-Already'])) {
                    echo $_SESSION['logged-in-Already']; 
                    unset($_SESSION['logged-in-Already']);
                }
            ?>

            <br><br>

            <div class="col-4 text-center">
                <h1>5</h1>
                <br>
                categories
            </div>

            <div class="col-4 text-center">
                <h1>5</h1>
                <br>
                categories
            </div>

            <div class="col-4 text-center">
                <h1>5</h1>
                <br>
                categories
            </div>

            <div class="col-4 text-center">
                <h1>5</h1>
                <br>
                categories
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
    <!-- main end -->

<?php include("partials/footer.php");?>