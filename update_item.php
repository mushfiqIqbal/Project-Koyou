
<?php
require 'db_connect.php';
include 'update_item_data.php';
include 'logout.php';
?>

<!-- Runs prepared query to get information from database -->
<?php
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Get URL parameter
    $id =  trim($_GET["id"]);

    // Prepare a select statement
    $sql = "SELECT * FROM `inventory` WHERE id = ?";
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        // Set parameters
        $param_id = $id;

        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                // Retrieve individual field value
                $product_name = $row["product_name"];
                $product_des = $row["product_description"];
                $product_price = $row["product_price"];
                $product_quantity = $row["product_quantity"];
                $category = $row["category"];

            } else{
                // URL doesn't contain valid id.
                exit();
            }

        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close statement
    mysqli_stmt_close($stmt);

    // How important is Close connection?
    //mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project Koyou | | Update Products</title>
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
                <h1 class="page-header"><i class="fas fa-pen"></i> Update Form</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <?php include 'update_item_form.php';?>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<?php include 'footer_js.php';?>

</body>

</html>
