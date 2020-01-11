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

     <?php include ('./common_components/side_nav_bar.php');?>
    
     <div class="az-content az-content-dashboard-six">
     <?php include('./common_components/header.php');?>
    

      <div class="az-content-body az-content-body-dashboard-six">
       
        <div class="bd bd-t-0 tab-content">
           <div id="tabCont1" class="tab-pane active show">
               <div class="row row-sm">
                   <div class="col-md">
                   <div class="card bg-gray-200 bd-0">
                      <div class="card-body">
                       <h5 class="card-title tx-dark tx-medium mg-b-10">The Card Title</h5>
                       <p class="card-subtitle mg-b-15">This is the card subtitle</p>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       <a href="#" class="card-link">Card link</a>
                       <a href="#" class="card-link">Another link</a>
                       <button data-toggle="dropdown" class="btn btn-indigo ">Dropdown <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
                       <div class="dropdown-menu">
                         <a href="" class="dropdown-item">Add Attendence(Theory)</a>
                         <a href="" class="dropdown-item">Add Attendence(Practical)</a>
                         
                        </div><!-- dropdown-menu -->
                     </div>
                   </div>
                 </div>
                 <div class="col-md">
                    <div class="card bg-gray-200 bd-0">
                       <div class="card-body">
                        <h5 class="card-title tx-dark tx-medium mg-b-10">The Card Title</h5>
                        <p class="card-subtitle mg-b-15">This is the card subtitle</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                        <button data-toggle="dropdown" class="btn btn-indigo ">Dropdown <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
                           <div class="dropdown-menu">
                             <a href="" class="dropdown-item">Profile</a>
                             <a href="" class="dropdown-item">Activity Logs</a>
                             <a href="" class="dropdown-item">Account Settings</a>
                             <a href="" class="dropdown-item">Logout</a>
                            </div><!-- dropdown-menu -->
                      </div>
                    </div>
                  </div>
               
              </div>
            
            
          </div><!-- tab-pane -->
          <div id="tabCont2" class="tab-pane">This is tab content 2...</div>
          
        </div>

        <!-- your content goes here -->
      </div><!-- az-content-body -->

      <?php include ('./common_components/footer.php');?>
      </div><!-- az-content -->
     

     

    

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
