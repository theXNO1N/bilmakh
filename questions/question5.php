<?php
session_start();
$name = $_SESSION['name'];
$score = $_SESSION['score'];
if (isset($_SESSION['page'])) {
    if ($_SESSION['page'] != 5) {
        header('Location: ../logic/switcher.php');
    }
}else {
    header('Location: ../index.php');
}
$num = [0,1];
shuffle($num);
$title ='سوال پنج';
$content = <<<CONTENT
<section id="main" class="bg-body-tertiary vh-100 d-flex align-items-center justify-content-center">
<form action="../logic/switcher.php" method="POST" dir="rtl">
<div class="d-flex flex-column align-items-center justify-content-center">
    <img src="../assets/img/questions/question5.jpg" width="300px" class="rounded rounded-5" alt="">
    <h3>چه چیزی شما را در زندگی می ترساند؟</h3>
</div>
<select required name="score" class="form-select" size="2">
  <option value="$num[0]" >من از ناشناخته ها و تغییرات ناگهانی می ترسم.</option>
  <option value="$num[1]" >من از عدم توانایی در رسیدن به اهدافم می ترسم.</option>
</select>
<br>
    <button class="btn btn-primary w-100 py-2 w-25" type="submit">سوال بعدی</button>
</form>
</section>
CONTENT;
include_once '../layouts/master.php';
?>
