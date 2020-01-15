
<?php
include 'logout.php';
require 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project Koyou | | Dashboard</title>
    <?php include 'head.php';?>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include 'navbar.php';?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php
                                        $query = "SELECT * FROM `inventory`";
                                        $result = mysqli_query($link, $query);
                                        echo mysqli_num_rows($result);
                                    ?></div>
                                    <div>Products</div>
                                </div>
                            </div>
                        </div>
                        <a href="datatable_inventory.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php
                                        $query = "SELECT * FROM `category`";
                                        $result = mysqli_query($link, $query);
                                        echo mysqli_num_rows($result);
                                        ?></div>
                                    <div>Categories</div>
                                </div>
                            </div>
                        </div>
                        <a href="datatable_categories.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include 'footer_js.php';?>

</body>

</html>
