<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();
    session_unset();
    header('Location: switcher.php');
    exit;
}else {
    header('Location: switcher.php');
    exit;
}
?>

