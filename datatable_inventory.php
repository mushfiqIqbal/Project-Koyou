
<?php
require 'db_connect.php';
include 'add_item_data.php';
include 'update_item_data.php';
include 'add_category_data.php';
include 'logout.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project Koyou | | Inventory</title>
    <?php include 'head.php';
    //Delete Data Message
    if(isset($_GET['status']))
    {
        $s=$_GET['status'];
        print "<script>alert('".$s."')</script>";
    }
    ?>
</head>

<!-- UPDATE DATA -->
<script>
    function SetId(id) {
        document.getElementById('edit_id').value = id;
    }
</script>

<body>
    <!-- ADD ITEM MODAL -->
    <div id="add_item_modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Item Form</h4>
                </div>
                <div class="modal-body">
                    <?php include 'jQuery_validation_script.php';?>
                    <?php include 'add_item_form.php';?>
                </div>
            </div>
        </div>
    </div>

    <!-- UPDATE MODAL -->
    <div id="update_modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update Form</h4>
                </div>
                <div class="modal-body">
                    <?php include 'jQuery_validation_script.php';?>
                    <?php include 'update_item_form.php';?>
                </div>
            </div>
        </div>
    </div>

    <!-- ADD CATEGORY MODAL -->
    <div id="add_category_modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Category Form</h4>
                </div>
                <div class="modal-body">
                    <?php include 'jQuery_validation_script.php';?>
                    <?php include 'add_category_form.php';?>
                </div>
            </div>
        </div>
    </div>

    <div id="wrapper">
        <!-- Navigation -->
        <?php include 'navbar.php';?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header col-lg-12"><i class="fas fa-truck-moving"></i> Inventory</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
                <!-- ADD CATEGORY MODAL BUTTON -->
                <div style="margin-bottom: 1px;">
                    <button type="button" class="btn btn-circle btn-bitbucket btn-lg" data-toggle="modal" data-target="#add_category_modal"><i class="fas fa-puzzle-piece"></i></button>
                </div>
                <!-- ADD ITEM MODAL BUTTON -->
                <div style="margin-bottom: 100px;">
                    <button type="button" class="btn btn-primary btn-lg page-header col-lg-2 col-lg-offset-10" data-toggle="modal" data-target="#add_item_modal">ADD ITEM</button>
                </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Items' Datatable
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="inventory_datatable">
                                        <thead>
                                            <tr>
                                                <th>SL No</th>
                                                <th style="text-align: center">Product's Name</th>
                                                <!-- <th style="text-align: center">Product's Description</th> -->
                                                <th style="text-align: center">Product's Price</th>
                                                <th style="text-align: center">Product's Quantity</th>
                                                <th style="text-align: center">Product's Category</th>
                                                <th style="text-align: center">Product's Status</th>
                                                <th style="text-align: center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $i=1;
                                        $select_query = "SELECT * FROM `inventory`";
                                        if($result = mysqli_query($link,$select_query)){
                                            if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $i; $i++;?></td>
                                            <td><?php echo $row['product_name'];?></td>
                                            <!--<td class="col-sm-2"><?php // echo $row['product_description'];?></td> -->
                                            <td><?php echo $row['product_price'];?></td>
                                            <td><?php echo $row['product_quantity'];?></td>
                                            <td><?php echo $row['category'];?></td>
                                            <td><?php echo $row['status'];?></td>
                                            <td class="col-sm-2" style="text-align: center">
                                                <!-- <button type="button" class="btn btn-primary fas fa-eye"></button> -->
                                                <a href="read.php?id=<?php echo $row['id'];?>" type="button" class="btn btn-primary fas fa-eye" name="read"></a>
                                                <!-- <button type="button" class="btn btn-info fas fa-pencil-alt" data-toggle="modal" data-target="#update_modal" onclick="SetId(<?php echo $row['id'];?>)"></button> -->
                                                <a href="update_item.php?id=<?php echo $row['id'];?>" type="button" class="btn btn-info fas fa-pencil-alt" name="update"></a>
                                                <!-- <button type="button" class="btn btn-warning fas fa-trash" name="delete" data-toggle="modal" data-target="#delete_modal"></button> -->
                                                <a href="delete_data.php?id=<?php echo $row['id'];?>" type="button" class="btn btn-warning fas fa-trash" name="delete" onclick="return confirm('Are you sure you want to delete?')"></a>
                                                <!-- DELETE MODAL -->
                                                <div id="delete_modal" class="modal fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">Confirm Deletion?</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <a href="delete_data.php?id=<?php echo $row['id'];?>" class="btn btn-warning ">YES</a>
                                                                <a class="btn btn-info" data-dismiss="modal">NO</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                            mysqli_free_result($result);
                                        } else{
                                            echo "No records matching your query were found.";
                                        }
                                        } else{
                                            echo "ERROR: Could not able to execute $select_query. " . mysqli_error($link);
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include 'footer_js.php';?>

</body>

</html>
