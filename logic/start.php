<?php
if (isset($_POST['name'])) {
    session_start();
    $fullname = trim($_POST['name']. PHP_EOL . $_POST['family']);
    if (empty($fullname)) {
        header("location: ../signup.php");
        exit();
    } else {
        $_SESSION['name'] = $fullname;
    }
    $_SESSION['score'] = 0;
    $_SESSION['page'] = 1;
    header('Location: switcher.php');
    exit();
}else {
    header("location: ../signup.php");
    exit();
}