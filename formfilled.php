<?php
include("include/connection.php");
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
                        <h1>Form Submitted</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">


                <!-- /.container-fluid -->

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
            startDate: '01/01/2005',
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
    $lname = $_POST['lname'];
    $mname = $_POST['mname'];
    $dob = $_POST['dob'];
    $age1 = $_POST['age1'];
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];
    $cast = $_POST['cast'];
    $address = $_POST['address'];
    $district = $_POST['district'];
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

    $query = "
    INSERT INTO `student_form` (
     `srno`, `capid`, `title`, `sname`, `lname`, `mname`, `dob`, `age1`, `gender`, `religion`, `cast`, `address`, `district`, 
     `pincode`, `paddress`, `pdistrict`, `pstate`, `ppincode`, `resphone`, `stuphone`, `fatherphone`, `smail`, `aadhar`, `courses`, 
     `level`, `admissionyear`, `admittedto`, `sscper`, `hscper`, `diplomaper`, `beper`, `admitted`, `result`, `currentstatus`, 
     `SEM-I`, `SEM-II`, `SEM-III`, `SEM-IV`, `SEM-V`, `SEM-VI`, `SEM-VII`, `SEM-VIII`, `ME-SEM-I`, `ME-SEM-II`, `ME-SEM-III`, `ME-SEM-IV`, `remark` ) 
     VALUES ( '$srno', '$capid', '$title', '$sname', '$lname', '$mname', '$dob', '$age1', '$gender', '$religion', '$cast', '$address', '$district', 
     '$pincode', '$paddress', '$pdistrict', '$pstate', '$ppincode', '$resphone', '$stuphone', '$fatherphone', '$smail', '$aadhar', '$courses', 
     '$level', '$admissionyear', '$admittedto', '$sscper', '$hscper', '$diplomaper', '$beper', '$admitted', '$result', '$currentstatus', 
     '$SEM_I', '$SEM_II', '$SEM_III', '$SEM_IV', '$SEM_V', '$SEM_VI', '$SEM_VII', '$SEM_VIII', 
     '$ME_SEM_I', '$ME_SEM_II', '$ME_SEM_III', '$ME_SEM_IV',
      '$remark' );
    
    ";

    mysqli_query($con, $query);

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
