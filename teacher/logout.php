<?php
    include('session/session.php');
    $_SESSION['login_user']=null;
    session_destroy();
    
    header('Location: login.php');
    
?>