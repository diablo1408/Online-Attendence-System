<?php include('../include/session.php'); 

$f_name=mysqli_real_escape_string($db,$_POST['fname']);
$l_name=mysqli_real_escape_string($db,$_POST['lname']);
$subjects= implode(",",$_POST['subject']);
$sections= implode(",",$_POST['section']);
$id=$teacher_id;
if (empty($f_name)) {
	$_SESSION['ErrorMessage']="First Name Required";
	header("Location:edit_profile.php");
	exit;
}
if (empty($l_name)) {
	$_SESSION['ErrorMessage']="Last Name Required";
	header("Location:edit_profile.php");
	exit;
}
if (($subjects!=$teacherssubjects)||($sections!=$teacherssections)) {
$q="UPDATE users SET fname='$f_name',lname='$l_name',subjects='$subjects',sections='$sections' WHERE id=$id";
$e=mysqli_query($db,$q);
if ($e) {
    $_SESSION['SuccessMessage']="Profile Updated!!";
    if ($flag<2) {
    $qu="UPDATE users SET flag=0 WHERE id=$id";
    mysqli_query($db,$qu);
	}
   header("Location: dashboard.php");
}
else{
    $_SESSION['ErrorMessage']="Failed to Perform";
    header("Location: dashboard.php");
}
}
else{
$q="UPDATE users SET fname='$f_name',lname='$l_name' WHERE id=$id";
$e=mysqli_query($db,$q);
if ($e) {
    $_SESSION['SuccessMessage']="Profile Updated!!";
   header("Location: dashboard.php");
}
else{
    $_SESSION['ErrorMessage']="Failed to Perform";
    header("Location: dashboard.php");
}

}

?>
