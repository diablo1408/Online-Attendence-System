<div class="az-iconbar">
    <a href="dashboard.php" class="az-iconbar-logo"><i class="typcn typcn-chart-bar-outline"></i></a>
    <nav class="nav">

        <a href="#asideDashboard " class="nav-link active"><i class="typcn typcn-device-laptop"></i></a>

        <!--        <a href="#asideAppsPages" class="nav-link"><i class="typcn typcn-folder-add"></i></a>-->
        <!--        <a href="#asideCharts" class="nav-link"><i class="typcn typcn-chart-line-outline"></i></a>-->

        <!--        <a href="#asideTables" class="nav-link"><i class="typcn typcn-th-large-outline"></i></a>-->
    </nav>
    <!--  <div class="az-iconbar-bottom">
       <a href="" class="az-iconbar-help"><i class="far fa-question-circle"></i></a>
       <a href="" class="az-img-user online"><img src="https://via.placeholder.com/500x500" alt=""></a>
     </div> --><!-- az-iconbar-bottom -->
</div><!-- az-iconbar -->
<div class="az-iconbar-aside">
    <div class="az-iconbar-header">
        <a href="../teacher/dashboard.php" class="az-logo">ADGITM<span>Atten</span>.</a>
        <a href="../teacher/dashboard.php" class="az-iconbar-toggle-menu">
            <i class="icon ion-md-arrow-back"></i>
            <i class="icon ion-md-close"></i>
        </a>
    </div><!-- az-iconbar-header -->
    <div class="az-iconbar-body">
        <div id="asideDashboard" class="az-iconbar-pane">
            <h6 class="az-iconbar-title">DASHBOARD</h6>
            <small class="az-iconbar-text"></small>
            <?php if ($flag!="0"){?>
            <nav class="nav">
                <h6 class="az-iconbar-title">Teacher</h6>
                <a href="../teacher/attendance_details.php" class="nav-link">Add Attendance</a>
                <?php if ($flag=="2"){ ?>
                <h6 class="az-iconbar-title">Admin</h6>
                <a href="../admin/add_user.php" class="nav-link">Add Account</a>
                <a href="../admin/add_student.php" class="nav-link">Add Student</a>
                <a href="../admin/admin-logs.php" class="nav-link">Attendance Logs</a>
                <?php }?>
                <h6 class="az-iconbar-title">Report</h6>
                <a href="../admin/view_report_admin.php" class="nav-link">Generate Report</a>
                <?php if ($flag=="2"){?>
                <h6 class="az-iconbar-title">Account</h6>
                <a href="../admin/active_account.php" class="nav-link">Activate User</a>
                <?php }?>
            </nav>
            <?php }?>


        </div>

    </div><!-- az-iconbar-body -->
</div><!-- az-iconbar-aside -->
