
<?php
require 'db_connect.php';
include 'add_item_data.php';
include 'logout.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project Koyou | | Profile</title>
    <?php include 'head.php';?>
</head>

<body>
<div id="wrapper">
    <!-- Navigation -->
    <?php include 'navbar.php';?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fas fa-user-alt"></i> My Profile</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <?php
        $query = "SELECT username, email FROM registration WHERE username = '".$_SESSION['username']."'";
        if($result = $link->query($query))
        {
            while($row = $result->fetch_assoc())
            {
                ?>
                <div style="border: 5px double #000000; background-color: #152333">
                    <div style="margin: 50px">
                        <h1 style="font-size: 18px"><?php echo "<i class=\"fas fa-id-card\"></i><b> USERNAME : </b> ". $row['username']; ?></h1>
                        <h1 style="font-size: 18px"><?php echo "<br /><i class=\"fas fa-envelope\"></i><b> EMAIL : </b> ".$row['email']; ?></h1>
                    </div>
                </div>
                <?php
            }
            $result->free();
        }
        else
        {
            echo "No results found";
        }
        ?>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<?php include 'footer_js.php';?>

</body>

</html>