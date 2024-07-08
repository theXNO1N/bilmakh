<?php
if (isset($_POST['name'])) {
    session_start();
    $_SESSION['name'] = $_POST['name'];
}else {
    header("location: signup.php");
}