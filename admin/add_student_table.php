<?php
include('../include/session.php');
$number = $_POST['number'];
$stream = mysqli_real_escape_string($db, $_POST['stream']);
$year = mysqli_real_escape_string($db, $_POST['year']);
$section = mysqli_real_escape_string($db, $_POST['section']);


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

  <?php include('../common_components/side_nav_bar.php'); ?>

  <div class="az-content az-content-dashboard-six">
    <?php include('../common_components/header.php'); ?>

    <div class="az-content-body az-content-body-dashboard-six">
      <div class="table-responsive mg-b-10">
        <form action="add_data.php" method="post" id="form_add">
          <input type="text" name="stream" value="<?php echo $stream; ?>" hidden>
          <input type="text" name="section" value="<?php echo $section; ?>" hidden>
          <input type="text" name="year" value="<?php echo $year; ?>" hidden>
        </form>
        <table class="table table-hover table-bordered ">
          <thead>
            <tr>
              <th>Enrollment No.</th>
              <th>Name</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($number > 0) {
              $number--;
            ?>
              <tr>
                <th scope="row"> <input form="form_add" type="text" class="form-control" name="student_enr[]" placeholder="Enter Enrollment"></th>
                <th> <input form="form_add" type="text" class="form-control" name="student_name[]" placeholder="Enter Name"> </th>
              </tr>
            <?php } ?>


          </tbody>
        </table>
      </div>
      <div class="mg-lg-b-30"></div>

      <button class="btn btn-az-primary pd-x-30 mg-r-5" type="submit" name="submit" form="form_add">Save Data</button>
      <button class="btn btn-dark pd-x-30">Cancel</button>

    </div>
  </div>



  <?php include('../common_components/footer.php'); ?>

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