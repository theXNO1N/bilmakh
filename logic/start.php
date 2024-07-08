<?php
if (isset($_POST['name'])) {
    session_start();
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['score'] = 0;
    $_SESSION['page'] = 1;
    header('Location: switcher.php');
    exit();
}else {
    header("location: ../signup.php");
    exit();
}