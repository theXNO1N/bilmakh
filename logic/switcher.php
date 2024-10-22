<?php
session_start();
if (isset($_POST['score'])){
    $_SESSION['score'] += $_POST['score'];
    $_SESSION['page'] += 1;
}
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
        require_once '../database/db.php';
        $stmt = $conn->prepare("INSERT INTO users (name, score) VALUES (:name, :score)");
        $stmt->bindParam(':name', $_SESSION['name']);
        $stmt->bindParam(':score', $_SESSION['score']);
        $stmt->execute();
        $_SESSION['page'] += 1;
    case 12:
        header('Location: ../end.php');
        exit();
    default:
        header('Location: ../index.php');
        exit();
}
