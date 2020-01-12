<?php include('../include/session.php');

$stream = mysqli_real_escape_string($db, $_POST['stream']);
$section = mysqli_real_escape_string($db, $_POST['section']);
$type = mysqli_real_escape_string($db, $_POST['type']);
$subject = mysqli_real_escape_string($db, $_POST['subject']);
$query = "SELECT * FROM students WHERE stream='$stream' AND section='$section'";
$execute = mysqli_query($db, $query);
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

    <form method="post" action="add_attendence.php" id="form1"></form>
    <input type="text" form="form1" value="<?php echo $stream; ?>" name="stream" hidden>
    <input type="text" form="form1" value="<?php echo $section; ?>" name="section" hidden>
    <input type="text" form="form1" value="<?php echo $type; ?>" name="type" hidden>
    <input type="text" form="form1" value="<?php echo $subject; ?>" name="subject" hidden>


    <div class="az-content-body az-content-body-dashboard-six">
      <!--  <h2 class="az-content-title tx-24 mg-b-5">Hi, welcome back!</h2>
        <p class="mg-b-20 mg-lg-b-30">Your finance performance and monitoring dashboard template.</p> -->
      <p class="center-a"><strong>ATTENDANCE SHEET</strong></p>
      <div class=" card card-body pd-10 mg-20 ">

        <p class="pdl-10"><strong>Faculty:</strong> <?php echo ucfirst($fname); ?> </p>
        <p class="pdl-10"><strong>Subject:</strong><?php echo $subject; ?> </p>
        <p class="pdl-10"><strong>Date:</strong> <?php echo date('d-m-y'); ?></p>
        <p class="pdl-10"><strong>Type:</strong> <?php if ($type == 1) {
                                                    echo "Theory";
                                                  } else {
                                                    echo "Practical";
                                                  } ?></p>
      </div>
      <div class="table-responsive  table-m ">
        <table class="table table-hover table-bordered mg-b-0  ">
          <thead>
            <tr>
              <th> Enrollment No.</th>
              <th>Name</th>

              <th>Present/Absent</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if ($type = 2) {
              $q = "SELECT * FROM students WHERE stream='$stream' AND section='$section'";
              $e = mysqli_query($db, $q);
              $r = mysqli_num_rows($e);
              $num = floor($r / 2);
            }
            $i = 0;
            while (($DataRows = mysqli_fetch_array($execute)) && ($i < $num)) {
              $id = $DataRows['id'];
              $name = $DataRows['name'];
              $enr = $DataRows['enrollment'];
              $i++;

            ?>
              <tr>
                <td scope="row"><?php echo $enr; ?></td>
                <td><?php echo $name; ?></td>

                <td>
                  <label class="ckbox">
                    <input form="form1" name="student[<?php echo $enr; ?>]" value='1' type="checkbox"><span></span>
                  </label>


                </td>
              </tr>

            <?php  } ?>
          </tbody>
        </table>

      </div><!-- table-responsive -->
      <button class="btn btn-indigo btn-rounded button-a" name="submit" form="form1">Submit</button>



      <!-- your content goes here -->
    </div><!-- az-content-body -->




  </div><!-- az-content -->
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