
<?php
require 'db_connect.php';
include 'registration_data.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Sign Up</title>

    <?php include 'head.php';?>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign Up</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                    <!-- PHP Validation Error Message -->
                                    <span class="error"><?php echo $userErr;?></span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email">
                                    <!-- PHP Validation Error Message -->
                                    <span class="error"><?php echo $emailErr;?></span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password_main" type="password" value="">
                                    <!-- PHP Validation Error Message -->
                                    <span class="error"><?php echo $passErr;?></span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Confirm Password" name="password_repeat" type="password" value="">
                                    <!-- PHP Validation Error Message -->
                                    <span class="error"><?php echo $passrepeatErr;?></span>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <div class="input-group col-lg-12">
                                    <button type="submit" class="btn btn-lg btn-success btn-block" name="reg_user">Sign Up</button>
                                </div>
                                <p>
                                    Already a member? <a href="login.php">Login</a>
                                </p>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
