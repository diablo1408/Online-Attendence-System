<?php
include('../include/session.php');
if (isset($_POST['submit'])) {
    $f_name = mysqli_real_escape_string($db, $_POST['fname']);
    $l_name = mysqli_real_escape_string($db, $_POST['lname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $type = mysqli_real_escape_string($db, $_POST['acctype']);
    $pass_hash=md5($password);

    $sql = "INSERT INTO users (fname, lname, email, password, flag) 
            VALUES ('$f_name', '$l_name', '$email', '$pass_hash', '$type')";
    $insert = mysqli_multi_query($db, $sql);
    if ($insert) {
        $_SESSION['SuccessMessage'] = "User Added!!";
        header("Location: ../teacher/dashboard.php");
    } else {
        $_SESSION['ErrorMessage'] = "Failed to Perform";
        header("Location: ../teacher/dashboard.php");
    }


}
else{
    $_SESSION['ErrorMessage'] = "Failed to Perform!!";
    header("Location: ../teacher/dashboard.php");
}


?>
