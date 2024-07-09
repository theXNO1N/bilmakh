<?php
session_start();
$name = $_SESSION['name'];
$score = $_SESSION['score'];
if (isset($_SESSION['page'])) {
    if ($_SESSION['page'] != 7) {
        header('Location: ../logic/switcher.php');
    }
}else {
    header('Location: ../index.php');
}
$num = [0,1];
shuffle($num);
$title ='سوال هفت';
$content = <<<CONTENT
<section id="main" class="bg-body-tertiary vh-100 d-flex align-items-center justify-content-center">
<form action="../logic/switcher.php" method="POST" dir="rtl">
<div class="d-flex flex-column align-items-center justify-content-center">
    <img src="../assets/img/questions/question7.jpg" width="300px" class="rounded rounded-5" alt="">
    <h3>چه چیزی شما را در زندگی ناراحت می کند؟</h3>
</div>
<select required name="score" class="form-select" size="2">
  <option value="$num[0]" > من از شکست در رسیدن به اهدافم ناراحت می شوم.</option>
  <option value="$num[1]" >من از دیدن دیگران در درد یا رنج ناراحت می شوم.</option>
</select>
<br>
    <button class="btn btn-primary w-100 py-2 w-25" type="submit">سوال بعدی</button>
</form>
</section>
CONTENT;
include_once '../layouts/master.php';
?>
