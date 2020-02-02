<?php include('../include/session.php');
$q = "SELECT * FROM logs WHERE marked_by=$teacher_id ORDER BY id desc";
$e = mysqli_query($db, $q);

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
    <link href="../lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">
    <link rel="stylesheet" href="../css/customcss.css">


</head>
<body class="az-body az-light">

<?php include('../common_components/side_nav_bar.php'); ?>

<div class="az-content az-content-dashboard-six">
    <?php include('../common_components/header.php'); ?>

    <div class="az-content-body az-content-body-dashboard-six">
        <!--  <h2 class="az-content-title tx-24 mg-b-5">Hi, welcome back!</h2>
         <p class="mg-b-20 mg-lg-b-30">Your finance performance and monitoring dashboard template.</p> -->
        <p class="center-a"><strong><?php echo strtoupper($fname.'\'s ') ?>ATTENDANCE LOGS</strong></p>
        &nbsp;
        <div class="col">
            <table id="datatable1" class="display responsive nowrap">
                <thead>
                <tr>
                    <th class="wd-5p">S No.</th>
                    <th class="wd-15p">Date of Marking</th>
                    <th class="wd-15p">Date of Lecture</th>
                    <th class="wd-15p">Section</th>
                    <th class="wd-10p">Subject</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                while ($DataRows = mysqli_fetch_array($e)) {
                    $Date = $DataRows['dt'];
                    $t_id = $DataRows['marked_by'];
                    $date_of_lecture = $DataRows['dtoflec'];
                    $sec = $DataRows['section'];
                    $sub = $DataRows['subject'];

                    ?>
                    <tr>
                        <td scope="row"><?php echo $i; ?></td>
                        <td><?php echo $Date; ?></td>
                        <td><?php echo $date_of_lecture; ?></td>
                        <td><?php echo $sec; ?></td>
                        <td><?php echo $sub; ?></td>
                    </tr>
                    <?php $i++;
                } ?>

                </tbody>
            </table>
        </div>
        <!-- your content goes here -->
    </div><!-- az-content-body -->


    <?php include '../common_components/footer.php'; ?>
</div><!-- az-content -->


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

        $('#datatable1').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });

        $('#datatable2').DataTable({
            bLengthChange: false,
            searching: false,
            responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({minimumResultsForSearch: Infinity});

    });


</script>
</body>
</html>
