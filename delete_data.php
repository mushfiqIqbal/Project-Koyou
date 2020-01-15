<?php
require 'db_connect.php';

    $id=$_GET['id'];

    //print $id;

    $delete_query = mysqli_query($link, "DELETE FROM `inventory` WHERE `id` ='$id'");
    if($delete_query)
        header("location:datatable_inventory.php?status=No.$id data has been deleted");
    else
        header("location:datatable_inventory.php?status=ERROR Deleting Data");
?>