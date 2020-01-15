<?php
require 'db_connect.php';

$id=$_GET['id'];

//print $id;

$delete_query = mysqli_query($link, "DELETE FROM `category` WHERE `id` ='$id'");
if($delete_query)
    header("location:datatable_categories.php?status=No.$id category has been deleted");
else
    header("location:datatable_categories.php?status=ERROR Deleting Category");
?>