<?php
include("include/connection.php");

$sql = "SELECT * FROM users WHERE user_mail='" . $_POST['emailid'] . "'";
$res = mysqli_query($con, $sql);

if (mysqli_num_rows($res) == 0) {
    $sql = "INSERT INTO `users` (`user_mail`, `password`, `type`, `user_name`, `form`) 
            VALUES ('" . $_POST['emailid'] . "', '" . $_POST['pass'] . "', 'Student', '" . $_POST['fullname'] . "', '0');";
    $res = mysqli_query($con, $sql);


    echo '
    <script>
    alert("Registration Successful")
    window.location.href="./index.php";
    </script>
    ';


} else {
    echo '
    <script>
    alert("User Already Exists");
    window.location.href="./index.php";
    </script>
    ';

}
?>
