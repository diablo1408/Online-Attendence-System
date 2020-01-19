<?php
    include('../include/session.php');
    $_SESSION['login_user']=null;
    session_destroy();
    
    header('Location: ../index.php');
    
?>
