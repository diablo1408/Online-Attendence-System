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

  <title>Add_User</title>

  <!-- vendor css -->
  <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
  <link href="../lib/line-awesome/css/line-awesome.css" rel="stylesheet">


  <!-- azia CSS -->
  <link rel="stylesheet" href="../css/azia.css">

</head>

<body class="az-body az-light">
 
    <?php include('../common_components/side_nav_bar.php');?>
     
  <div class="az-content az-content-dashboard-six">
    <?php include('../common_components/header.php');?> 



    <div class="az-content-body az-content-body-dashboard-six">
      <p class="mg-b-20 mg-lg-b-30"></p>
      <div class="az-content ">
        <h2 align="center" class="az-content-title">Student Registration</h2>

        <div class="az-content-label mg-b-10">Enter Student Data</div>

        <form action="add_student_table.php" method="post" id="form_student"></form>
        <div class="card card-body pd-20">
          <div class="row row-sm align-items-center mg-10">
            <div class="col-md-2">
              <label class="form-label mg-b-0 font-weight-bold" style="font-size: medium;">Year :</label>
            </div><!-- col -->
            <div class=" mg-t-5 mg-md-t-0">
              <select form="form_student" name="year" form="form1" class="form-control">
                <option value="0" selected>Select</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div><!-- col -->
            <div class="col-md-2">
              <label class="form-label mg-b-0 font-weight-bold" style="font-size: medium;">Stream :</label>
            </div><!-- col -->
            <div class=" mg-t-5 mg-md-t-0">
              <select form="form_student" name="stream" form="form1" class="form-control">
                <option value="0" selected>Select</option>
                <option value="CSE">CSE</option>
                <option value="MAE">MAE</option>
                <option value="EEE">EEE</option>
                <option value="ECE">ECE</option>
                <option value="IT">IT</option>
                <option value="BBA">BBA</option>
                <option value="BCA">BCA</option>
                <option value="MBA">MBA</option>
              </select>
            </div><!-- col -->
          </div><!-- row -->



          <div class="row row-sm align-items-center mg-10">
            <div class="col-md-2">
              <label class="form-label mg-b-0 font-weight-bold" style="font-size:medium">Total Students:</label>
            </div><!-- col -->
            <div class=" mg-t-5 mg-md-t-0">
              <input form="form_student" type="text" class="form-control" placeholder="Enter Total Students" name="number">
            </div><!-- col -->
            <div class="col-md-2">
              <label class="form-label mg-b-0 font-weight-bold" style="font-size: medium;">Section:</label>
            </div><!-- col -->
            <div class=" mg-t-5 mg-md-t-0 ">
              <input form="form_student" type="text" class="form-control" placeholder="Enter Section" name="section">
            </div><!-- col -->
          </div><!-- row -->



        </div>

        <hr class="mg-y-20 ">


        <!-- table-responsive -->

        <div class="mg-lg-b-30"></div>

        <button class="btn btn-az-primary pd-x-30 mg-r-5" name="submit" type="submit" form="form_student">Save Data</button>
        <button class="btn btn-dark pd-x-30">Cancel</button>

      </div>
    </div>



    <?php include('../common_components/footer.php');?>

    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>

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