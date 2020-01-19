<?php
include('../include/session.php');
if (isset($_POST['submit'])) {
//    $stream = mysqli_real_escape_string($db, $_POST['stream']);
//    $section = mysqli_real_escape_string($db, $_POST['section']);
    $rollno = mysqli_real_escape_string($db, $_POST['rollno']);
//    $subject = mysqli_real_escape_string($db, $_POST['subject']);
//    $initialdate = mysqli_real_escape_string($db, $_POST['initialdate']);
//    $finaldate = mysqli_real_escape_string($db, $_POST['finaldate']);

    if (empty($rollno)){
        $_SESSION['ErrorMessage']="Roll No. cannot be empty";
        header("LOCATION: ../admin/view_report_admin.php");
        exit;
    }

    if (!empty($rollno)) {
        $query1 = "SELECT section,name,stream FROM students WHERE enrollment='$rollno'";
        $execute = mysqli_query($db, $query1);
        $DataRows = mysqli_fetch_array($execute);
        $fetched_section = $DataRows['section'];
        $fetched_stream = $DataRows['stream'];
        $student_name = $DataRows['name'];
        $query2 = "SELECT subjects FROM section WHERE section= '" . "$fetched_section" . "'";
        $execute = mysqli_query($db, $query2);
        $DataRows2 = mysqli_fetch_array($execute);
        $fetched_subjects = explode(",", $DataRows2['subjects']);
        $no_of_classes_attended = $fetched_subjects;
        $total_no_of_classes = $fetched_subjects;
        $percentage_per_subject = $fetched_subjects;
        $subjects_full_name = $fetched_subjects;
        for ($i = 0; $i < sizeof($fetched_subjects); $i++) {
//            echo $fetched_subjects[$i];
            $query3 = "SELECT COUNT(*) FROM " . $fetched_subjects[$i] . "_t WHERE enrollment='$rollno'";
            $execute = mysqli_query($db_new, $query3);
            $DataRows3 = mysqli_fetch_array($execute);
            $no_of_classes_attended[$i] = $DataRows3['COUNT(*)'];
            $query4 = "SELECT COUNT(*) FROM logs WHERE section= '" . "$fetched_section" . "' AND subject= '" . "$fetched_subjects[$i]" . "'";
            $execute = mysqli_query($db, $query4);
            $DataRows4 = mysqli_fetch_array($execute);
            $total_no_of_classes[$i] = $DataRows4['COUNT(*)'];
            $query5 = "SELECT name FROM subject WHERE short_name= '" . $fetched_subjects[$i] . "'";
            $execute = mysqli_query($db, $query5);
            $DataRows5 = mysqli_fetch_array($execute);
            $subjects_full_name[$i] = $DataRows5['name'];
            $percentage_per_subject[$i] = ($no_of_classes_attended[$i] / $total_no_of_classes[$i]) * 100;
        }
    }

    /* $table = "ada_t";
     if (!empty($initialdate) && !empty($finaldate)) {
         $initialdate=date('Y-m-d',strtotime($initialdate));
         $finaldate=date('Y-m-d',strtotime($finaldate));
         if (!empty($rollno)) {
             $query = "SELECT * FROM ".$table." WHERE enrollment='$rollno' AND(dt >= ".$initialdate." AND dt <=".$finaldate.")";
         } elseif (!empty($subject)) {
             $query = "SELECT * FROM ".$table." WHERE section='$section' AND (dt BETWEEN '$initialdate' AND '$finaldate')";
         }

     } else {
         if (!empty($rollno)) {
             $query="SELECT * FROM ".$table." WHERE enrollment='$rollno'";
         } elseif (!empty($subject)) {
             $query = "SELECT * FROM ".$table." WHERE section='$section'";
         }
     }*/

//$query = "SELECT * FROM ada_t WHERE stream='$stream' AND section='$section' AND dt BETWEEN '$initialdate' AND '$finaldate'";
//    $execute=mysqli_query($db_new,$query);
    //$DataRows = mysqli_fetch_array($execute);
//    $count=mysqli_num_rows($execute);
    /*while ($DataRows= mysqli_fetch_array($execute)) {
        $id = $DataRows['id'];
        $enr = $DataRows['enrollment'];
        echo $id.PHP_EOL;
        echo $enr.PHP_EOL;
    }*/
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

    <title>Admin Result</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="../lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">


    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

</head>
<body class="az-body az-light">
<?php include('../common_components/side_nav_bar.php'); ?>
<div class="az-content az-content-dashboard-six">
    <?php include('../common_components/header.php');?>
    <div class="az-content-body az-content-body-dashboard-six">
        <p class="mg-b-20 mg-lg-b-30"></p>
        <div class=" card card-body pd-10 mg-20 bg-gray-200 bd ">

            <p class="pdl-10  form-text-size"><strong>Enrollment Number: </strong> <?php echo $rollno; ?> </p>
            <p class="pdl-10 form-text-size"><strong>Student Name: </strong><?php echo $student_name; ?> </p>
            <p class="pdl-10 form-text-size"><strong>Section: </strong><?php echo $fetched_section; ?> </p>
                        <p class="pdl-10 form-text-size"><strong>Stream: </strong>
            <?php echo $fetched_stream; ?> </p>
<!--            <p class="pdl-10 form-text-size"><strong>Date: </strong> --><?php //echo date('d-m-y'); ?><!--</p>-->
        </div>
        &nbsp;
        <div class="col">
            <div class="az-content-label mg-b-5">Calculated Attendance</div>
            &nbsp;

            <div class="table-responsive">
                <table class="table table-hover mg-b-0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Subject</th>
                        <th>Total Classes Marked</th>
                        <th>No. of Classes Attended</th>
                        <th>Percentage</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php for ($j = 0; $j < sizeof($fetched_subjects); $j++) { ?>
                        <tr>
                            <th scope="row"><?php echo $j + 1 ?></th>
                            <td><?php echo $subjects_full_name[$j] ?></td>
                            <td><?php echo $total_no_of_classes[$j] ?></td>
                            <td><?php echo $no_of_classes_attended[$j] ?></td>
                            <td><?php echo substr($percentage_per_subject[$j],0,5) . "%" ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div><!-- table-responsive -->
        </div>
    </div>
    <?php include '../common_components/footer.php'; ?>
</div>


<script src="../lib/jquery/jquery.min.js"></script>
<script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../lib/ionicons/ionicons.js"></script>
<script src="../lib/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
<script src="../lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
<script src="../lib/select2/js/select2.min.js"></script>

<script src="../js/azia.js"></script>

<script>
    $(document).ready(function () {
        'use strict';

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
        $('#datatable1').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });

        // Select2
        $('.dataTables_length select').select2({minimumResultsForSearch: Infinity});

    });
</script>
</body>
</html>

