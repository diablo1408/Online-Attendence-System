<?php
include('../include/session.php');
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

    <title>Edit Information</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="../lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">
    
    <link href="../lib/line-awesome/css/line-awesome.css" rel="stylesheet">
  


    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

  </head>
  <body class="az-body az-light">
    <?php include ('../common_components/side_nav_bar.php');?>  

    <div class="az-content az-content-dashboard-six">
      <?php include('../common_components/header.php');?>
    <form action="edit_profile_data.php" method="post"  id="profile" ></form>

      <div class="az-content-body az-content-body-dashboard-six">
        <p class="mg-b-20 mg-lg-b-30"></p> 
        <div class="az-content-body">
          <h2 class="az-content-title">EDIT DATA:</h2>
          <div id="wizard1">
            <h3>Personal Information</h3>
            <section>
              <div>
                <div class="row row-xs align-items-center mg-b-10">
                  <div class="col-md-1">
                    <label class="form-control-label">Firstname:</label>
                  </div><!-- col -->
                  <div class="col-md-4 mg-t-5 mg-md-t-0">
                    <input id="firstname" class="form-control" form="profile" name="fname" value="<?php echo ucfirst($fname);?>" placeholder="Enter firstname" type="text">
                  </div><!-- col -->
                </div><!-- row -->
                <div class="row row-xs align-items-center mg-b-10">
                  <div class="col-md-1">
                    <label class="form-control-label">Lastname:</label>
                  </div><!-- col -->
                  <div class="col-md-4 mg-t-5 mg-md-t-0">
                    <input id="lastname" class="form-control" form="profile" name="lname" value="<?php echo ucfirst($lname);?>" placeholder="Enter lastname" type="text">
                  </div><!-- col -->
                </div><!-- row -->
              </div>
            </section>
            <section>
              <div>
                <div class="row row-xs align-items-center mg-b-10">
                  <div class="col-md-1">
                    <label class="form-control-label">Email:</label>
                  </div><!-- col -->
                  <div class="col-md-4 mg-t-5 mg-md-t-0">
                    <input id="email" class="form-control" form="profile" name="email" value="<?php echo $email;?>" placeholder="Enter email address" type="text" required>
                  </div><!-- col -->
                </div><!-- row -->
              </div>
            </section>
            <h3>Subject Details</h3>
            <section>
              <div>
                <div class="row row-xs  align-items-center mg-b-10">
                  <div class="col-md-5">
                    <label class="form-label mg-b-0">Subjects: (Hold CTRL and Select)</label>
                   
                     
                      <select form="profile" class="form-control select2-no-search" multiple="multiple" name="subject[]">
                        <?php 
                  $q="SELECT short_name FROM subject";
                  $e=mysqli_query($db,$q);
                  while ($r=mysqli_fetch_array($e)) {
                  ?>
                        <option value="<?php echo $r['short_name'];?>"><?php echo $r['short_name'];?></option>
                      <?php }?>
                      </select>
                    
                  </div><!-- col -->
                </div><!-- row -->
                
    
                <div class="row row-xs align-items-center">
                  <div class="col-md-1">
                    <label class="form-label mg-b-0">Sections:</label>
                  </div><!-- col -->
                </div><!-- row -->
                <div>
                  <?php 
                  $q="SELECT section FROM section";
                  $e=mysqli_query($db,$q);
                  while ($r=mysqli_fetch_array($e)) {
                
                  ?>
                  <div class="col-lg-3 mg-l-50">
                    <label class="ckbox">
                      <input form="profile" type="checkbox" name="section[]" value="<?php echo $r['section'];?>" ><span><?php echo $r['section'];?></span>
                    </label>
                  </div>
                <?php }?>


                </div>
              </div>
            </section>
          </div>
          <hr class="mg-y-30 mg-lg-y-50 bd-transparent">     
          <button class="btn btn-success" name="submit" type="submit" form="profile">Submit</button>     
        </div>
      </div>
      <?php include ('../common_components/footer.php');?>
    </div>

   
    

    <script src="../lib/jquery/jquery.min.js"></script>
   
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
  
    <script src="../lib/jquery-steps/jquery.steps.min.js"></script>
    <script src="../lib/parsleyjs/parsley.min.js"></script>
    <script src="../lib/select2/js/select2.min.js"></script>
  


    <script src="../js/azia.js"></script>
    

  </body>
</html>
