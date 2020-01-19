<?php
include("../include/session.php");
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

  <title>MYattend.-Dashboard</title>

  <!-- vendor css -->
  <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/typicons.font/typicons.css" rel="stylesheet">

  <!-- azia CSS -->
  <link rel="stylesheet" href="../css/azia.css">
  <link rel="stylesheet" href="../css/customcss.css">

</head>

<body class="az-body az-light">

 
<?php include('../common_components/side_nav_bar.php');?>
     
  <div class="az-content az-content-dashboard-six">
    <?php include('../common_components/header.php');?>  

    <div class="az-content-body az-content-body-dashboard-six">
      <!-- <h2 class="az-content-title tx-24 mg-b-5">Hi, welcome back!</h2>
        <p class="mg-b-20 mg-lg-b-30">Your  Classes attendence performance and monitoring dashboard.</p> -->
      <div class="az-content">
        <h5 class="card-title mg-b-20" align="center"> Create New Account</h5>

        <form action="add_user_data.php" method="post" id="user_data"></form>
        <div class="  center-content ">
          <div class="card card-body pd-10t ">
            <div class="az-content-label mg-b-10">Account Details</div>

            <div class="form-group">
              <label class="az-content-label tx-11 tx-medium tx-gray-600">First Name </label>
              <input type="text" class="form-control" form="user_data" name="fname" required="required">
            </div><!-- form-group -->
            <div class="form-group">
              <label class="az-content-label tx-11 tx-medium tx-gray-600">Last Name </label>
              <input type="text" class="form-control" form="user_data" name="lname" required="required">
            </div><!-- form-group -->

            <div class="form-group">
              <label class="az-content-label tx-11 tx-medium tx-gray-600">Email</label>

              <input type="email" class="form-control pd-r-80" form="user_data" name="email" required="required">

            </div><!-- form-group -->

            <div class="form-group">
              <label class="az-content-label tx-11 tx-medium tx-gray-600">Password</label>

              <input type="password" class="form-control pd-r-80" form="user_data" name="password" required="required">

            </div><!-- form-group -->

            <div class="form-group">
              <div class="row row-sm">
                <div class="col-sm-9">
                  <label class="az-content-label tx-11 tx-medium tx-gray-600">Account Type</label>
                  <div class="row row-sm">
                    <div class="col-sm-7">
                      <select class="form-control select2-no-search" form="user_data" name="acc_type">
                        <option selected value="0">Teacher</option>
                        <option value="2">Admin</option>
                      </select>
                    </div><!-- col -->
                  </div><!-- row -->
                </div><!-- col -->
              </div><!-- row -->
            </div><!-- form-group -->
          </div><!-- card -->
          <button class="btn btn-az-primary mg-t-10 center" type="submit" name="submit" form="user_data">Save</button>



          <!-- your content goes here -->
        </div><!-- az-content-body -->



      </div><!-- az-content -->
      <?php include('../common_components/footer.php');?>

      <script src="../lib/jquery/jquery.min.js"></script>
      <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="..lib/ionicons/ionicons.js"></script>

      <script src="../js/azia.js"></script>
      <script>
        $(function() {
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

          $('.az-iconbar .nav-link').on('click', function(e) {
            e.preventDefault();

            $(this).addClass('active');
            $(this).siblings().removeClass('active');

            $('.az-iconbar-aside').addClass('show');

            var targ = $(this).attr('href');
            $(targ).addClass('show');
            $(targ).siblings().removeClass('show');
          });

          $('.az-iconbar-toggle-menu').on('click', function(e) {
            e.preventDefault();

            if (window.matchMedia('(min-width: 992px)').matches) {
              $('.az-iconbar .nav-link.active').removeClass('active');
              $('.az-iconbar-aside').removeClass('show');
            } else {
              $('body').removeClass('az-iconbar-show');
            }
          })

          $('#azIconbarShow').on('click', function(e) {
            e.preventDefault();
            $('body').toggleClass('az-iconbar-show');
          });



        });
      </script>
</body>

</html>
