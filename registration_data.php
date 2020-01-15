<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$userErr = $emailErr = $passErr = $passrepeatErr = "";
$errors = 0;

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password_main = mysqli_real_escape_string($link, $_POST['password_main']);
    $password_repeat = mysqli_real_escape_string($link, $_POST['password_repeat']);

    // form validation: ensure that the form is correctly filled ...



    if (!empty($username)) {
        if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
            $userErr = "*Only letters and white space allowed";
            $errors=$errors+1;
        }
    }
    else{
        $userErr = "*Username is required";
        $errors=$errors+1;
    }

    if (!empty($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "*Invalid email format";
            $errors=$errors+1;
        }
    }
    else{
        $emailErr = "*Email is required";
        $errors=$errors+1;
    }

    if (!empty($password_main)) {
        if (strlen($password_main)<8){
            $passErr = "*Password must be at least 8 characters";
        }
    }
    else{
        $passErr = "*Password is required";
        $errors=$errors+1;
    }

    if ($password_main != $password_repeat) {
        $passrepeatErr = "*Two passwords do not match";
        $errors=$errors+1;
    }
    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM registration WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($link, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            $userErr = "*Username already exists";
            $errors=$errors+1;
        }

        if ($user['email'] === $email) {
            $emailErr = "*Email already exists";
            $errors=$errors+1;
        }
    }

    // Finally, register user if there are no errors in the form
    if ($errors == 0) {
        //$password = md5($password_main);//encrypt the password before saving in the database

        //$reg_query = mysqli_query($link, "INSERT INTO `registration` (`username`, `email`, `password`) VALUES('$username', '$email', '$password')");

        $sql = "INSERT INTO `registration` (`username`, `email`, `password`) VALUES(?, ?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password =  md5($password_main);

            if (mysqli_stmt_execute($stmt)){
                echo "<script>alert('Account Created')</script>";
            }
            else{
                echo "ERROR: Could not execute query: $sql. " . mysqli_error($link);
            }
        }
        else{
            echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
        }
        mysqli_stmt_close($stmt);
        mysqli_close($link);

        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are now logged in";
        header('location: profile.php');
    }
}
?>