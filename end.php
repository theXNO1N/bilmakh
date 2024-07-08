<?php
session_start();
$name = $_SESSION['name'];
$score = $_SESSION['score'];
if (isset($_SESSION['page'])) {
    if ($_SESSION['page'] != 11) {
        header('Location: ../logic/switcher.php');
    }
}else {
    header('Location: ../index.php');
}
$title ='پایان تست';
$content = <<<CONTENT
<section class="bg-body-tertiary vh-100 d-flex align-items-center justify-content-center">
<div>
    <h5>نام: <span>$name</span></h5>
    <h5>امتیاز: <span>$score</span></h5>
    <form action="logic/restart.php" method="post">
        <button class="btn btn-danger" type="submit">شروع دوباره</button>
    </form>
</div>
</section>
CONTENT;
include_once 'layouts/master.php';
?>
