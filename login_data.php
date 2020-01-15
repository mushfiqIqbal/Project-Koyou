<?php
session_start();

// initializing variables
$userErr = $passErr = $wronguserpass = "";
$errors = 0;

// REGISTER USER
if (isset($_POST['login_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username))
    {
        $userErr = "*Username is required";
        $errors=$errors+1;
    }
    if (empty($password))
    {
        $passErr = "*Password is required";
        $errors=$errors+1;
    }

    // Finally, register user if there are no errors in the form
    if ($errors == 0) {
        $password = md5($password);//encrypt the password to match with database

        $login_query = mysqli_query($link, "SELECT * FROM `registration` WHERE `username`='$username' AND `password`='$password' ");
        $result=$login_query;

        if (mysqli_num_rows($result)==1)
        {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: profile.php');
        }
        else
        {
            $wronguserpass = "Wrong username/password combination";
        }
    }
}
?>