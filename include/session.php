<?php
    include('config.php');
    session_start();
    $user_check=$_SESSION['login_user'];
    $ses_sql = mysqli_query($db,"select * from users where email = '$user_check' ");
    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    
    $teacher_id = $row['id'];
    $fname=$row['fname'];
    $lname=$row['lname'];
    $email=$row['email'];
    $teacherssubjects=$row['subjects'];
    $teacherssections=$row['sections'];
    $password=$row['password'];
    $flag=$row['flag'];
    
    if(!isset($_SESSION['login_user'])){
       header("location: ../index.php");
       die();
    }

    function Message(){
        if (isset($_SESSION["ErrorMessage"])) {
            $Output="<div class=\"alert alert-danger\">";
            $Output.=htmlentities($_SESSION["ErrorMessage"]);
            $Output.="</div>";
            $_SESSION["ErrorMessage"]=null;
            return $Output;

        }
    }

    function SuccessMessage(){
        if (isset($_SESSION["SuccessMessage"])) {
            $Output="<div class=\"alert alert-success\">";
            $Output.=htmlentities($_SESSION["SuccessMessage"]);
            $Output.="</div>";
            $_SESSION["SuccessMessage"]=null;
            return $Output;

        }
    }
   function AlertMessage(){
        if (isset($_SESSION["AlertMessage"])) {
            $Output="<div class=\"alert alert-warning\">";
            $Output.=htmlentities($_SESSION["AlertMessage"]);
            $Output.="</div>";
            $_SESSION["AlertMessage"]=null;
            return $Output;

        }
    }
    if ($flag=="0"){
 $_SESSION['AlertMessage']="Activate Your Account! Contact Admin";}

 ?>
