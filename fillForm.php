<?php
include("include/connection.php");
include("include/checkuser.php");
if ($_SESSION["issubmitted"] == 1) {
    echo '
      <script>
    alert("Form Already Submitted");
    window.location.href="./formfilled.php";
    </script>';

}
?>
<!DOCTYPE html>
<html>
<head>
    <?php
    include "include/html_head.php";
    ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
    <?php
    include "include/nav_header.php";
    include "include/user_sidebar.php";

    ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>ERP Form</h1>
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
                                <h3 class="card-title">Fill Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm" role="form" method="POST">
                                <div class="card-body">


                                    <div class="row">

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="srno">SR NO.</label>
                                                <input class="form-control" id="srno" name="srno"
                                                       placeholder="Enter Serial No" type="number">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label for="capid">CAP ID</label>
                                                <input class="form-control" id="capid" name="capid"
                                                       placeholder="Enter CAP Application ID" type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="row">

                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <select class="form-control" id="title" name="title">
                                                    <option value="">Select</option>
                                                    <option value="Mr">Mr</option>
                                                    <option value="Miss">Miss</option>
                                                    <option value="Mrs">Mrs</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-sm-11">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="sname">Surname</label>
                                                        <input type="text" name="sname" class="form-control" id="sname"
                                                               placeholder="Enter Surname ">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="fname">First Name</label>
                                                        <input type="text" name="fname" class="form-control" id="fname"
                                                               placeholder="Enter First Name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="lname">Last Name</label>
                                                        <input type="text" name="lname" class="form-control" id="lname"
                                                               placeholder="Enter Last Name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="mname">Mother Name</label>
                                                        <input type="text" name="mname" class="form-control" id="mname"
                                                               placeholder="Enter Mother Name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label for="dob">DOB</label>
                                                <input type="text" name="dob" class="form-control" id="dob"
                                                       placeholder="Select DOB">
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label for="age">Age</label>
                                                <input type="text" name="age" class="form-control" id="age"

                                                       disabled>
                                                <input type="text" name="age1" class="form-control" id="age1"

                                                       hidden>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="gender">Gender</label>
                                                <select class="form-control" id="gender" name="gender">
                                                    <option value="">Select</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="religion">Religion</label>
                                                <select class="form-control" name="religion" id="religion"
                                                >
                                                    <option value="">Select</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Parsi">Parsi</option>
                                                    <option value="Jain">Jain</option>
                                                    <option value="Sikh">Sikh</option>
                                                    <option value="Christian">Christian</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="cast">Caste Category</label>
                                                <select class="form-control" name="cast" id="cast"
                                                >
                                                    <option value="">Select</option>
                                                    <option value="Open">Open</option>
                                                    <option value="SC">SC</option>
                                                    <option value="ST">ST</option>
                                                    <option value="VJ">VJ</option>
                                                    <option value="NT">NT</option>
                                                    <option value="OBC">OBC</option>
                                                    <option value="SBC">SBC</option>
                                                    <option value="Others">Others</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="address">Local Address</label>
                                                <textarea class="form-control" id="address"
                                                          name="address" placeholder="Enter Address"
                                                          rows="3"
                                                ></textarea>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="district">District</label>
                                                <input class="form-control" id="district" name="district"
                                                       placeholder="Enter district"
                                                       type="text">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="state">State</label>
                                                <input class="form-control" id="state" name="state"
                                                       placeholder="Enter State"
                                                       type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="pincode">Pincode</label>
                                                <input class="form-control" id="pincode" name="pincode"
                                                       placeholder="Enter Pincode"
                                                       type="number">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="sameasaboove"
                                                           name="sameasaboove"
                                                           type="checkbox" onclick="filllocaladdress()">
                                                    <label class="custom-control-label" for="sameasaboove">Same as
                                                        Above</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="paddress">Permanent Address</label>
                                                <textarea class="form-control" id="paddress"
                                                          name="paddress" placeholder="Enter Address"
                                                          rows="3"
                                                ></textarea>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="pdistrict">District</label>
                                                <input class="form-control" id="pdistrict" name="pdistrict"
                                                       placeholder="Enter district"
                                                       type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="pstate">State</label>
                                                <input class="form-control" id="pstate" name="pstate"
                                                       placeholder="Enter State"
                                                       type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="ppincode">Pincode</label>
                                                <input class="form-control" id="ppincode" name="ppincode"
                                                       placeholder="Enter Pincode"
                                                       type="number">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-9">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="resphone">Resident Phone Number</label>
                                                        <input class="form-control" id="resphone" name="resphone"
                                                               placeholder="Enter Phone Number"
                                                               type="number">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="stuphone">Student Phone Number</label>
                                                        <input class="form-control" id="stuphone" name="stuphone"
                                                               placeholder="Enter Phone Number"
                                                               type="number">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="fatherphone">Father Phone Number</label>
                                                        <input class="form-control" id="fatherphone" name="fatherphone"
                                                               placeholder="Enter Phone Number"
                                                               type="number">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="smail">Student Email ID</label>
                                                        <input class="form-control" id="smail" name="smail"
                                                               placeholder="Enter Phone Number"
                                                               type="email">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-3">

                                            <div class="form-group">
                                                <label for="aadhar">Aadhar Number</label>
                                                <input class="form-control" id="aadhar" name="aadhar"
                                                       placeholder="Enter Aadhar Number"
                                                       type="number">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="courses">Courses</label>
                                                <select class="form-control" name="courses" id="courses"
                                                >
                                                    <option value="">Select</option>
                                                    <option value="AutoMobilie">AutoMobilie</option>
                                                    <option value="Civil">Civil</option>
                                                    <option value="Computer">Computer</option>
                                                    <option value="Electric">Electric</option>
                                                    <option value="EXTC">EXTC</option>
                                                    <option value="Mechanical">Mechanical</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="level">Level</label>
                                                <select class="form-control" name="level" id="level"
                                                >
                                                    <option value="">Select</option>
                                                    <option value="Polytechnic">Polytechnic</option>
                                                    <option value="Under Graduate">Under Graduate</option>
                                                    <option value="Post Graduate">Post Graduate</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="admissionyear">Admission Year</label>
                                                <input class="form-control" id="admissionyear" name="admissionyear"
                                                       placeholder="Enter Admission year"
                                                       type="number">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="admittedto">Admitted to</label>
                                                <select class="form-control" name="admittedto" id="admittedto"
                                                >
                                                    <option value="">Select</option>
                                                    <option value="FY">FY</option>
                                                    <option value="DIPLOMA">DIPLOMA</option>
                                                    <option value="DSY DIPLOMA">DSY DIPLOMA</option>
                                                    <option value="FE">FE</option>
                                                    <option value="DSE">DSE</option>
                                                    <option value="ME">ME</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="sscper">SSC Percentage(%)</label>
                                                <input class="form-control" id="sscper" name="sscper"
                                                       placeholder="Enter SSC Percentage"
                                                       type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="hscper">HSC Percentage(%)</label>
                                                <input class="form-control" id="hscper" name="hscper"
                                                       placeholder="Enter HSC Percentage"
                                                       type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="diplomaper">Diploma Percentage(%)</label>
                                                <input class="form-control" id="diplomaper" name="diplomaper"
                                                       placeholder="Enter diploma Percentage"
                                                       type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="beper">BE Percentage(%)</label>
                                                <input class="form-control" id="beper" name="beper"
                                                       placeholder="Enter BE Percentage"
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
                                                            <input class="custom-control-input" type="radio"
                                                                   id="admitted" value="Admitted"
                                                                   name="admitted">
                                                            <label for="admitted"
                                                                   class="custom-control-label">Admitted</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="cancel"
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
                                                            <input class="custom-control-input" type="radio" id="pass"
                                                                   name="result" value="Pass">
                                                            <label for="pass" class="custom-control-label">Pass</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">

                                                    <div class="form-group">
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="atkt"
                                                                   name="result" value="ATKT">
                                                            <label for="atkt" class="custom-control-label">ATKT</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio"
                                                                   id="Fail_Drop" value="Fail/Drop"
                                                                   name="result">
                                                            <label for="Fail_Drop"
                                                                   class="custom-control-label">Fail/Drop</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="currentstatus">Current Status</label>
                                                <select class="form-control" name="currentstatus" id="currentstatus"
                                                >
                                                    <option value="">Select</option>
                                                    <option value="FE">FE</option>
                                                    <option value="SE">SE</option>
                                                    <option value="TE">TE</option>
                                                    <option value="BE">BE</option>
                                                    <option value="ME-I">ME-I</option>
                                                    <option value="ME-II">ME-II</option>
                                                </select>
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
                                                        <input class="form-control" id="SEM-I" name="SEM-I"
                                                               placeholder="Enter SEM-I Percentage"
                                                               type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">


                                                    <div class="form-group">
                                                        <label class="text-muted" for="SEM-II">SEM-II Result(%)</label>
                                                        <input class="form-control" id="SEM-II" name="SEM-II"
                                                               placeholder="Enter SEM-II Percentage"
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
                                                        <input class="form-control" id="SEM-III" name="SEM-III"
                                                               placeholder="Enter SEM-III Percentage"
                                                               type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="text-muted" for="SEM-IV">SEM-IV Result(%)</label>
                                                        <input class="form-control" id="SEM-IV" name="SEM-IV"
                                                               placeholder="Enter SEM-IV Percentage"
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
                                                        <input class="form-control" id="SEM-V" name="SEM-V"
                                                               placeholder="Enter SEM-V Percentage"
                                                               type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">


                                                    <div class="form-group">
                                                        <label class="text-muted" for="SEM-VI">SEM-VI Result(%)</label>
                                                        <input class="form-control" id="SEM-VI" name="SEM-VI"
                                                               placeholder="Enter SEM-VI Percentage"
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
                                                        <input class="form-control" id="SEM-VII" name="SEM-VII"
                                                               placeholder="Enter SEM-VII Percentage"
                                                               type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="text-muted" for="SEM-VIII">SEM-VIII
                                                            Result(%)</label>
                                                        <input class="form-control" id="SEM-VIII" name="SEM-VIII"
                                                               placeholder="Enter SEM-VIII Percentage"
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
                                                        <input class="form-control" id="ME-SEM-I" name="ME-SEM-I"
                                                               placeholder="Enter ME-SEM-I Percentage"
                                                               type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <label class="text-muted" for="ME-SEM-II">ME-SEM-II
                                                            Result(%)</label>
                                                        <input class="form-control" id="ME-SEM-II" name="ME-SEM-II"
                                                               placeholder="Enter ME-SEM-II Percentage"
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
                                                        <input class="form-control" id="ME-SEM-III" name="ME-SEM-III"
                                                               placeholder="Enter ME-SEM-III Percentage"
                                                               type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="text-muted" for="ME-SEM-IV">ME-SEM-IV
                                                            Result(%)</label>
                                                        <input class="form-control" id="ME-SEM-IV" name="ME-SEM-IV"
                                                               placeholder="Enter ME-SEM-IV Percentage"
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
                                                  name="remark" placeholder="Enter Remark/Comment if any"
                                                  rows="4"
                                        ></textarea>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <input class="btn btn-primary" type="submit" value="Submit"
                                           name="submit_student_form">
                                </div>
                            </form>
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

    function filllocaladdress() {

        document.getElementById('paddress').value = document.getElementById('address').value;
        document.getElementById('pdistrict').value = document.getElementById('district').value;
        document.getElementById('pstate').value = document.getElementById('state').value;
        document.getElementById('ppincode').value = document.getElementById('pincode').value;
    }

    var today = moment();
    $(function () {
        $('input[name="dob"]').daterangepicker({
            singleDatePicker: true,
            autoUpdateInput: false,
            startDate: '01/01/1999',
            maxDate: today,
            maxYear: 5,
            showDropdowns: true,
        });
        $('#dob').on('apply.daterangepicker', function (ev, picker) {
            document.getElementById("dob").value = picker.startDate.format('DD/MM/YYYY');
            var dob = picker.startDate.format('YYYY');
            var today = new Date().getFullYear();
            var age = today - dob;
            document.getElementById("age").value = age;
            document.getElementById("age1").value = age;


        });
    });

    $(document).ready(function () {

        $('#quickForm').validate({
            rules: {

                srno: {
                    required: true
                },
                title: {
                    required: true
                },
                sname: {
                    required: true
                },
                fname: {
                    required: true
                },
                lname: {
                    required: true
                },
                mname: {
                    required: true
                },
                dob: {
                    required: true
                },
                gender: {
                    required: true
                },
                religion: {
                    required: true
                },
                cast: {
                    required: true
                },
                address: {
                    required: true
                },
                district: {
                    required: true
                },
                state: {
                    required: true
                },
                paddress: {
                    required: true
                },
                pincode: {
                    required: false,
                    minlength: 6,
                    maxlength: 6

                },
                pdistrict: {
                    required: true
                },
                pstate: {
                    required: true
                },
                ppincode: {
                    required: false,
                    minlength: 6,
                    maxlength: 6

                },
                resphone: {
                    required: true,
                    minlength: 10,
                    maxlength: 10

                },
                stuphone: {
                    required: true,
                    minlength: 10,
                    maxlength: 10

                },
                fatherphone: {
                    required: true,
                    minlength: 10,
                    maxlength: 10

                },
                smail: {
                    required: true,
                    email: true

                },
                aadhar: {
                    required: false,
                    minlength: 12,
                    maxlength: 12,
                },
                courses: {
                    required: true,
                },
                level: {
                    required: true,
                },

                admissionyear: {
                    required: true,
                    minlength: 4,
                    min: 2011,
                    maxlength: 4,
                },

                admittedto: {
                    required: true,
                },
                sscper: {
                    required: true,
                    number: true,
                    min: 0,
                    max: 100,
                },
                hscper: {
                    required: false,
                    number: true,
                    min: 0,
                    max: 100,
                },
                diplomaper: {
                    required: false,
                    number: true,
                    min: 0,
                    max: 100,
                },
                beper: {
                    required: false,
                    number: true,
                    min: 0,
                    max: 100,
                },
                'SEM-I': {
                    required: false,
                    number: true,
                    min: 0,
                    max: 100,
                },

                'SEM-II': {
                    required: false,
                    number: true,
                    min: 0,
                    max: 100,
                },

                'SEM-III': {
                    required: false,
                    number: true,
                    min: 0,
                    max: 100,
                },

                'SEM-IV': {
                    required: false,
                    number: true,
                    min: 0,
                    max: 100,
                },

                'SEM-V': {
                    required: false,
                    number: true,
                    min: 0,
                    max: 100,
                },

                'SEM-VI': {
                    required: false,
                    number: true,
                    min: 0,
                    max: 100,
                },

                'SEM-VII': {
                    required: false,
                    number: true,
                    min: 0,
                    max: 100,
                },

                'SEM-VIII': {
                    required: false,
                    number: true,
                    min: 0,
                    max: 100,
                },

                'ME-SEM-I': {
                    required: false,
                    number: true,
                    min: 0,
                    max: 100,
                },
                'ME-SEM-II': {
                    required: false,
                    number: true,
                    min: 0,
                    max: 100,
                },
                'ME-SEM-III': {
                    required: false,
                    number: true,
                    min: 0,
                    max: 100,
                },
                'ME-SEM-IV': {
                    required: false,
                    number: true,
                    min: 0,
                    max: 100,
                },
            },
            messages: {

                srno: "Enter serial number",
                title: "Select title",
                sname: "Enter your surname",
                fname: "Enter your first name",
                lname: "Enter your last name",
                mname: "Enter your mother name",
                dob: "Select DOB",
                gender: "Select Gender",
                religion: "Select Religion",
                cast: "Select Cast",
                address: "Enter address",
                district: "Enter district",
                state: "Enter State",
                pincode: {
                    minlength: "Enter valid 6 digit pincode",
                    maxlength: "Enter valid 6 digit pincode",
                },
                paddress: "Enter address",
                pdistrict: "Enter district",
                pstate: "Enter State",
                ppincode: {
                    minlength: "Enter valid 6 digit pincode",
                    maxlength: "Enter valid 6 digit pincode",
                },
                resphone: {
                    required: "Enter Phone Number",
                    minlength: "Enter valid 10 digit phone number"
                },
                stuphone: {
                    required: "Enter Phone Number",
                    minlength: "Enter valid 10 digit phone number"
                }, fatherphone: {
                    required: "Enter Phone Number",
                    minlength: "Enter valid 10 digit phone number"
                },
                smail: {
                    required: "Enter Mail ID",
                    email: "Enter valid mail id"
                },
                aadhar: {
                    minlength: "Enter valid aadhar number",
                    maxlength: "Enter valid aadhar number"
                },
                courses: {
                    required: "Select course",
                },
                level: {
                    required: "Select level",
                },
                admissionyear: {
                    required: "Enter admission year",
                    minlength: "Enter valid year",
                    maxlength: "Enter valid year",
                    min: "Enter year after 2011",
                },
                admittedto: {
                    required: "Select Admitted to",
                },
                sscper: {
                    required: "Enter percentage",
                    number: "Enter numbers only",
                    min: "Enter valid percentage",
                    max: "Enter valid percentage",
                },
                hscper: {
                    number: "Enter numbers only",
                    min: "Enter valid percentage",
                    max: "Enter valid percentage",
                },
                diplomaper: {
                    number: "Enter numbers only",
                    min: "Enter valid percentage",
                    max: "Enter valid percentage",
                },
                beper: {
                    number: "Enter numbers only",
                    min: "Enter valid percentage",
                    max: "Enter valid percentage",
                },
                'SEM-I': {
                    number: "Enter numbers only",
                    min: "Enter valid percentage",
                    max: "Enter valid percentage",
                }, 'SEM-II': {
                    number: "Enter numbers only",
                    min: "Enter valid percentage",
                    max: "Enter valid percentage",
                },
                'SEM-III': {
                    number: "Enter numbers only",
                    min: "Enter valid percentage",
                    max: "Enter valid percentage",
                },
                'SEM-IV': {
                    number: "Enter numbers only",
                    min: "Enter valid percentage",
                    max: "Enter valid percentage",
                },
                'SEM-V': {
                    number: "Enter numbers only",
                    min: "Enter valid percentage",
                    max: "Enter valid percentage",
                },
                'SEM-VI': {
                    number: "Enter numbers only",
                    min: "Enter valid percentage",
                    max: "Enter valid percentage",
                },
                'SEM-VII': {
                    number: "Enter numbers only",
                    min: "Enter valid percentage",
                    max: "Enter valid percentage",
                },
                'SEM-VIII': {
                    number: "Enter numbers only",
                    min: "Enter valid percentage",
                    max: "Enter valid percentage",
                },
                'ME-SEM-I': {
                    number: "Enter numbers only",
                    min: "Enter valid percentage",
                    max: "Enter valid percentage",
                },
                'ME-SEM-II': {
                    number: "Enter numbers only",
                    min: "Enter valid percentage",
                    max: "Enter valid percentage",
                },
                'ME-SEM-III': {
                    number: "Enter numbers only",
                    min: "Enter valid percentage",
                    max: "Enter valid percentage",
                },
                'ME-SEM-IV': {
                    number: "Enter numbers only",
                    min: "Enter valid percentage",
                    max: "Enter valid percentage",
                },
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });


</script>


<?php
if (isset($_POST['submit_student_form'])) {

    $srno = $_POST['srno'];
    $capid = $_POST['capid'];
    $title = $_POST['title'];
    $sname = $_POST['sname'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['mname'];
    $dob = $_POST['dob'];
    $age1 = $_POST['age1'];
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];
    $cast = $_POST['cast'];
    $address = $_POST['address'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $paddress = $_POST['paddress'];
    $pdistrict = $_POST['pdistrict'];
    $pstate = $_POST['pstate'];
    $ppincode = $_POST['ppincode'];
    $resphone = $_POST['resphone'];
    $stuphone = $_POST['stuphone'];
    $fatherphone = $_POST['fatherphone'];
    $smail = $_POST['smail'];
    $aadhar = $_POST['aadhar'];
    $courses = $_POST['courses'];
    $level = $_POST['level'];
    $admissionyear = $_POST['admissionyear'];
    $admittedto = $_POST['admittedto'];
    $sscper = $_POST['sscper'];
    $hscper = $_POST['hscper'];
    $diplomaper = $_POST['diplomaper'];
    $beper = $_POST['beper'];
    $admitted = $_POST['admitted'];
    $result = $_POST['result'];
    $currentstatus = $_POST['currentstatus'];
    $SEM_I = $_POST['SEM-I'];
    $SEM_II = $_POST['SEM-II'];
    $SEM_III = $_POST['SEM-III'];
    $SEM_IV = $_POST['SEM-IV'];
    $SEM_V = $_POST['SEM-V'];
    $SEM_VI = $_POST['SEM-VI'];
    $SEM_VII = $_POST['SEM-VII'];
    $SEM_VIII = $_POST['SEM-VIII'];
    $ME_SEM_I = $_POST['ME-SEM-I'];
    $ME_SEM_II = $_POST['ME-SEM-II'];
    $ME_SEM_III = $_POST['ME-SEM-III'];
    $ME_SEM_IV = $_POST['ME-SEM-IV'];
    $remark = $_POST['remark'];
    $date = date('d-m-Y', time());
    $userid = $_SESSION["user_id"];

    $query = "
    INSERT INTO `student_form` (
     `srno`, `capid`, `title`, `sname`,`fname`, `lname`, `mname`, `dob`, `age1`, `gender`, `religion`, `cast`, `address`, `district`,`state`, 
     `pincode`, `paddress`, `pdistrict`, `pstate`, `ppincode`, `resphone`, `stuphone`, `fatherphone`, `smail`, `aadhar`, `courses`, 
     `level`, `admissionyear`, `admittedto`, `sscper`, `hscper`, `diplomaper`, `beper`, `admitted`, `result`, `currentstatus`, 
     `SEM-I`, `SEM-II`, `SEM-III`, `SEM-IV`, `SEM-V`, `SEM-VI`, `SEM-VII`, `SEM-VIII`, `ME-SEM-I`, `ME-SEM-II`, `ME-SEM-III`, `ME-SEM-IV`, 
     `remark`,`last_update`,`userid` ) 
     VALUES ( '$srno', '$capid', '$title', '$sname','$fname', '$lname', '$mname', '$dob', '$age1', '$gender', '$religion', '$cast', '$address', '$district','$state',
     '$pincode', '$paddress', '$pdistrict', '$pstate', '$ppincode', '$resphone', '$stuphone', '$fatherphone', '$smail', '$aadhar', '$courses', 
     '$level', '$admissionyear', '$admittedto', '$sscper', '$hscper', '$diplomaper', '$beper', '$admitted', '$result', '$currentstatus', 
     '$SEM_I', '$SEM_II', '$SEM_III', '$SEM_IV', '$SEM_V', '$SEM_VI', '$SEM_VII', '$SEM_VIII', 
     '$ME_SEM_I', '$ME_SEM_II', '$ME_SEM_III', '$ME_SEM_IV',
      '$remark','$date','$userid' );
    
    ";

    mysqli_query($con, $query);


    $query1 = "UPDATE `users` SET `form` = '1' WHERE `users`.`id` = " . $_SESSION["user_id"];

    mysqli_query($con, $query1);
    echo '
    <script>
    
    Swal.fire({
  icon: \'success\',
  title: \'Done\',
  text: \'Form Submitted Successfully!\',
  
    });
    window.location.href="./formfilled.php";
    

</script>
    
    ';

}

?>


</body>
</html>
