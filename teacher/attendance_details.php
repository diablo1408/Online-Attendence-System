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

    <title>MYattend.-Schedule classes</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">
    <link rel="stylesheet" href="../css/customcss.css">

  </head>
  <body class="az-body az-light">

    <?php include ('../common_components/side_nav_bar.php');?>
    
    <div class="az-content az-content-dashboard-six"> 
    <?php include('../common_components/header.php');?>


      <div class="az-content-body az-content-body-dashboard-six">
       <!--  <h2 class="az-content-title tx-24 mg-b-5">Hi, welcome back!</h2>
        <p class="mg-b-20 mg-lg-b-30"></p> -->
       
            <!-- <div class="container "> -->
              <!-- <div class="az-content-body"> -->
               
      
      
                <!-- <hr class="mg-y-30 mg-lg-y-50"> -->
      
                  <div class="az-content-label  pd-10 mg-5" style="font-size:large;" align="center">
                   Attendance Details
                  </div>
                
                <form id="form1" method="post" action="attendence_form.php"></form>
                <div class="pd-30 pd-sm-20 bg-gray-200 bd-2  ">
                  <div class="row row-xs align-items-center mg-b-20">
                    <div class="col-md-4">
                      <label class="form-label mg-b-0 font-weight-bold"  style="font-size:medium;">Academic Year</label>
                    </div><!-- col -->
                    <div class="col-md-8 mg-t-5 mg-md-t-0">
                      <input form="form1" type="text" class="form-control" placeholder="Enter Academic Year" value="<?php echo date('Y');?>" disabled>
                    </div><!-- col -->
                  </div><!-- row -->
      
      
                  <div class="row row-xs align-items-center mg-b-20">
                    <div class="col-md-4">
                      <label class="form-label mg-b-0 font-weight-bold"  style="font-size:medium;">Stream</label>
                    </div><!-- col -->
                    <div class="col-md-8 mg-t-5 mg-md-t-0">
                      <select name="stream" form="form1" class="form-control">
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
      
              
          
              <div class="row row-xs align-items-center mg-b-20">
                    <div class="col-md-4">
                      <label class="form-label mg-b-0 font-weight-bold"  style="font-size:medium;">Section</label>
                    </div><!-- col -->
                    <div class="col-md-8 mg-t-5 mg-md-t-0">
                      <select name="section" form="form1" class="form-control">
                        <option value="0" selected>Select</option>
                        <?php 
                        $q="SELECT sections FROM users WHERE id='$teacher_id'";
                        $e=mysqli_query($db,$q);
                        $r=mysqli_fetch_array($e);
                        $sec=explode(",",$r['sections']);
                        for($i=0;$i<sizeof($sec);$i++){
                        ?>
                        <option value="<?php echo $sec[$i];?>"><?php echo $sec[$i];?></option>
                      <?php }?>
                      </select>
                    </div><!-- col -->
                  </div><!-- row -->

                  <div class="row row-xs align-items-center mg-b-20">
                    <div class="col-md-4">
                      <label class="form-label mg-b-0 font-weight-bold"  style="font-size:medium;">Type</label>
                    </div><!-- col -->
                    <div class="col-md-8 mg-t-5 mg-md-t-0">
                      <select name="type" form="form1" class="form-control">
                        <option value="0" selected>Select</option>
                        <option value="1">Theory</option>
                        <option value="2">Practical</option>
                      </select>
                    </div><!-- col -->
                  </div><!-- row -->

                  <div class="row row-xs align-items-center mg-b-20">
                    <div class="col-md-4">
                      <label class="form-label mg-b-0 font-weight-bold"  style="font-size:medium;">Section For Practical</label>
                    </div><!-- col -->
                    <div class="col-md-8 mg-t-5 mg-md-t-0">
                      <select name="half" form="form1" class="form-control">
                        <option selected>If Practical Choosen</option>
                        <option value="1">A</option>
                        <option value="2">B</option>
                      </select>
                    </div><!-- col -->
                  </div><!-- row -->

                  <div class="row row-xs align-items-center mg-b-20">
                    <div class="col-md-4">
                      <label class="form-label mg-b-0 font-weight-bold"  style="font-size:medium;">Subject</label>
                    </div><!-- col -->
                    <div class="col-md-8 mg-t-5 mg-md-t-0">
                      <select name="subject" form="form1" class="form-control">
                        <option value="0" selected>Select</option>
                        <?php 
                        $q="SELECT subjects FROM users WHERE id='$teacher_id'";
                        $e=mysqli_query($db,$q);
                        $r=mysqli_fetch_array($e);
                        $sub=explode(",",$r['subjects']);
                        for($i=0;$i<sizeof($sub);$i++){
                        ?>
                        <option value="<?php echo $sub[$i];?>"><?php echo $sub[$i];?></option>
                      <?php }?>
                      </select>
                    </div><!-- col -->
                  </div><!-- row -->
               
                  <button form="form1" class="btn btn-az-primary pd-x-30 mg-r-5">Save</button>
                  <button class="btn btn-dark pd-x-30">Cancel</button>
                </div>

        <!-- your content goes here -->
      </div><!-- az-content-body -->

      
   
    <?php include ('../common_components/footer.php') ;?>
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
