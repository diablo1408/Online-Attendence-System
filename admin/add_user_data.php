<?php
include('../include/session.php');
$f_name=mysqli_real_escape_string($db,$_POST['fname']);
$l_name=mysqli_real_escape_string($db,$_POST['lname']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$password=mysqli_real_escape_string($db,$_POST['password']);
$type=mysqli_real_escape_string($db,$_POST['acctype']);

if (isset($_POST['submit'])) {
	
	
            $sql = "INSERT INTO users (fname, lname, email, password, role) 
            VALUES ('$f_name', '$l_name', '$email', '$password', '$type')";
            $insert = mysqli_multi_query($db, $sql);
            if ($insert) {
            	header("Location: dashboard_admin.php");
            }
       

}


?>