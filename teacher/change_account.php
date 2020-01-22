<?php include('../include/session.php'); 
if (isset($_POST['submit'])) {
$old_pass=mysqli_real_escape_string($db,$_POST['old']);
$new_pass=mysqli_real_escape_string($db,$_POST['new']);
$id=$teacher_id;
if (empty($old_pass)) {
	$_SESSION['ErrorMessage']="Old Password Required";
	header("Location:account-setting.php");
	exit;
}
if (empty($new_pass)) {
	$_SESSION['ErrorMessage']="New Password Required";
	header("Location:account-setting.php");
	exit;
}

$old_pass=md5($old_pass);
$new_pass=md5($new_pass);
if ($password==$old_pass) {
$q="UPDATE users SET password='$new_pass' WHERE id=$id";
$e=mysqli_query($db,$q);
if ($e) {
    $_SESSION['SuccessMessage']="Password Updated!!";
   header("Location: dashboard.php");
}
else{
    $_SESSION['ErrorMessage']="Failed to Perform";
    header("Location: dashboard.php");
}
}
else {
	$_SESSION['ErrorMessage']="Incorrect Old Password";
	header("Location:account-setting.php");
}
}

if (isset($_POST['cancel'])) {
	header("Location:dashboard.php");
}

?>
