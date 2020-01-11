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
  


    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

  </head>
  <body class="az-body az-light">
    <?php include ('./common_components/side_nav_bar.php');?>  

    <div class="az-content az-content-dashboard-six">
      <?php include('./common_components/header.php');?>
    

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
                    <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                  </div><!-- col -->
                  <div class="col-md-4 mg-t-5 mg-md-t-0">
                    <input id="firstname" class="form-control" name="firstname" placeholder="Enter firstname" type="text" required>
                  </div><!-- col -->
                </div><!-- row -->
                <div class="row row-xs align-items-center mg-b-10">
                  <div class="col-md-1">
                    <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                  </div><!-- col -->
                  <div class="col-md-4 mg-t-5 mg-md-t-0">
                    <input id="lastname" class="form-control" name="lastname" placeholder="Enter lastname" type="text" required>
                  </div><!-- col -->
                </div><!-- row -->
                <div class="row row-xs align-items-center mg-b-10">
                  <div class="col-md-1">
                    <label class="form-control-label">Address: <span class="tx-danger">*</span></label>
                  </div><!-- col -->
                  <div class="col-md-4 mg-t-5 mg-md-t-0">
                    <input id="address" class="form-control" name="address" placeholder="Enter Address" type="text" required>
                  </div><!-- col -->
                </div><!-- row -->
              </div>
            </section>
            <h3>Contact Details</h3>
            <section>
              <div>
                <div class="row row-xs align-items-center mg-b-10">
                  <div class="col-md-1">
                    <label class="form-control-label">Contact No.: <span class="tx-danger">*</span></label>
                  </div><!-- col -->
                  <div class="col-md-4 mg-t-5 mg-md-t-0">
                    <input id="contact" class="form-control" name="contact" placeholder="Enter Contact Number" type="number" required>
                  </div><!-- col -->
                </div><!-- row -->
                <div class="row row-xs align-items-center mg-b-10">
                  <div class="col-md-1">
                    <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                  </div><!-- col -->
                  <div class="col-md-4 mg-t-5 mg-md-t-0">
                    <input id="email" class="form-control" name="email" placeholder="Enter email address" type="email" required>
                  </div><!-- col -->
                </div><!-- row -->
              </div>
            </section>
            <h3>Subject Details</h3>
            <section>
              <div>
                <div class="row row-xs  align-items-center mg-b-10">
                  <div class="col-md">
                    <label class="form-label mg-b-0">Subjects:</label>
                   
                     
                      <select class="form-control select2-no-search" multiple="multiple">
                        <option value="Firefox" selected>Firefox</option>
                        <option value="Chrome">Chrome</option>
                        <option value="Safari">Safari</option>
                        <option value="Opera">Opera</option>
                        <option value="Internet Explorer">Internet Explorer</option>
                      </select>
                    
                  </div><!-- col -->
                </div><!-- row -->
                
    
                <div class="row row-xs align-items-center">
                  <div class="col-md-1">
                    <label class="form-label mg-b-0">Sections:</label>
                  </div><!-- col -->
                </div><!-- row -->
                <div>
                  <div class="col-lg-3 mg-l-50">
                    <label class="ckbox">
                      <input type="checkbox"><span>T1</span>
                    </label>
                  </div>
                  <div class="col-lg-3 mg-l-50">
                    <label class="ckbox">
                      <input type="checkbox"><span>T2</span>
                    </label>
                  </div>
                  <div class="col-lg-3 mg-l-50">
                    <label class="ckbox">
                      <input type="checkbox"><span>T3</span>
                    </label>
                  </div>
                  <div class="col-lg-3 mg-l-50">
                    <label class="ckbox">
                      <input type="checkbox"><span>T4</span>
                    </label>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <hr class="mg-y-30 mg-lg-y-50 bd-transparent">          
        </div>
      </div>
      <?php include ('./common_components/footer.php');?>
    </div>

   
    

    <script src="../lib/jquery/jquery.min.js"></script>
   
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
  
    <script src="../lib/jquery-steps/jquery.steps.min.js"></script>
    <script src="../lib/parsleyjs/parsley.min.js"></script>
    <script src="../lib/select2/js/select2.min.js"></script>
  


    <script src="../js/azia.js"></script>
    <script>
      $(function(){
        'use strict'
        $('#wizard1').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>'
        });
        $('.select2-no-search').select2({
            minimumResultsForSearch: Infinity,
            placeholder: 'Choose one'
          });
        });

     
      //   $('#wizard1').steps({
      //     headerTag: 'h3',
      //     bodyTag: 'section',
      //     autoFocus: true,
      //     titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
      //     onStepChanging: function (event, currentIndex, newIndex) {
      //       if(currentIndex < newIndex) {
      //         // Step 1 form validation
      //         if(currentIndex === 0) {
      //           var fname = $('#firstname').parsley();
      //           var lname = $('#lastname').parsley();
      //           var addr  = $('#address').parsley();

      //           if(fname.isValid() && lname.isValid() && addr.isValid()) {
      //             return true;
      //           } else {
      //             fname.validate();
      //             lname.validate();
      //             addr.validate();
      //           }
      //         }

      //         // Step 2 form validation
      //         if(currentIndex === 1) {
      //           var email = $('#email').parsley();
      //           var contact=$('#contact').parsley();
                
      //           if(email.isValid() && contact.isValid()) {
      //             return true;
      //           } else { email.validate(); 
      //           contact.validate();
      //           }
      //         }
      //       // Always allow step back to the previous step even if the current step is not valid.
      //       } else { return true; }
      //     }
      //   });
      // });
    </script>

  </body>
</html>
