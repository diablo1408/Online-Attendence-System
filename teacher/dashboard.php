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

    <div class="az-iconbar">
      <a href="dashboard.php" class="az-iconbar-logo"><i class="typcn typcn-chart-bar-outline"></i></a>
      <nav class="nav">
        
        <a href="#asideDashboard " class="nav-link active"><i class="typcn typcn-device-laptop"></i></a>
       
        <a href="#asideAppsPages" class="nav-link"><i class="typcn typcn-folder-add"></i></a>
        <a href="#asideCharts" class="nav-link"><i class="typcn typcn-chart-line-outline"></i></a>
        
        <a href="#asideTables" class="nav-link"><i class="typcn typcn-th-large-outline"></i></a>
      </nav>
     <!--  <div class="az-iconbar-bottom">
        <a href="" class="az-iconbar-help"><i class="far fa-question-circle"></i></a>
        <a href="" class="az-img-user online"><img src="https://via.placeholder.com/500x500" alt=""></a>
      </div> --><!-- az-iconbar-bottom -->
    </div><!-- az-iconbar -->
    <div class="az-iconbar-aside">
      <div class="az-iconbar-header">
        <a href="dashboard.php" class="az-logo">MYatten<span>d</span>.</a>
        <a href="" class="az-iconbar-toggle-menu">
          <i class="icon ion-md-arrow-back"></i>
          <i class="icon ion-md-close"></i>
        </a>
      </div><!-- az-iconbar-header -->
      <div class="az-iconbar-body">
        <div id="asideDashboard" class="az-iconbar-pane">
          <h6 class="az-iconbar-title">Dashboard</h6>
          <!-- <small class="az-iconbar-text">Choose between layouts to experience different look and feel for your projects.</small> -->

          
        </div>
        <div id="asideAppsPages" class="az-iconbar-pane">
          <h6 class="az-iconbar-title">Attendence</h6>
          <small class="az-iconbar-text"></small>
          <nav class="nav">
            <a href="attendence_details.php" class="nav-link">Schedule Classes</a>
            <a href="attendence_form.php" class="nav-link">Take Attendence</a>
         
          </nav>
        </div><!-- az-iconbar-pane -->
        <div id="asideCharts" class="az-iconbar-pane">
          <h6 class="az-iconbar-title">View Report</h6>
          <small class="az-iconbar-text"></small>
          <nav class="nav">
            
            <a href=""  data-toggle="modal" data-target="#modalsection1">Section Wise</a>
            <a href=""  data-toggle="modal" data-target="#modalsubject2">Subject Wise</a>
            <a href=""  data-toggle="modal" data-target="#modalrollno3">RollNo. Wise</a>
            
         
          </nav>
        </div>
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
            <!-- <div class="az-header-message">
              <a href="app-chat.php"><i class="typcn typcn-messages"></i></a>
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
                <a href="page-signin.php" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
              </div><!-- dropdown-menu -->
            </div>
          </div><!-- az-header-right -->
        </div><!-- container -->
      </div><!-- az-header -->

      <div class="az-content-body az-content-body-dashboard-six">
        <h2 class="az-content-title tx-24 mg-b-5">Hi, welcome back!</h2>
        <p class="mg-b-20 mg-lg-b-30">Your  Classes attendence performance and monitoring dashboard.</p>

        <!-- your content goes here -->
      </div><!-- az-content-body -->

     <!--  <div class="az-footer">
        <div class="container-fluid">
          <span>&copy; 2018 Azia Responsive Bootstrap 4 Dashboard Template</span>
          <span>Designed by: ThemePixels</span>
        </div><-- container -->
      </div><!-- az-footer --> -->
    </div><!-- az-content -->

    <div id="modalsection1" class="modal">
      <div class="modal-dialog wd-xl-400" role="document">
        <div class="modal-content">
          <div class="modal-body pd-20 pd-sm-40">
            <button type="button" class="close pos-absolute t-15 r-20 tx-26" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

            <!-- <h5 class="modal-title mg-b-5">Create New Account</h5>
            <p class="mg-b-20">Let's get you all setup so you can begin using our app.</p> -->

            <div class="form-group">
              <input type="text" class="form-control" placeholder="Section Name">
            </div><!-- form-group -->
          
            <button class="btn btn-primary btn-block">Continue</button>
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
    <div id="modalsubject2" class="modal">
      <div class="modal-dialog wd-xl-400" role="document">
        <div class="modal-content">
          <div class="modal-body pd-20 pd-sm-40">
            <button type="button" class="close pos-absolute t-15 r-20 tx-26" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

            <!-- <h5 class="modal-title mg-b-5">Create New Account</h5>
            <p class="mg-b-20">Let's get you all setup so you can begin using our app.</p> -->

            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject Name">
            </div><!-- form-group -->
          
            <button class="btn btn-primary btn-block">Continue</button>
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
    <div id="modalrollno3" class="modal">
      <div class="modal-dialog wd-xl-400" role="document">
        <div class="modal-content">
          <div class="modal-body pd-20 pd-sm-40">
            <button type="button" class="close pos-absolute t-15 r-20 tx-26" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

            <!-- <h5 class="modal-title mg-b-5">Create New Account</h5>
            <p class="mg-b-20">Let's get you all setup so you can begin using our app.</p> -->

            <div class="form-group">
              <input type="text" class="form-control" placeholder="Roll Number">
            </div><!-- form-group -->
          
            <button class="btn btn-primary btn-block">Continue</button>
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->

    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>

    <script src="../js/azia.js"></script>
    <script>
      $(function(){
        'use strict'

        if($('.az-iconbar .nav-link.active').length) {
          var targ = $('.az-iconbar .nav-link.active').attr('href');
          $(targ).addClass('show');

          if(window.matchMedia('(min-width: 1200px)').matches) {
            $('.az-iconbar-aside').addClass('show');
          }

          if(window.matchMedia('(min-width: 992px)').matches &&
            window.matchMedia('(max-width: 1199px)').matches) {
              $('.az-iconbar .nav-link.active').removeClass('active');
          }
        }

        $('.az-iconbar .nav-link').on('click', function(e){
          e.preventDefault();

          $(this).addClass('active');
          $(this).siblings().removeClass('active');

          $('.az-iconbar-aside').addClass('show');

          var targ = $(this).attr('href');
          $(targ).addClass('show');
          $(targ).siblings().removeClass('show');
        });

        $('.az-iconbar-toggle-menu').on('click', function(e){
          e.preventDefault();

          if(window.matchMedia('(min-width: 992px)').matches) {
            $('.az-iconbar .nav-link.active').removeClass('active');
            $('.az-iconbar-aside').removeClass('show');
          } else {
            $('body').removeClass('az-iconbar-show');
          }
        })

        $('#azIconbarShow').on('click', function(e){
          e.preventDefault();
          $('body').toggleClass('az-iconbar-show');
        });



      });
    </script>
  </body>
</html>