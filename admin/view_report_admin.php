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
    <link href="../lib/line-awesome/css/line-awesome.css" rel="stylesheet">



    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">
    <link rel="stylesheet" href="../css/customcss.css">

  </head>
  <body class="az-body az-light">
   
     <?php include('../common_components/side_nav_bar.php');?>
    <div class="az-content az-content-dashboard-six">
      <?php include('../common_components/header.php');?>
     

      <div class="az-content-body az-content-body-dashboard-six">
        <p class="mg-b-20 mg-lg-b-30"></p> 
        <div class="az-content-body">
         
          <div class="az-content-label mg-b-10" style="font-size: large;" align="center">Attendence Report</div>
          <div class="card card-body tx-dark tx-medium ">
            <div class="row row-xs align-items-center mg-b-10">
              <div class="col-md-1" >
               <label class="form-label mg-b-0 f" style="font-size: medium;">Rollno:</label>
              </div><!-- col -->
             <div class="col-md-4 mg-t-5 mg-md-t-0">
               <input type="number" class="form-control" placeholder="Enter RollNo">
             </div><!-- col -->
            </div><!-- row -->
            <div class="row row-xs align-items-center mg-b-10">
              <div class="col-md-1">
                <label class="form-label mg-b-0" style="font-size: medium;">Stream:</label>
              </div><!-- col -->
              <div class="col-md-4 mg-t-5 mg-md-t-0">
                <input type="text" class="form-control" placeholder="Enter Stream">
              </div><!-- col -->
            </div><!-- row -->
            <div class="row row-xs align-items-center mg-b-10">
              <div class="col-md-1" >
               <label class="form-label mg-b-0" style="font-size: medium;">Section:</label>
              </div><!-- col -->
             <div class="col-md-4 mg-t-5 mg-md-t-0">
               <input type="text" class="form-control" placeholder="Enter Section">
             </div><!-- col -->
            </div><!-- row -->
            <div class="row row-xs align-items-center mg-b-10">
              <div class="col-md-1">
                <label class="form-label mg-b-0" style="font-size: medium;">Subject:</label>
              </div><!-- col -->
              <div class="col-md-4 mg-t-5 mg-md-t-0 ">
                <input type="text" class="form-control" placeholder="Enter Subject">
              </div><!-- col -->
            </div><!-- row -->
            <div class="row row-xs align-items-center mg-b-10">
              <div class="col-md-1" >
               <label class="form-label mg-b-0" style="font-size: medium;">From:</label>
              </div><!-- col -->
             <div class="col-md-4 mg-t-5 mg-md-t-0">
               <input type="date" class="form-control" placeholder="Enter Date">
             </div><!-- col -->
             <div class="col-md-1" >
              <label class="form-label mg-b-0 mg-l-20" style="font-size: medium;">To:</label>
             </div><!-- col -->
             <div class="col-md-4 mg-t-5 mg-md-t-0">
              <input type="date" class="form-control" placeholder="Enter Date">
             </div>
            </div><!-- row -->
            <div class="row row-xs align-items-center mg-b-20">
              <!-- col -->
            </div><!-- row -->
           <a href="report_table.php"> <button class="btn btn-az-primary pd-x-30 mg-r-5 " >Load Data</button>  </a>
          </div>
         
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
      $(document).ready(function(){
        'use strict';

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
