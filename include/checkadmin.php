<?php


if (!isset($_SESSION["login"])) {

    echo '
    <script>
    window.location.href="./index.php";
    </script>
    ';
    if ($_SESSION["usertype"] != 'Admin') {

        echo '
    <script>
    window.location.href="./index.php";
    </script>
    ';
    }

}
?>
