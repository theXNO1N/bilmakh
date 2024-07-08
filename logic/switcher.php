<?php
session_start();
switch ($_SESSION['page']) {
    case 1:
        header('Location: ../questions/question1.php');
        exit();
    case 2:
        header('Location: ../questions/question2.php');
        exit();
    case 3:
        header('Location: ../questions/question3.php');
        exit();
    case 4:
        header('Location: ../questions/question4.php');
        exit();
    case 5:
        header('Location: ../questions/question5.php');
        exit();
    case 6:
        header('Location: ../questions/question6.php');
        exit();
    case 7:
        header('Location: ../questions/question7.php');
        exit();
    case 8:
        header('Location: ../questions/question8.php');
        exit();
    case 9:
        header('Location: ../questions/question9.php');
        exit();
    case 10:
        header('Location: ../questions/question10.php');
        exit();
    case 11:
        header('Location: ../end.php');
        exit();
    default:
        header('Location: ../index.php');
        exit();
}
