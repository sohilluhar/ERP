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

<body class="hold-transition" style="background: #efefef">
<!-- Site wrapper -->
<div class="wrapper mt-5">


    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-6 offset-sm-3">

                <div class="card card-primary">
                    <div class="card-body">
                        <form action="./adduser.php" method="post" onsubmit="return validate(this)">

                            <div class="form-group">
                                <label class="text-black-50" for="fullname">Full name</label>
                                <input class="form-control" id="fullname" name="fullname" type="text"
                                       placeholder="Enter Name" required
                                       value="<?php echo $_SESSION['tempusername'] ?>">
                            </div>
                            <div class="form-group">
                                <label class="text-black-50" for="emailid">Email ID</label>
                                <input class="form-control" id="emailid" name="emailid" type="email"
                                       placeholder="Enter mail id"
                                       hidden value="<?php echo $_SESSION['tempusermail'] ?>"
                                       required>
                                <input class="form-control" id="emailid" name="emailid" type="email"
                                       placeholder="Enter mail id"
                                       disabled value="<?php echo $_SESSION['tempusermail'] ?>"
                                       required>
                            </div>
                            <div class="form-group">
                                <label class="text-black-50" for="pass">Password</label>
                                <input class="form-control" id="pass" name="pass" type="password"
                                       placeholder="Create Password"
                                       required>
                            </div>
                            <div class="form-group">
                                <label class="text-black-50" for="rpass">Retype Password</label>
                                <input class="form-control" id="rpass" name="rpass" type="password"
                                       placeholder="Retype Password"
                                       required>
                            </div>
                            <div class="row">
                                <!-- /.col -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                                </div>

                                <!-- /.col -->
                            </div>
                            <br>
                            <a class="btn btn-outline-info btn-block" href="./index.php">LOGIN HERE</a>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.login-box -->
<script>

    function validate() {
        pass = document.getElementById("pass").value;
        cpass = document.getElementById("rpass").value;
        // var cpass = validform.rpass.value;
        // var cpass = document.getElementById('rpass').value();

        var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
        if (!pass.match(passw)) {
            alert("Password must be of 6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter");
            return false;

        }

        if (pass !== cpass) {
            alert("Password Mismatch");
            return false;
        } else {
            return true;
        }

    }

</script>
<!-- jQuery -->
<script src="./include/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./include/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./include/dist/js/adminlte.min.js"></script>

</body>
</html>
