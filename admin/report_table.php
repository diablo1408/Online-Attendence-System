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
    <div class="az-iconbar">
      <a href="dashboard.html" class="az-iconbar-logo"><i class="typcn typcn-chart-bar-outline"></i></a>
      <nav class="nav">
        
        <a href="#asideDashboard" class="nav-link "><i class="typcn typcn-device-laptop"></i></a>
       <a href="#asideAppsPages" class="nav-link active"><i class="typcn typcn-folder-add"></i></a>
        <a href="#asideCharts" class="nav-link"><i class="typcn typcn-chart-line-outline"></i></a>
        <a href="#asideTables" class="nav-link"><i class="typcn typcn-th-large-outline"></i></a>
      </nav>
      <!-- az-iconbar-bottom -->
    </div><!-- az-iconbar -->
    <div class="az-iconbar-aside">
      <div class="az-iconbar-header">
       
        <a href="dashboard.html" class="az-logo">MYatten<span>d</span>.</a>
        <a href="" class="az-iconbar-toggle-menu">
          <i class="icon ion-md-arrow-back"></i>
          <i class="icon ion-md-close"></i>
        </a>
      </div><!-- az-iconbar-header -->
      <div class="az-iconbar-body">
        <div id="asideDashboard" class="az-iconbar-pane">
          <h6 class="az-iconbar-title">Dashboard</h6>
         

         
        </div>
        <div id="asideCharts" class="az-iconbar-pane">
          <h6 class="az-iconbar-title">View Report</h6>
          <small class="az-iconbar-text"></small>
          <nav class="nav">
            
            <a href=""  data-toggle="modal" data-target="#modalsection1">Section Wise</a>
            <a href=""  data-toggle="modal" data-target="#modalsubject2">Subject Wise</a>
            <a href=""  data-toggle="modal" data-target="#modalrollno3">RollNo. Wise</a>
            
         
          </nav>
      </div>
        <div id="asideAppsPages" class="az-iconbar-pane">
          <h6 class="az-iconbar-title">Attendence</h6>
          <small class="az-iconbar-text"></small>
          <nav class="nav">
            <a href="attendence_details.html" class="nav-link active">Schedule Classes</a>
            <a href="attendence_form.html" class="nav-link">Take Attendence</a>
         
          </nav>
        </div><!-- az-iconbar-pane -->
      </div><!-- az-iconbar-body -->
    </div><!-- az-iconbar-aside -->

     <div class="az-content az-content-dashboard-six">
       <div class="az-header az-header-dashboard-six">
        <div class="container-fluid">
          <div class="az-header-left">
            <a href="" id="azIconbarShow" class="az-header-menu-icon"><span></span></a>
          </div><!-- az-header-left -->
          <div class="az-header-center">
            <input type="search" class="form-control" placeholder="Search for anything...">
            <button class="btn"><i class="fas fa-search"></i></button>
          </div><!-- az-header-center -->
          <div class="az-header-right">
           <!--  <div class="az-header-message">
              <a href="app-chat.html"><i class="typcn typcn-messages"></i></a>
            </div><-- az-header-message --> 
           
            <div class="dropdown az-profile-menu">
              <a href="" class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header d-sm-none">
                  <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <div class="az-header-profile">
                  <div class="az-img-user">
                    <img src="https://via.placeholder.com/500x500" alt="">
                  </div><!-- az-img-user -->
                  <h6>Aziana Pechon</h6>
                  <span>Premium Member</span>
                </div><!-- az-header-profile -->

                <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
                <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
              </div><!-- dropdown-menu -->
            </div>
          </div><!-- az-header-right -->
        </div><!-- container -->
      </div><!-- az-header -->

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
    <div class="az-footer">
      <div class="container">
        <span>&copy;  ADGITM </span>
        <span>Designed by: Dibwab</span>
      </div><!-- container -->
    </div><!-- az-footer -->

    
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
      $(document).ready(function(){
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
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
  </body>
</html>
