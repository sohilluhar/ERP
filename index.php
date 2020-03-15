<!DOCTYPE html>
<html>
<head>
    <?php

    include "include/connection.php";
    include "include/html_head.php";

    ?>
    <!--    <meta name="google-signin-client_id"-->
    <!--          content="259269426483-44t80e910dc22k07toctle58ht1gafbu.apps.googleusercontent.com">-->
    <!--    <script src="https://apis.google.com/js/platform.js" async defer></script>-->
</head>
<body class="hold-transition login-page">
<div class="login-box">

    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in</p>

            <form action="./verifyuser.php" method="post">
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">

                </div>
                <div class="row">


                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center mb-3">
                <p>- OR -</p>
                <a class="btn btn-outline-info" href="./registration.php">REGISTER HERE</a>
                <!--                <div class="g-signin2 text-center" data-onsuccess="onSignIn"></div>-->
            </div>

        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="./include/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./include/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../include/dist/js/adminlte.min.js"></script>

</body>
</html>
