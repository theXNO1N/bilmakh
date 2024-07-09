<?php
require_once '../database/db.php';
if (isset($_POST['name'])) {
    session_start();
    $fullname = trim($_POST['name']. PHP_EOL . $_POST['family']);
    if (empty($fullname)) {
        $_SESSION['message'] = 'مقادیر نمی تواند خالی باشد';
        header("location: ../signup.php");
        exit();
    } else {
        $stmt = $conn->prepare('SELECT COUNT(*) FROM users WHERE name = :name');
        $stmt->bindParam(':name', $fullname);
        $stmt->execute();
        $rowCount = $stmt->fetchColumn();
        if ($rowCount > 0) {
            $_SESSION['message'] = 'کاربری قبلا با این مشخصات ثبت نام کرده است';
            header("location: ../signup.php");
            exit();
        } else {
            $_SESSION['name'] = $fullname;
        }
    }
    $_SESSION['score'] = 0;
    $_SESSION['page'] = 1;
    header('Location: switcher.php');
    exit();
}else {
    $_SESSION['message'] = 'مقادیر نمی تواند خالی باشد';
    header("location: ../signup.php");
    exit();
}