<?php include('../include/session.php');
$q = "SELECT  * FROM users WHERE flag=0 ORDER BY id desc";
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

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">
    <link rel="stylesheet" href="../css/customcss.css">


</head>
<body class="az-body az-light">

<?php include('../common_components/side_nav_bar.php'); ?>

<div class="az-content az-content-dashboard-six">
    <?php include('../common_components/header.php'); ?>

    <form method="post" action="activation.php" id="activate"></form>


    <div class="az-content-body az-content-body-dashboard-six">
        <!--  <h2 class="az-content-title tx-24 mg-b-5">Hi, welcome back!</h2>
         <p class="mg-b-20 mg-lg-b-30">Your finance performance and monitoring dashboard template.</p> -->
        <p class="center-a"><strong>ACTIVATE USER</strong></p>
        &nbsp;
        <div class="col">
            <div class="table-responsive  table-m card card-body bg-white-1">
                <table class="table table-hover table-bordered mg-b-0  ">
                    <thead>
                    <tr>
                        <th> S No.</th>
                        <th>Faculty Name</th>

                        <th>Section</th>
                        <th>Section</th>

                        <th>Activate</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i=1;
                    while ($DataRows = mysqli_fetch_array($e)) {
                        $t_id = $DataRows['id'];
                        $f_name = $DataRows['fname'];
                        $sec = $DataRows['sections'];
                        $sub = $DataRows['subjects'];

                        ?>
                        <tr>
                            <td scope="row"><?php echo $i; ?></td>
                            <td><?php echo $f_name; ?></td>
                            <td><?php echo $sec; ?></td>
                            <td><?php echo $sub; ?></td>

                            <td>
                                <label class="ckbox">
                                    <input form="activate" name="flag[<?php echo $t_id; ?>]" value='1'
                                           type="checkbox"><span></span>
                                </label>


                            </td>
                        </tr>
                    <?php $i++; } ?>

                    </tbody>
                </table>

            </div><!-- table-responsive -->
            <button class="btn btn-indigo btn-rounded button-a" name="submit" form="activate">Submit</button>
        </div>


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
