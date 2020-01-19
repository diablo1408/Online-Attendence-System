<?php
include "../include/session.php";
if (isset($_POST['submit'])){
    $i=0;
    $flag_array=$_POST['flag'];
    foreach($flag_array as $flag => $val){
        if ($val=="1"){
            $q="UPDATE users SET flag=1 WHERE id=$flag";
            $e=mysqli_query($db,$q);

            if ($e){
                $i=1;
            }
            else{
                $_SESSION['ErrorMessage']="Failed to Perform !!";
                header("LOCATION: ../teacher/dashboard.php");
            }
        }
    }
    if ($i=="1"){
        $_SESSION['SuccessMessage']="Account Activated";
        header("LOCATION: ../teacher/dashboard.php");
    }
}

?>
