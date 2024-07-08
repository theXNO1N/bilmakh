<?php
session_start();
$name = $_SESSION['name'];
$score = $_SESSION['score'];
if (isset($_POST['score'])) {
    $_SESSION['score'] += $_POST['score'];
    $_SESSION['page'] = 8;
}else {
    header('Location: ../logic/switcher.php');
}
$num1 = rand(0,1);
$num2 = rand(0,1);
$title ='سوال هشت';
$content = <<<CONTENT
<section class="bg-body-tertiary vh-100 d-flex align-items-center justify-content-center">
<form action="question9.php" method="POST" dir="rtl">
<div>
    <h5>نام: <span>$name</span></h5>
    <h5>امتیاز: <span>$score</span></h5>
    <h3>چه چیزی شما را در زندگی تحریک می کند؟</h3>
</div>
<select required name="score" class="form-select" size="2">
  <option value="$num1" >من از چالش ها و فرصت های جدید تحریک می شوم.</option>
  <option value="$num2" >من از ایده های جدید و خلاقانه تحریک می شوم.</option>
</select>
<br>
    <button class="btn btn-primary w-100 py-2 w-25" type="submit">سوال بعدی</button>
</form>
</section>
CONTENT;
include_once '../layouts/master.php';
?>