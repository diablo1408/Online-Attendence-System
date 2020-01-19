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
<?php include('../common_components/side_nav_bar.php'); ?>

<div class="az-content az-content-dashboard-six">
    <?php include('../common_components/header.php'); ?>
    <form action="dasdsadasd" method="post" id="profile"></form>

    <div class="az-content-body az-content-body-dashboard-six">
        <p class="mg-b-20 mg-lg-b-30"></p>
        <div class="az-content-body">
            <h2 class="az-content-title col">Change Password</h2>
            <div id="wizard1">
                <section>
                    <div>
                        <div class="row row-xs align-items-center mg-b-10">
                            <div class="col-md-4">
                                <div class="col-md-3">
                                    <label class="form-control-label">Old Password</label>
                                </div><!-- col -->
                                <div class="col-md-12 mg-t-5 mg-md-t-0">
                                    <input id="firstname" class="form-control" form="profile" name="fname"
                                           placeholder="Enter Old Password"
                                           type="password">
                                </div>
                            </div><!-- col -->
                        </div>
                        <div class="row row-xs align-items-center mg-b-10">
                            <div class="col-md-4">
                                <div class="col-md-3">
                                    <label class="form-control-label">New Password</label>
                                </div><!-- col -->
                                <div class="col-md-12 mg-t-5 mg-md-t-0">
                                    <input id="firstname" class="form-control" form="profile" name="fname"
                                            placeholder="Enter New Password"
                                           type="password">
                                </div>
                            </div><!-- col -->
                        </div><!-- row --><!-- row -->
                    </div>
                </section>
            </div>
            <div
                    class="col">
                <div
                        class="row">
                    <div class="col-1">
                        <button class="btn btn-outline-dark" name="cancel" type="cancel" form="profile">Cancel</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-success" name="submit" type="submit" form="profile">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('../common_components/footer.php'); ?>
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
