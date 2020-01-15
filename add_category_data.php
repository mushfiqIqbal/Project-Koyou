<?php
$category_name = "";
if (isset($_POST['category_submit'])){
    $category_name = mysqli_real_escape_string($link, $_POST['category_name']);

    $c_check=mysqli_query($link,"select * from category where category='$category_name'");
    if(mysqli_num_rows($c_check)==0) {
        $insert_query = mysqli_query($link, "INSERT INTO `category` (`category`) VALUE ('$category_name')");

        if ($insert_query){
            print "<script>alert('Category Added'); window.location.href= 'datatable_categories.php';</script>";
        }
        else{
            print mysqli_errno($link);
        }
    }
    else
    {
        print "<script>alert('Category Already Exits!')</script>";
    }
}
?>