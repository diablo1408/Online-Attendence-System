<?php include('../include/session.php'); 

$stream=mysqli_real_escape_string($db,$_POST['stream']);
$section=mysqli_real_escape_string($db,$_POST['section']);
$type=mysqli_real_escape_string($db,$_POST['type']);
$subject=mysqli_real_escape_string($db,$_POST['subject']);
$query="SELECT * FROM students WHERE stream='$stream' AND section='$section'";
$execute=mysqli_query($db,$query);
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

    <div class="az-iconbar">
      <a href="dashboard.php" class="az-iconbar-logo"><i class="typcn typcn-chart-bar-outline"></i></a>
      <nav class="nav">
        
        <a href="#asideDashboard" class="nav-link "><i class="typcn typcn-device-laptop"></i></a>
       
        <a href="#asideAppsPages" class="nav-link active"><i class="typcn typcn-folder-add"></i></a>
        <a href="#asideCharts" class="nav-link"><i class="typcn typcn-chart-line-outline"></i></a>
        
        <a href="#asideTables" class="nav-link"><i class="typcn typcn-th-large-outline"></i></a>
      </nav>
     
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
            <a href="attendence_details.php" class="nav-link">Add Attendence</a>
         
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
      <form method="post" action="add_attendence.php" id="form1"></form>
        <input type="text" form="form1" value="<?php echo $stream;?>" name="stream" hidden>
        <input type="text" form="form1" value="<?php echo $section;?>" name="section" hidden>
        <input type="text" form="form1" value="<?php echo $type;?>" name="type" hidden>
        <input type="text" form="form1" value="<?php echo $subject;?>" name="subject" hidden>
      

      <div class="az-content-body az-content-body-dashboard-six">
       <!--  <h2 class="az-content-title tx-24 mg-b-5">Hi, welcome back!</h2>
        <p class="mg-b-20 mg-lg-b-30">Your finance performance and monitoring dashboard template.</p> -->
        <p class="center-a"><strong>ATTENDENCE SHEET</strong></p>
           <div class=" card card-body pd-10 mg-20 ">
           
           <p  class="pdl-10"><strong>Faculty:</strong> <?php echo ucfirst($fname);?> </p>
           <p class="pdl-10"><strong>Subject:</strong><?php echo $subject;?> </p>
           <p class="pdl-10"><strong>Date:</strong> <?php echo date('d-m-y');?></p>
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
            while ($DataRows=mysqli_fetch_array($execute)) {
              $id=$DataRows['id'];
              $name=$DataRows['name'];
              $enr=$DataRows['enrollment'];
           
            ?>
             <tr>
               <td scope="row"><?php echo $enr;?></td>
               <td><?php echo $name;?></td>
              
               <td>	
                  <label class="ckbox">
                      <input form="form1" name="student[<?php echo $enr; ?>]" value='1' type="checkbox"><span></span>
                  </label>
                 
                 
                </td>
             </tr>

             <?php  }?>
           </tbody>
         </table>
        
       </div><!-- table-responsive -->
      <button form="form1" name="submit" class="button-a btn btn-success">Submit</button>
     
      <!-- <a href="#modaldemo8" class="modal-effect btn btn-dark btn-block" data-toggle="modal" data-effect="effect-fall">Fall</a> -->

        <!-- your content goes here -->
      </div><!-- az-content-body -->

     
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
        // showing modal with effect
        $('.modal-effect').on('click', function(e){
          e.preventDefault();
          var effect = $(this).attr('data-effect');
          $('#modaldemo8').addClass(effect);
        });

        // hide modal with effect
        $('#modaldemo8').on('hidden.bs.modal', function (e) {
          $(this).removeClass (function (index, className) {
              return (className.match (/(^|\s)effect-\S+/g) || []).join(' ');
          });
        });



      });
      
     
    
    </script>
  </body>
</html>
