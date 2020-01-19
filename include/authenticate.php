<?php
    include("config.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $email=mysqli_real_escape_string($db,$_POST['email']);
        $password=mysqli_real_escape_string($db,$_POST['password']);
        $pass_hash=md5($password);
        $sql= "SELECT * FROM users WHERE email='$email' and password='$pass_hash'";
        $result=mysqli_query($db,$sql);
        $count=mysqli_num_rows($result);

        if($count==1)
        {      // session_register("myusernane");
            $_SESSION['login_user']=$email;
            header('location: ../teacher/dashboard.php');
        }
        else{
            $_SESSION["ErrorMessage"]="Login Username and password is Invalid";
            header('location: ../index.php');
        }
    }
    ?>
