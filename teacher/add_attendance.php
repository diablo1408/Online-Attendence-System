<?php
include("../include/session.php");
if (isset($_POST['submit'])) {
	$stream=mysqli_real_escape_string($db_new,$_POST['stream']);
	$section=mysqli_real_escape_string($db_new,$_POST['section']);
	$type=mysqli_real_escape_string($db_new,$_POST['type']);
	$subject=mysqli_real_escape_string($db_new,$_POST['subject']);
	$date_of_lecture=mysqli_real_escape_string($db_new,$_POST['date_of_lecture_fin']);
	$curdt=date('y-m-d');
	$i=0;

if (isset($_POST['cancel'])){
	header("Location: dashboard.php");
	exit;
}
	
	if ($type=="1") {
		$type="t";
		$table=strtolower($subject)."_".$type;
	}
	elseif($type=="2") {
		$type="p";
		$table=strtolower($subject)."_".$type;
	}
   $student_array = $_POST['student'];
   foreach($student_array as $enr=>$val){
    //$val needs to be 0 or 1.
    global $table;
    $val = ($val == "1")?1:0;
    $query="INSERT INTO ".$table." (enrollment,stream,section,dt,dtoflec,status) VALUES($enr,'$stream','$section','$curdt','$date_of_lecture','$val')";
    $execute=mysqli_query($db_new,$query);
    $i=1;   

  }
   if ($i=1) {
    	$f_name=ucfirst($fname);
    	$q="INSERT INTO logs (dt,dtoflec,section,subject,marked_by,type) VALUES ('$curdt','$date_of_lecture','$section','$subject',$teacher_id,'$type')";
    	$exe=mysqli_query($db,$q);
    	if ($exe) {
    		$_SESSION['SuccessMessage']="Attendence Added!!";
    	header('Location: dashboard.php');
    	}
		else{
			$_SESSION['ErrorMessage']="Failed to Perform";
			header("Location: dashboard.php");
		}
    }
}







?>
