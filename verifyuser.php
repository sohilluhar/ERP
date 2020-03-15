<?php
include("include/connection.php");

$sql = "SELECT * FROM users WHERE user_mail='" . $_POST['email'] . "'    and password='" . $_POST["password"] . "'";
$res = mysqli_query($con, $sql);

if (mysqli_num_rows($res) == 1) {
    $row = $res->fetch_assoc();
    if ($row["type"] == "Student") {

        $_SESSION["login"] = "True";
        $_SESSION["usertype"] = "Student";
        $_SESSION["user_id"] = $row['id'];
        $_SESSION["user_name"] = $row['user_name'];
        $_SESSION["issubmitted"] = $row['form'];


        echo '
    <script>
    window.location.href="./fillForm.php";
    </script>
    ';
    } else if ($row["type"] == "Admin") {

        $_SESSION["login"] = "True";
        $_SESSION["usertype"] = "Admin";
        $_SESSION["user_name"] = $row['user_name'];


        echo '
    <script>
    window.location.href="./viewforms.php";
    </script>
    ';
    }

} else {
    echo '
    <script>
    alert("Wrong user name or password");
    window.location.href="./index.php";
    </script>
    ';

}
?>
