
<?php
require 'db_connect.php';
include 'add_item_data.php';
include 'logout.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project Koyou | | Add Products</title>
    <?php include 'head.php';?>
    <!-- jQuery validation -->
    <?php include 'jQuery_validation_script.php';?>
</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include 'navbar.php';?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fas fa-cart-plus"></i> Add Products</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <?php include 'add_item_form.php';?>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <?php include 'footer_js.php';?>

</body>

</html>
