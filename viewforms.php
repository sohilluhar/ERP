<!DOCTYPE html>
<html>
<head>
    <?php

    include "include/connection.php";
    include "include/html_head.php";

    include("include/checkadmin.php");

    ?>
    <link rel="stylesheet" href="./include/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
    <?php
    include "include/nav_header.php";
    include "include/admin_sidebar.php";
    ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>All Forms</h1>
                    </div>

                </div>
            </div><!-- /.containehir-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- Small boxes (Stat box) -->
                <!--                <div class="container-fluid">-->
                <!--                    <div class="row mb-2">-->
                <!--                        <div class="col-12">-->
                <!--                            <h3 class="text-center">Add Patient</h3>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->

                <!-- /.container-fluid -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-primary">

                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">

                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>SR NO.</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Admission Year</th>
                                        <th>Level</th>
                                        <th>Admitted To</th>
                                        <th>Status</th>
                                        <th>Current Status</th>
                                        <th>View</th>


                                    </tr>
                                    <tbody>
                                    <?php


                                    $res_pending = mysqli_query($con, "SELECT * FROM student_form");

                                    while ($row = mysqli_fetch_assoc($res_pending)) {


                                        echo "<tr>";
                                        echo "<td>" . $row['srno'] . "</td>";
                                        echo "<td>" . $row['fname'] . "</td>";
                                        echo "<td>" . $row['lname'] . "</td>";
                                        echo "<td>" . $row['admissionyear'] . "</td>";
                                        echo "<td>" . $row['level'] . "</td>";
                                        echo "<td>" . $row['admittedto'] . "</td>";
                                        echo "<td>" . $row['admitted'] . "</td>";
                                        echo "<td>" . $row['currentstatus'] . "</td>";
                                        echo "<td>
                                        <form action='viewstudentform.php' method='post'>
                                        <input type='hidden' name='formid' value='" . $row['id'] . "'/>
                                        <button type='submit' class='btn btn-primary'>View</button>
                                        </form>
                                         </td>";


                                    }
                                    ?>

                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php
include "include/footer.php";
?>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
</div>


<?php
include "include/javascripts.php";
?>

<script src="./include/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="./include/plugins/jquery-validation/additional-methods.min.js"></script>

<script>
    $(function () {

        $("#example1").DataTable();

    });


</script>
</body>
</html>