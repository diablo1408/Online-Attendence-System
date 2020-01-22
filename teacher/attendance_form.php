<?php include('../include/session.php');
$half = 0;
$stream = mysqli_real_escape_string($db, $_POST['stream']);
$section = mysqli_real_escape_string($db, $_POST['section']);
if (isset($_POST['half'])) {
    $half = $_POST['half'];
}
$type = mysqli_real_escape_string($db, $_POST['type']);
$subject = mysqli_real_escape_string($db, $_POST['subject']);
$date_of_lecture = mysqli_real_escape_string($db, $_POST['dateoflecture']);
if (empty($stream)) {
    $_SESSION['ErrorMessage'] = "Stream cannot be empty";
    header("LOCATION: ../teacher/attendance_details.php");
    exit;
} elseif (empty($section)) {
    $_SESSION['ErrorMessage'] = "Section cannot be empty";
    header("LOCATION: ../teacher/attendance_details.php");
    exit;
} elseif (empty($subject)) {
    $_SESSION['ErrorMessage'] = "Subject cannot be empty";
    header("LOCATION: ../teacher/attendance_details.php");
    exit;
} else {
    $q_count = "SELECT * FROM students WHERE stream='$stream' AND section='$section'";
    $e_count = mysqli_query($db, $q_count);
    $num = mysqli_num_rows($e_count);
    if (($type == 2) && ($half == 1)) {
        $num = floor($num / 2);
        $q = "SELECT  * FROM students WHERE stream='$stream' AND section='$section' ORDER BY enrollment asc LIMIT 0,$num";
    } elseif (($type == 2) && ($half == 2)) {
        $num = ceil($num / 2);
        $q = "SELECT * FROM students WHERE stream='$stream' AND section='$section' ORDER BY enrollment desc LIMIT 0,$num";
    } else {
        $q = "SELECT * FROM students WHERE stream='$stream' AND section='$section' ORDER BY enrollment asc";
    }
    $e = mysqli_query($db, $q);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="http://themepixels.me/azia/img/azia-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="http://themepixels.me/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <title>MYattend.-Attendence Sheet</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">
    <link rel="stylesheet" href="../css/customcss.css">


</head>
<body class="az-body az-light">

<?php include('../common_components/side_nav_bar.php'); ?>

<div class="az-content az-content-dashboard-six">
    <?php include('../common_components/header.php'); ?>

    <form method="post" action="add_attendance.php" id="form1" onsubmit="return confirmation();"></form>

    <input type="text" form="form1" value="<?php echo $stream; ?>" name="stream" hidden>
    <input type="text" form="form1" value="<?php echo $section; ?>" name="section" hidden>
    <input type="text" form="form1" value="<?php echo $type; ?>" name="type" hidden>
    <input type="text" form="form1" value="<?php echo $subject; ?>" name="subject" hidden>
    <input type="date" form="form1" value="<?php echo $date_of_lecture; ?>" name="date_of_lecture_fin" hidden>


    <div class="az-content-body az-content-body-dashboard-six">
        <!--  <h2 class="az-content-title tx-24 mg-b-5">Hi, welcome back!</h2>
         <p class="mg-b-20 mg-lg-b-30">Your finance performance and monitoring dashboard template.</p> -->
        <p class="center-a"><strong>ATTENDANCE SHEET</strong></p>
        <div class=" card card-body pd-10 mg-20 bg-gray-200 bd ">

            <span class="pdl-10  form-text-size"><strong>Faculty: </strong> <?php echo ucfirst($fname); ?> </span>
            <span class="pdl-10 form-text-size"><strong>Subject: </strong><?php echo $subject; ?> </span>
            <span class="pdl-10 form-text-size"><strong>Section: </strong><?php echo $section; ?> </span>
            <span class="pdl-10 form-text-size"><strong>Date of Lecture: </strong> <?php
                $date_formatted = date_create($date_of_lecture);
                echo date_format($date_formatted, "d-m-Y"); ?></span>
            <span class="pdl-10 form-text-size"><strong>Date of Marking: </strong> <?php echo date('d-m-Y'); ?></span>
            <span class="pdl-10 form-text-size"><strong>Type: </strong> <?php if ($type == 1) {
                    echo "Theory";
                } else {
                    echo "Practical";
                } ?></span>
        </div>
        <div class="col">
            <input type="checkbox" onclick="toggle(this)"/>Mark All Present
        </div>
        &nbsp;
        <div class="col">
            <div class="table-responsive  table-m card card-body bg-white-1">
                <table class="table table-hover table-bordered mg-b-0  ">
                    <thead>
                    <tr>
                        <th>S No.</th>
                        <th> Enrollment No.</th>
                        <th>Name</th>

                        <th>Present</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i = 1;
                    while ($DataRows = mysqli_fetch_array($e)) {
                        $id = $DataRows['id'];
                        $name = $DataRows['name'];
                        $enr = $DataRows['enrollment'];

                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td scope="row"><?php echo $enr; ?></td>
                            <td><?php echo $name; ?></td>

                            <td>
                                <label class="ckbox">
                                    <input class="check" form="form1" name="student[<?php echo $enr; ?>]" value='1'
                                           type="checkbox"><span></span>
                                </label>


                            </td>
                        </tr>
                        <?php $i = $i + 1;
                    } ?>

                    </tbody>
                </table>

            </div><!-- table-responsive -->
            <div class="col">
                <div class="row">
                    <div class="col-1">
                        <button class="btn btn-indigo btn-rounded button-a" name="submit" form="form1">Submit</button>
                    </div>
                    <div class="col-1">
                        <a href="dashboard.php"><button class="btn btn-secondary btn-rounded button-a">Cancel</button></a>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function toggle(source) {
                checkboxes = document.getElementsByClassName('check');
                for (var i = 0, n = checkboxes.length; i < n; i++) {
                    checkboxes[i].checked = source.checked;
                }
            }

            function confirmation() {
                var inputElems = document.getElementsByClassName('check'),
                    count = 0;
                for (var i = 0; i < inputElems.length; i++) {
                    if (inputElems[i].type === "checkbox" && inputElems[i].checked === true) {
                        count++;
                    }
                }
                var choice = confirm("Want to Submit?  Total Students Present: " + count);
                if (choice) {
                    return true;
                } else {
                    window.href = "dashboard.php";
                    return false;
                }
            }
        </script>

        <!-- your content goes here -->
    </div><!-- az-content-body -->


    <?php include '../common_components/footer.php'; ?>
</div><!-- az-content -->


<script src="../lib/jquery/jquery.min.js"></script>
<script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../lib/ionicons/ionicons.js"></script>

<script src="../js/azia.js"></script>
<script>
    $(function () {
        'use strict'

        if ($('.az-iconbar .nav-link.active').length) {
            var targ = $('.az-iconbar .nav-link.active').attr('href');
            $(targ).addClass('show');

            if (window.matchMedia('(min-width: 1200px)').matches) {
                $('.az-iconbar-aside').addClass('show');
            }

            if (window.matchMedia('(min-width: 992px)').matches &&
                window.matchMedia('(max-width: 1199px)').matches) {
                $('.az-iconbar .nav-link.active').removeClass('active');
            }
        }

        $('.az-iconbar .nav-link').on('click', function (e) {
            e.preventDefault();

            $(this).addClass('active');
            $(this).siblings().removeClass('active');

            $('.az-iconbar-aside').addClass('show');

            var targ = $(this).attr('href');
            $(targ).addClass('show');
            $(targ).siblings().removeClass('show');
        });

        $('.az-iconbar-toggle-menu').on('click', function (e) {
            e.preventDefault();

            if (window.matchMedia('(min-width: 992px)').matches) {
                $('.az-iconbar .nav-link.active').removeClass('active');
                $('.az-iconbar-aside').removeClass('show');
            } else {
                $('body').removeClass('az-iconbar-show');
            }
        })

        $('#azIconbarShow').on('click', function (e) {
            e.preventDefault();
            $('body').toggleClass('az-iconbar-show');
        });


    });


</script>
</body>
</html>
