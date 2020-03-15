<!DOCTYPE html>
<html>
<head>
    <?php

    include "include/connection.php";
    include "include/html_head.php";

    ?>
    <meta name="google-signin-client_id"
          content="259269426483-44t80e910dc22k07toctle58ht1gafbu.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<body class="hold-transition login-page">
<div class="login-box">

    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in</p>

            <form action="./verifyuser.php" method="post">
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
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
                <p class="text-info">REGISTER HERE</p>
                <div id="my-signin1" class="g-signin2 text-center" onclick="ClickLogin()"
                     data-onsuccess="onSignIn">Register
                </div>
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
<script src="./include/dist/js/adminlte.min.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
<script>

    var clicked = false;


    function ClickLogin() {
        clicked = true;
    }

    function onSuccess(googleUser) {

        $('#my-signin1 div div span').text("Register using Google");
        if (clicked) {
            $('#my-signin1 div div span').text("Register using Google");
            var profile = googleUser.getBasicProfile();
            var id_token = googleUser.getAuthResponse().id_token;


            console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
            console.log('Name: ' + profile.getName());
            console.log('Image URL: ' + profile.getImageUrl());
            console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.


            if (profile) {
                $.ajax({
                    type: 'POST',
                    url: 'addusertodb.php',
                    data: {
                        // id: profile.getId(),
                        name: profile.getName(),
                        email: profile.getEmail(),
                        // imgurl: profile.getImageUrl(),
                        id_token: id_token
                    }
                }).done(function () {


                    window.location.href = './registration.php';
                    //window.location.href = 'dashboard.php';

                }).fail(function () {
                    alert("Error occur. Try again later");
                });
            }
        }
    }

    function onFailure(error) {
        console.log(error);

    }

    function renderButton() {

        gapi.signin2.render('my-signin1', {
            'scope': 'profile email',
            'width': 320,
            'height': 50,
            'longtitle': false,
            'theme': 'dark',
            'prompt': 'select_account',
            'onsuccess': onSuccess,
            'onfailure': onFailure
        });

        $('#my-signin1 div div span').text("Register using Google");
    }

</script>


</body>
</html>
