<?php
include("include/connection.php");
include("include/checkadmin.php");

?>
<!DOCTYPE html>
<html>
<head>
    <?php
    include "include/html_head.php";

    $formid = $_POST['formid'];
    $q = "SELECT * FROM student_form WHERE id=$formid";
    $res = mysqli_query($con, $q);
    $row = mysqli_fetch_assoc($res);

    ?>
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
                        <h1>Form Details </h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">


                <!-- /.container-fluid -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Filled Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">


                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="srno">SR NO.</label>
                                            <input value="<?php echo $row['srno']; ?>" disabled
                                                   class="form-control" id="srno" name="srno"
                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="capid">CAP ID</label>
                                            <input value="<?php echo $row['capid']; ?>" disabled class="form-control"
                                                   id="capid" name="capid"
                                                   type="text">
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <div class="row">

                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input value="<?php echo $row['title']; ?>" disabled class="form-control"
                                                   id="title" name="title"
                                                   type="text">
                                        </div>

                                    </div>
                                    <div class="col-sm-11">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="sname">Surname</label>
                                                    <input value="<?php echo $row['sname']; ?>" disabled type="text"
                                                           name="sname" class="form-control" id="sname"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="fname">First Name</label>
                                                    <input value="<?php echo $row['fname']; ?>" disabled type="text"
                                                           name="fname" class="form-control" id="fname"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="lname">Last Name</label>
                                                    <input value="<?php echo $row['lname']; ?>" disabled type="text"
                                                           name="lname" class="form-control" id="lname"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="mname">Mother Name</label>
                                                    <input value="<?php echo $row['mname']; ?>" disabled type="text"
                                                           name="mname" class="form-control" id="mname"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="dob">DOB</label>
                                            <input value="<?php echo $row['dob']; ?>" disabled
                                                   type="text" name="dob"
                                                   class="form-control" id="dob"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label for="age">Age</label>
                                            <input value="<?php echo $row['age1']; ?>" disabled type="text" name="age"
                                                   class="form-control" id="age"
                                            >
                                            <input value="<?php echo $row['age1']; ?>" disabled type="text" name="age1"
                                                   class="form-control" id="age1"
                                                   hidden>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <input value="<?php echo $row['gender']; ?>" type="text"
                                                   name="gender"
                                                   class="form-control" id="gender"
                                                   disabled>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="religion">Religion</label>
                                            <input value="<?php echo $row['religion']; ?>" type="text"
                                                   name="religion"
                                                   class="form-control" id="religion"
                                                   disabled>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="cast">Caste Category</label>
                                            <input value="<?php echo $row['cast']; ?>" disabled type="text" name="cast"
                                                   class="form-control" id="cast"
                                            >

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="address">Local Address</label>
                                            <textarea class="form-control" id="address"
                                                      name="address"
                                                      rows="3"
                                                      DISABLED
                                            ><?php echo $row['address']; ?></textarea>
                                        </div>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="district">District</label>
                                            <input value="<?php echo $row['district']; ?>" disabled class="form-control"
                                                   id="district" name="district"

                                                   type="text">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="state">State</label>
                                            <input value="<?php echo $row['state']; ?>" disabled class="form-control"
                                                   id="state" name="state"

                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="pincode">Pincode</label>
                                            <input value="<?php echo $row['pincode']; ?>" disabled class="form-control"
                                                   id="pincode" name="pincode"

                                                   type="text">
                                        </div>
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-sm-12">

                                        <div class="form-group">
                                            <label for="paddress">Permanent Address</label>
                                            <textarea class="form-control" id="paddress"
                                                      name="paddress"
                                                      rows="3"
                                                      DISABLED
                                            ><?php echo $row['paddress']; ?></textarea>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="pdistrict">District</label>
                                            <input value="<?php echo $row['pdistrict']; ?>" disabled
                                                   class="form-control"
                                                   id="pdistrict" name="pdistrict"

                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="pstate">State</label>
                                            <input value="<?php echo $row['pstate']; ?>" disabled class="form-control"
                                                   id="pstate" name="pstate"

                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="ppincode">Pincode</label>
                                            <input value="<?php echo $row['ppincode']; ?>" disabled class="form-control"
                                                   id="ppincode" name="ppincode"

                                                   type="text">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-9">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="resphone">Resident Phone Number</label>
                                                    <input value="<?php echo $row['resphone']; ?>" disabled
                                                           class="form-control" id="resphone" name="resphone"

                                                           type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="stuphone">Student Phone Number</label>
                                                    <input value="<?php echo $row['stuphone']; ?>" disabled
                                                           class="form-control" id="stuphone" name="stuphone"

                                                           type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="fatherphone">Father Phone Number</label>
                                                    <input value="<?php echo $row['fatherphone']; ?>" disabled
                                                           class="form-control" id="fatherphone" name="fatherphone"

                                                           type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="smail">Student Email ID</label>
                                                    <input value="<?php echo $row['smail']; ?>" disabled
                                                           class="form-control" id="smail" name="smail"

                                                           type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-3">

                                        <div class="form-group">
                                            <label for="aadhar">Aadhar Number</label>
                                            <input value="<?php echo $row['aadhar']; ?>" disabled class="form-control"
                                                   id="aadhar" name="aadhar"
                                                   type="text">
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="courses">Courses</label>
                                            <input value="<?php echo $row['courses']; ?>" disabled class="form-control"
                                                   id="courses" name="courses"
                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="level">Level</label>
                                            <input value="<?php echo $row['level']; ?>" disabled class="form-control"
                                                   id="level" name="level"
                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="admissionyear">Admission Year</label>
                                            <input value="<?php echo $row['admissionyear']; ?>" disabled
                                                   class="form-control"
                                                   id="admissionyear" name="admissionyear"

                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="admittedto">Admitted to</label>
                                            <input value="<?php echo $row['admittedto']; ?>" disabled
                                                   class="form-control"
                                                   id="admittedto" name="admittedto"
                                                   type="text">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="sscper">SSC Percentage(%)</label>
                                            <input value="<?php echo $row['sscper']; ?>" disabled class="form-control"
                                                   id="sscper" name="sscper"

                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="hscper">HSC Percentage(%)</label>
                                            <input value="<?php echo $row['hscper']; ?>" disabled class="form-control"
                                                   id="hscper" name="hscper"

                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="diplomaper">Diploma Percentage(%)</label>
                                            <input value="<?php echo $row['diplomaper']; ?>" disabled
                                                   class="form-control"
                                                   id="diplomaper" name="diplomaper"

                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="beper">BE Percentage(%)</label>
                                            <input value="<?php echo $row['beper']; ?>" disabled class="form-control"
                                                   id="beper" name="beper"

                                                   type="text">
                                        </div>
                                    </div>

                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-4">


                                        <p class="text-bold">Current Status</p>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="custom-control custom-radio">
                                                        <input disabled
                                                               class="custom-control-input" type="radio"
                                                               id="Admitted" value="Admitted"
                                                               name="admitted">
                                                        <label for="admitted"
                                                               class="custom-control-label">Admitted</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="custom-control custom-radio">
                                                        <input disabled
                                                               class="custom-control-input" type="radio"
                                                               id="Admission Cancel"
                                                               name="admitted" value="Admission Cancel">
                                                        <label for="cancel" class="custom-control-label">Admission
                                                            Cancel</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-4">
                                        <p class="text-bold">Result</p>

                                        <div class="row">
                                            <div class="col-sm-4">

                                                <div class="form-group">
                                                    <div class="custom-control custom-radio">
                                                        <input disabled
                                                               class="custom-control-input" type="radio" id="Pass"
                                                               name="result" value="Pass">
                                                        <label for="Pass" class="custom-control-label">Pass</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">

                                                <div class="form-group">
                                                    <div class="custom-control custom-radio">
                                                        <input disabled
                                                               class="custom-control-input" type="radio" id="ATKT"
                                                               name="result" value="ATKT">
                                                        <label for="ATKT" class="custom-control-label">ATKT</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <div class="custom-control custom-radio">
                                                        <input disabled
                                                               class="custom-control-input" type="radio"
                                                               id="Fail/Drop" value="Fail/Drop"
                                                               name="result">
                                                        <label for="Fail/Drop"
                                                               class="custom-control-label">Fail/Drop</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="currentstatus">Current Status</label>
                                            <input value="<?php echo $row['currentstatus']; ?>" disabled
                                                   class="form-control"
                                                   id="currentstatus" name="currentstatus"
                                                   type="text">
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="text-bold">First Year</p>
                                        <div class="row">
                                            <div class="col-sm-6">

                                                <div class="form-group">
                                                    <label class="text-muted" for="SEM-I">SEM-I
                                                        Result(%)</label>
                                                    <input value="<?php echo $row['SEM-I']; ?>" disabled
                                                           class="form-control" id="SEM-I" name="SEM-I"

                                                           type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">


                                                <div class="form-group">
                                                    <label class="text-muted" for="SEM-II">SEM-II Result(%)</label>
                                                    <input value="<?php echo $row['SEM-II']; ?>" disabled
                                                           class="form-control" id="SEM-II" name="SEM-II"

                                                           type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <p class="text-bold">Second Year</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="text-muted" for="SEM-III">SEM-III
                                                        Result(%)</label>
                                                    <input value="<?php echo $row['SEM-III']; ?>" disabled
                                                           class="form-control" id="SEM-III" name="SEM-III"

                                                           type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="text-muted" for="SEM-IV">SEM-IV Result(%)</label>
                                                    <input value="<?php echo $row['SEM-IV']; ?>" disabled
                                                           class="form-control" id="SEM-IV" name="SEM-IV"

                                                           type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="text-bold">Third Year</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="text-muted" for="SEM-V">SEM-V Result(%)</label>
                                                    <input value="<?php echo $row['SEM-V']; ?>" disabled
                                                           class="form-control" id="SEM-V" name="SEM-V"

                                                           type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">


                                                <div class="form-group">
                                                    <label class="text-muted" for="SEM-VI">SEM-VI Result(%)</label>
                                                    <input value="<?php echo $row['SEM-VI']; ?>" disabled
                                                           class="form-control" id="SEM-VI" name="SEM-VI"

                                                           type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-bold">Final Year</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="text-muted" for="SEM-VII">SEM-VII
                                                        Result(%)</label>
                                                    <input value="<?php echo $row['SEM-VII']; ?>" disabled
                                                           class="form-control" id="SEM-VII" name="SEM-VII"

                                                           type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="text-muted" for="SEM-VIII">SEM-VIII
                                                        Result(%)</label>
                                                    <input value="<?php echo $row['SEM-VIII']; ?>" disabled
                                                           class="form-control" id="SEM-VIII" name="SEM-VIII"

                                                           type="text">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="text-bold">ME First Year</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="text-muted" for="ME-SEM-I">ME-SEM-I
                                                        Result(%)</label>
                                                    <input value="<?php echo $row['ME-SEM-I']; ?>" disabled
                                                           class="form-control" id="ME-SEM-I" name="ME-SEM-I"

                                                           type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">

                                                <div class="form-group">
                                                    <label class="text-muted" for="ME-SEM-II">ME-SEM-II
                                                        Result(%)</label>
                                                    <input value="<?php echo $row['ME-SEM-II']; ?>" disabled
                                                           class="form-control" id="ME-SEM-II" name="ME-SEM-II"

                                                           type="text">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-bold">ME Second Year</p>
                                        <div class="row">
                                            <div class="col-sm-6">

                                                <div class="form-group">
                                                    <label class="text-muted" for="ME-SEM-III">ME-SEM-III
                                                        Result(%)</label>
                                                    <input value="<?php echo $row['ME-SEM-III']; ?>" disabled
                                                           class="form-control" id="ME-SEM-III" name="ME-SEM-III"

                                                           type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="text-muted" for="ME-SEM-IV">ME-SEM-IV
                                                        Result(%)</label>
                                                    <input value="<?php echo $row['ME-SEM-IV']; ?>" disabled
                                                           class="form-control" id="ME-SEM-IV" name="ME-SEM-IV"

                                                           type="text">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <div class="form-group">
                                    <label for="remark">Remark/Comment</label>
                                    <textarea class="form-control" id="remark"
                                              name="remark"
                                              rows="4"
                                              DISABLED
                                    ><?php echo $row['remark']; ?></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <a class="btn btn-primary" target="_blank"
                                           href="./upload/<?php echo $row['userid'] ?>-photo.jpg">View Photo</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a class="btn btn-primary" target="_blank"
                                           href="./upload/<?php echo $row['userid'] ?>-sign.jpg">View Sign</a>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <p class="text-info">Submitted on <?php
                                    echo $row['last_update']
                                    ?></p>
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


<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>
    document.getElementById("<?php echo $row['admitted']?>").checked = true;
    document.getElementById("<?php echo $row['result']?>").checked = true;


</script>


</body>
</html>
