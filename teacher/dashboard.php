<?php include('../include/session.php'); ?>
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

    <title>MYattend.-Dashboard</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="..\css\azia.css">
    <link rel="stylesheet" href="../css/customcss.css">

</head>
<body class="az-body az-light">

<?php include('../common_components/side_nav_bar.php'); ?>


<div class="az-content az-content-dashboard-six">
    <?php include('../common_components/header.php'); ?>


    <div class="az-content-body az-content-body-dashboard-six">
        <h3 class="col az-content-title tx-24 mg-b-5"><?php echo SuccessMessage(); echo AlertMessage();echo Message();?></h3>
        <br>
        <div class="col-lg-12 mg-t-20 mg-lg-t-0">
            <div class="card card-dashboard-balance">
                <div class="card-body">
                    <label class="az-content-label mg-b-0">Attendance Dashboard</label>
                    <h1 class="balance-amount"><?php echo ucfirst($fname.' '.$lname);?></h1>
                    <div class="d-sm-flex">
                        <div>
                            <label class="az-content-label">Section Currently Teaching</label>
                            <h5 class="account-name"><?php echo $teacherssections ?></h5>
                        </div>
                        <div class="mg-t-20 mg-sm-t-0 mg-sm-l-50">
                            <label class="az-content-label">Subjects Current Teaching</label>
                            <h5 class="account-name"><?php echo $teacherssubjects ?></h5>
                        </div>
                    </div>
                </div><!-- card-body -->
            </div><!-- card -->
        </div>
        &nbsp;
        <h1 class="col az-content-title tx-24 mg-b-5">Quick Actions</h1>
        &nbsp;
        <div class="col">
            <div class="row">
                <div class="col-lg-6">
                    <a href="./attendance_details.php"> <div class="card card-dashboard-ten bg-purple">
                            <h4 class="az-content-label">Teacher</h4>
                            <div class="card-body">
                                <div>
                                    <h6>Mark Attendance</h6>
                                </div>
                            </div><!-- card-body -->
                        </div></a>

                </div>
                <div class="col-lg-6">
                    <a href="../admin/view_report_admin.php">
                        <div class="card card-dashboard-ten bg-primary">
                            <h4 class="az-content-label">Reports & Statistics</h4>
                            <div class="card-body">
                                <div>
                                    <h6>View Report</h6>
                                </div>
                            </div><!-- card-body -->
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div><!-- az-content -->
    <?php include('../common_components/footer.php'); ?>


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
