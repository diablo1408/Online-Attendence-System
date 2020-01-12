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
   <?php include('../common_components/side_nav_bar.php');?>

  <div class="az-content az-content-dashboard-six">
  <?php include('../common_components/header.php');?>
    <div class="az-content-body az-content-body-dashboard-six">
      <p class="mg-b-20 mg-lg-b-30"></p>
      <div class="az-content-body">

        <table id="datatable1" class="display responsive nowrap">
          <thead>
            <tr>
              <th class="wd-15p">Enrollment No</th>
              <th class="wd-15p">Name</th>
              <th class="wd-20p">Attendence</th>
              <th class="wd-15p">Total Attendence</th>
              <th class="wd-10p">Percentage</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>123</td>
              <td>abc</td>
              <td>55</td>
              <td>107</td>
              <td>5056</td>
            </tr>
            <tr>
              <td>2123</td>
              <td>babc</td>
              <td>25</td>
              <td>1022</td>
              <td>501</td>
            </tr>
            <tr>
              <td>3123</td>
              <td>cabc</td>
              <td>35</td>
              <td>1023</td>
              <td>503</td>
            </tr>
            <tr>
              <td>4123</td>
              <td>dabc</td>
              <td>25</td>
              <td>1102</td>
              <td>5033</td>
            </tr>
          </tbody>
        </table>
        <hr class="mg-y-30 mg-lg-y-50">
      </div>
    </div>
  </div>
  <?php include('../common_components/footer.php');?>
     
 


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
    $(document).ready(function() {
      'use strict';

      $('#datatable1').DataTable({
        responsive: true,
        language: {
          searchPlaceholder: 'Search...',
          sSearch: '',
          lengthMenu: '_MENU_ items/page',
        }
      });

      // Select2
      $('.dataTables_length select').select2({
        minimumResultsForSearch: Infinity
      });

    });
  </script>
</body>

</html>