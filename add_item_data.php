<?php
$product_name = $product_des = $product_price = $product_quantity = "";
$nameErr = $desErr = $priceErr = $quantityErr = "";
if(isset($_POST['submit']))
{
    //PHP Validation
    /* if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["product_name"])) {
            $nameErr = "Name is required";
        } else {
            $product_name = $_POST["product_name"];
        }
        if (empty($_POST["product_des"])) {
            $desErr = "Description is required";
        } else {
            $product_des = $_POST["product_des"];
        }
        if (empty($_POST["product_price"])) {
            $priceErr = "Description is required";
        } else {
            $product_price = $_POST["product_price"];
        }
        if (empty($_POST["product_quantity"])) {
            $quantityErr = "Description is required";
        } else {
            $product_quantity = $_POST["product_quantity"];
        }
        $category=$_POST['category'];
        $status=$_POST['product_status']
    }

    function form_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    } */

    $product_name = mysqli_real_escape_string($link, $_POST['product_name']);
    $product_des = mysqli_real_escape_string($link, $_POST['product_des']);
    $product_price=$_POST['product_price'];
    $product_quantity=$_POST['product_quantity'];
    $category=$_POST['category'];
    $status=$_POST['product_status'];
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

    $q_check=mysqli_query($link,"select * from inventory where product_name='$product_name'");
    if(mysqli_num_rows($q_check)==0) {

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

        $insert_query = mysqli_query($link, "INSERT INTO `inventory`(`product_name`, `product_description`, `product_price`, `product_quantity`, `category`, `status`, `image`) VALUES ('$product_name', '$product_des', '$product_price','$product_quantity','$category','$status','$fileNameNew')");
        if ($insert_query){
            print "<script>alert('Data Inserted'); window.location.href= 'datatable_inventory.php';</script>";
        }
        else{
            print mysqli_errno($link);
        }
    }
    else
    {
        print "<script>alert('Data Already Inserted!')</script>";
    }

}

?>