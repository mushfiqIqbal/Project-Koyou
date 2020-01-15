<?php

if(isset($_POST['category_update']))
{
    $category_name = mysqli_real_escape_string($link, $_POST['category_name']);
    $update_id=$_POST['id'];



    $update_query = mysqli_query($link, "UPDATE `category` SET `category`='$category_name' WHERE `id`='$update_id'");
    if ($update_query) {
        print "<script>alert('Category Updated'); window.location.href= 'datatable_categories.php';</script>";
    }
    else {
        print mysqli_errno($link);
    }
}
?>
