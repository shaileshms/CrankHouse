<?php
/**
 * Created by PhpStorm.
 * User: Shailesh
 * Date: 9/21/15
 * Time: 1:29 PM
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Crank House Admin</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">

    <style type="text/css">
        .login {
            width: 25%;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <img src="<?php echo base_url("assets/img/logo-black.png"); ?>" style="height:70px;width:105px;" >
    </div>
    <!-- /.container -->
</nav>
<div class="container login" style="margin-top: 150px;">
    <?php echo form_open('verifylogin'); ?>

    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <input type="submit" class="btn btn-success" value="Login"/>
    <div id="alert" style="margin-top: 5px;"><?php echo validation_errors();?></div>
</div>

<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
<script>
    if( $('#alert').is(':empty') ) {
    } else {
        var d = document.getElementById("alert");
        d.className = d.className + "alert alert-danger";
    }
</script>
</body>
</html>