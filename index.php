<!DOCTYPE html>
<html lang="en">
<head>
    <title>Business Directory</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style (2).css">

</head>
<style>
    .help-block{
        color:red;
    }
</style>

<body>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            <div class="card">
                <form action="loginphp.php" method="post">
                    <div class="card-body text-center">
                        <h3 class="mb-4"><b>Business Directory</b></h3>
                        <div class="mb-4">
                            <i class="feather icon-unlock auth-icon"></i>
                        </div>                  
                        <!-- <h3 class="mb-4">Login</h3> -->
                        <div class="input-group mb-3">
                            <input type="email" class="form-control"name="email" placeholder="Email" value="" required>
                        </div>
                        <span class="help-block"></span>
                        <div class="input-group mb-4">
                            <input type="password" class="form-control" name="password" placeholder="password" required>
                        </div>
                        <span class="help-block"></span>
                        <div class="form-group text-left">
                            <!-- <div class="checkbox checkbox-fill d-inline">
                                <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="">
                                <label for="checkbox-fill-a1" class="cr"> Save Details</label>
                            </div> -->
                        </div>
                        <button name="btn_login" class="btn btn-primary shadow-2 mb-4">Login</button>
                        <p class="mb-0 text-muted">Don’t have an account? <a href="registration.php">Signup</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
?>
    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
