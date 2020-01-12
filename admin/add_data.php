<?php
include('../include/session.php');
$stream=mysqli_real_escape_string($db,$_POST['stream']);
$year=mysqli_real_escape_string($db,$_POST['year']);
$section=mysqli_real_escape_string($db,$_POST['section']);

if (isset($_POST['submit'])) {
	
	$student_name=$_POST['student_name'];
	$student_enr=$_POST['student_enr'];

	foreach ($student_name as $i => $st_name) {
        $stu_name = mysqli_real_escape_string($db,$st_name);
        $enr = mysqli_real_escape_string($db,$student_enr[$i]);

            $sql = "INSERT INTO students (enrollment, name, year, stream, section) 
            VALUES ('$enr', '$stu_name', '$year', '$stream', '$section')";
            $insert = mysqli_multi_query($db, $sql);
            if ($insert) {
            	header("Location: dashboard_admin.php");
            }
    }

}


?>