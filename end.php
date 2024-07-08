<?php
session_start();
$name = $_SESSION['name'];
$score = $_SESSION['score'];
if (isset($_POST['score'])) {
    $_SESSION['score'] += $_POST['score'];
    $_SESSION['page'] = 11;
}else {
    header('Location: ../logic/switcher.php');
}
$title ='پایان تست';
$content = <<<CONTENT
<section class="bg-body-tertiary vh-100 d-flex align-items-center justify-content-center">
<div>
    <h5>نام: <span>$name</span></h5>
    <h5>امتیاز: <span>$score</span></h5>
</div>
</section>
CONTENT;
include_once 'layouts/master.php';
?>
