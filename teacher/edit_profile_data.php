<?php include('../include/session.php'); 

$f_name=mysqli_real_escape_string($db,$_POST['fname']);
$l_name=mysqli_real_escape_string($db,$_POST['lname']);
$e_mail=mysqli_real_escape_string($db,$_POST['email']);
$subjects= implode(",",$_POST['subject']);
$sections= implode(",",$_POST['section']);
$id=$teacher_id;
$q="UPDATE users SET fname='$f_name',lname='$l_name',email='$e_mail',subjects='$subjects',sections='$sections' WHERE id=$id";
$e=mysqli_query($db,$q);
if ($e) {
    $_SESSION['SuccessMessage']="Profile Updated!!";
header("Location: dashboard.php");
}
else{
    $_SESSION['ErrorMessage']="Failed to Perform";
    header("Location: dashboard.php");
}

?>
