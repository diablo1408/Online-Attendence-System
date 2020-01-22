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
    <link href="../lib/spectrum-colorpicker/spectrum.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="../lib/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../lib/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <link href="../lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="../lib/line-awesome/css/line-awesome.css" rel="stylesheet">


    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

</head>
<body class="az-body az-light">
<?php include('../common_components/side_nav_bar.php'); ?>

<div class="az-content az-content-dashboard-six">
    <?php include('../common_components/header.php'); ?>
    <form action="edit_profile_data.php" method="post" id="profile"></form>

    <div class="az-content-body az-content-body-dashboard-six">
        <p class="mg-b-20 mg-lg-b-30"></p>
        <div class="az-content-body">
            <h2 class="az-content-title col">Edit Data: Personal Information</h2>
            <div id="wizard1">
                <section>
                    <div>
                        <div class="row row-xs align-items-center mg-b-10">
                            <div class="col">
                                <div class="col-md-1">
                                    <label class="form-control-label">Firstname:</label>
                                </div><!-- col -->
                                <div class="col-md-12 mg-t-5 mg-md-t-0">
                                    <input id="firstname" class="form-control" form="profile" name="fname"
                                           value="<?php echo ucfirst($fname); ?>" placeholder="Enter firstname"
                                           type="text">
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-md-1">
                                    <label class="form-control-label">Lastname:</label>
                                </div><!-- col -->
                                <div class="col-md-12 mg-t-5 mg-md-t-0">
                                    <input id="lastname" class="form-control" form="profile" name="lname"
                                           value="<?php echo ucfirst($lname); ?>" placeholder="Enter lastname"
                                           type="text">
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-md-1">
                                    <label class="form-control-label">Email:</label>
                                </div><!-- col -->
                                <div class="col-md-12 mg-t-5 mg-md-t-0">
                                    <input id="email" class="form-control" form="profile" name="email"
                                           value="<?php echo $email; ?>" placeholder="Enter email address" type="text"
                                           required disabled="disabled">
                                </div>
                            </div> <!-- col -->
                        </div><!-- row --><!-- row -->
                    </div>
                </section>
                <section class="col">
                    <div class="row row-xs align-items-center">
                        <div class="col-md-1">
                            <label class="form-label mg-b-0">Subjects:</label>
                        </div><!-- col -->
                    </div>

                    <!-- row -->

                    <div class="row">
                        <?php
                        $q = "SELECT short_name FROM subject";
                        $e = mysqli_query($db, $q);
                        $s = explode(",", $teacherssubjects);

                        while ($r = mysqli_fetch_array($e)) {

                            ?>
                            <div class="col-lg-2">
                                <label class="ckbox">
                                    <input form="profile" type="checkbox" name="subject[]"
                                           value="<?php echo $r['short_name']; ?>" <?php if (in_array($r['short_name'], $s)) {
                                        echo 'checked';
                                    } ?> ><span><?php echo $r['short_name']; ?></span>
                                </label>
                            </div><!-- col-3 -->
                            <br>
                        <?php } ?>
                    </div>
                    &nbsp;
                    <div class="row row-xs align-items-center">
                        <div class="col-md-1">
                            <label class="form-label mg-b-0">Sections:</label>
                        </div><!-- col -->

                    </div><!-- row -->

                    <div class="row">
                        <?php
                        $q = "SELECT section FROM section";
                        $e = mysqli_query($db, $q);
                        $s = explode(",", $teacherssections);
                        while ($r = mysqli_fetch_array($e)) {

                            ?>
                            <div class="col-lg-2">
                                <label class="ckbox">
                                    <input type="checkbox" form="profile" name="section[]"
                                           value="<?php echo $r['section']; ?>" <?php if (in_array($r['section'], $s)) {
                                        echo 'checked';
                                    } ?> ><span><?php echo $r['section']; ?></span>
                                </label>
                            </div>
                            <br>
                        <?php } ?>
                    </div><!-- row -->
                    <div class="col">
                        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                            <select class="form-control select2">
                                <option label="Choose one"></option>
                                <option value="Firefox">Firefox</option>
                                <option value="Chrome">Chrome</option>
                                <option value="Safari">Safari</option>
                                <option value="Opera">Opera</option>
                                <option value="Internet Explorer">Internet Explorer</option>
                            </select>
                        </div>
                    </div>
                </section>
            </div>
            <hr class="mg-y-30 mg-lg-y-50 bd-transparent">
            <button class="btn btn-success" name="submit" type="submit" form="profile">Submit</button>
        </div>

        <?php include('../common_components/footer.php'); ?>
    </div>
</div>


<script src="../lib/jquery/jquery.min.js"></script>

<script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../lib/ionicons/ionicons.js"></script>

<script src="../lib/jquery-steps/jquery.steps.min.js"></script>
<script src="../lib/parsleyjs/parsley.min.js"></script>
<script src="../lib/spectrum-colorpicker/spectrum.js"></script>
<script src="../lib/select2/js/select2.min.js"></script>
<script src="../lib/ion-rangeslider/js/ion.rangeSlider.min.js"></script>



<script src="../js/azia.js"></script>
<script>
    $(function(){
        'use strict'

        // Toggle Switches
        $('.az-toggle').on('click', function(){
            $(this).toggleClass('on');
        });

        // Input Masks
        $('#dateMask').mask('99/99/9999');
        $('#phoneMask').mask('(999) 999-9999');
        $('#ssnMask').mask('999-99-9999');

        // Color picker
        $('#colorpicker').spectrum({
            color: '#17A2B8'
        });

        $('#showAlpha').spectrum({
            color: 'rgba(23,162,184,0.5)',
            showAlpha: true
        });

        $('#showPaletteOnly').spectrum({
            showPaletteOnly: true,
            showPalette:true,
            color: '#DC3545',
            palette: [
                ['#1D2939', '#fff', '#0866C6','#23BF08', '#F49917'],
                ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
            ]
        });

        // Datepicker
        $('.fc-datepicker').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true
        });

        $('#datepickerNoOfMonths').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true,
            numberOfMonths: 2
        });

        $(document).ready(function(){
            $('.select2').select2({
                placeholder: 'Choose one'
            });

            $('.select2-no-search').select2({
                minimumResultsForSearch: Infinity,
                placeholder: 'Choose one'
            });
        });

        $('.rangeslider1').ionRangeSlider();

        $('.rangeslider2').ionRangeSlider({
            min: 100,
            max: 1000,
            from: 550
        });

        $('.rangeslider3').ionRangeSlider({
            type: 'double',
            grid: true,
            min: 0,
            max: 1000,
            from: 200,
            to: 800,
            prefix: '$'
        });

        $('.rangeslider4').ionRangeSlider({
            type: 'double',
            grid: true,
            min: -1000,
            max: 1000,
            from: -500,
            to: 500,
            step: 250
        });

    });
</script>

</body>
</html>
