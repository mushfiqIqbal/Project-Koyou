<?php

if(isset($_POST['update']))
{
    $product_name = mysqli_real_escape_string($link, $_POST['product_name']);
    $product_des = mysqli_real_escape_string($link, $_POST['product_des']);
    $product_price=$_POST['product_price'];
    $product_quantity=$_POST['product_quantity'];
    $category=$_POST['category'];
    $status=$_POST['product_status'];
    $update_id=$_POST['id'];
    //File Upload and Save
    $product_image = $_FILES['product_image'];

    $fileName = $_FILES['product_image']['name'];
    $fileTmpName = $_FILES['product_image']['tmp_name'];
    $fileSize = $_FILES['product_image']['size'];
    $fileError = $_FILES['product_image']['error'];
    $fileType = $_FILES['product_image']['type'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png');

    //Image File Upload
    if (in_array($fileActualExt, $allowed)){
        if ($fileError === 0){
            if ($fileSize < 10000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
            }
            else{
                print "<script>alert('Your file is too big!')</script>";
            }
        }
        else{
            print "<script>alert('This file cannot be uploaded : ERROR!')</script>";
        }
    }
    else{
        print "<script>alert('You cannot upload files of this type or there was no file!')</script>";
    }
    //Image File Uplaod End

       $update_query = mysqli_query($link, "UPDATE `inventory` SET `product_name`='$product_name', `product_description`='$product_des',`product_price`='$product_price', `product_quantity`='$product_quantity', `category`='$category', `status`='$status', `image`='$fileNameNew' WHERE `id`='$update_id'");
        if ($update_query) {
            print "<script>alert('Data Updated'); window.location.href= 'datatable_inventory.php';</script>";
        }
        else {
            print mysqli_errno($link);
        }
}
?>
