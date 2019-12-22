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

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

  </head>
  <body class="az-body az-light">

      <div class="az-iconbar">
        <a href="dashboard_admin.html" class="az-iconbar-logo"><i class="typcn typcn-chart-bar-outline"></i></a>
        <nav class="nav">
          
          <a href="dashboard_admin.html" class="nav-link "><i class="typcn typcn-device-laptop"></i></a>
         <a href="#asideAppsPages" class="nav-link active"><i class="typcn typcn-folder-add"></i></a>
          <a href="#asideCharts" class="nav-link"><i class="typcn typcn-chart-line-outline"></i></a>
          <a href="#asideTables" class="nav-link"><i class="typcn typcn-th-large-outline"></i></a>
        </nav>
        <!-- az-iconbar-bottom -->
      </div><!-- az-iconbar -->
      <div class="az-iconbar-aside">
        <div class="az-iconbar-header">
         
          <a href="dashboard_admin.html" class="az-logo">MYatten<span>d</span>.</a>
          <a href="" class="az-iconbar-toggle-menu">
            <i class="icon ion-md-arrow-back"></i>
            <i class="icon ion-md-close"></i>
          </a>
        </div><!-- az-iconbar-header -->
        <div class="az-iconbar-body">
          <div id="asideDashboard" class="az-iconbar-pane">
            <h6 class="az-iconbar-title">Dashboard</h6>
           
  
           
          </div>
          <div id="asideAppsPages" class="az-iconbar-pane">
            <h6 class="az-iconbar-title"></h6>
            <small class="az-iconbar-text"></small>
            <nav class="nav">
              <a href="add_user.html" class="nav-link">Add Account</a>
            <a href="add_student.html" class="nav-link">Sudent Registration</a>
           
            </nav>
          </div>
          <!-- az-iconbar-pane -->
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
       <div class="az-content ">
          <h2 align="center" class="az-content-title">Student Registration</h2>
         
          <div class="az-content-label mg-b-10">Enter Student Data</div>
          
          
          <div  class ="card card-body pd-20">
              <div class="row row-xs align-items-center mg-b-10">
                <div class="col-md-1">
                  <label class="form-label mg-b-0">Year:</label>
                </div><!-- col -->
                <div class=" mg-t-5 mg-md-t-0">
                  <input type="text" class="form-control" placeholder="Enter your firstname">
                </div><!-- col -->
              </div><!-- row -->
  
              <div class="row row-xs align-items-center mg-b-10">
                  <div class="col-md-1">
                    <label class="form-label mg-b-0">Stream:</label>
                  </div><!-- col -->
                  <div class=" mg-t-5 mg-md-t-0">
                    <input type="text" class="form-control" placeholder="Enter your firstname">
                  </div><!-- col -->
                </div><!-- row -->
  
                <div class="row row-xs align-items-center mg-b-10">
                    <div class="col-md-1" >
                      <label class="form-label mg-b-0">Total Students:</label>
                    </div><!-- col -->
                    <div class=" mg-t-5 mg-md-t-0">
                      <input type="text" class="form-control" placeholder="Enter your firstname">
                    </div><!-- col -->
                  </div><!-- row -->

                  <div class="row row-xs align-items-center mg-b-50">
                      <div class="col-md-1">
                        <label class="form-label mg-b-0">Class:</label>
                      </div><!-- col -->
                      <div class=" mg-t-5 mg-md-t-0 ">
                        <input type="text" class="form-control" placeholder="Enter your firstname">
                      </div><!-- col -->
                    </div><!-- row -->
  
             
            </div>
  

         

          

         

          

         

          <hr class="mg-y-10 ">


          <div class="table-responsive">
            <table class="table table-hover mg-b-0">
                <thead>
                    <tr>
                      <th>Enrollment No.</th>
                      <th>Name</th>
                      <th>Stream</th>
                      <th>Class</th>
                      <th>Contact No.</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"> <input type="text" class="form-control" placeholder="Enter your firstname"></th>
                      <th> <input type="text" class="form-control" placeholder="Enter your firstname"> </th>
                      <td> <input type="text" class="form-control" placeholder="Enter your firstname"></td>
                      <td> <input type="text" class="form-control" placeholder="Enter your firstname"></td>
                      <td> <input type="text" class="form-control" placeholder="Enter your firstname"></td>
                    </tr>
                   <tr>
                      <th scope="row"> <input type="text" class="form-control" placeholder="Enter your firstname"></th>
                      <th> <input type="text" class="form-control" placeholder="Enter your firstname"> </th>
                      <td> <input type="text" class="form-control" placeholder="Enter your firstname"></td>
                      <td> <input type="text" class="form-control" placeholder="Enter your firstname"></td>
                      <td> <input type="text" class="form-control" placeholder="Enter your firstname"></td>
                    </tr>
                    
                   
                          
                  </tbody>
            </table>
          </div><!-- table-responsive -->

          <div class="mg-lg-b-30"></div>

          <button class="btn btn-az-primary pd-x-30 mg-r-5">Save Data</button>
          <button class="btn btn-dark pd-x-30">Cancel</button>

        </div>
      </div>
    
    
   
    <div class="az-footer">
      <div class="container">
        <span>&copy; 2018 Azia Responsive Bootstrap 4 Dashboard Template</span>
        <span>Designed by: ThemePixels</span>
      </div><!-- container -->
    </div><!-- az-footer -->

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
