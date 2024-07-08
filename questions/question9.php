<?php
session_start();
$name = $_SESSION['name'];
$score = $_SESSION['score'];
if (isset($_POST['score'])) {
    $_SESSION['score'] += $_POST['score'];
    $_SESSION['page'] = 9;
}else {
    header('Location: ../logic/switcher.php');
}
$num1 = rand(0,1);
$num2 = rand(0,1);
$title ='سوال نه';
$content = <<<CONTENT
<section class="bg-body-tertiary vh-100 d-flex align-items-center justify-content-center">
<form action="question10.php" method="POST" dir="rtl">
<div>
    <h5>نام: <span>$name</span></h5>
    <h5>امتیاز: <span>$score</span></h5>
    <h3>چه چیزی شما را در زندگی آرام می کند؟</h3>
</div>
<select required name="score" class="form-select" size="2">
  <option value="$num1" >من از طبیعت و فعالیت های بیرونی آرام می شوم.</option>
  <option value="$num2" >من از خواندن کتاب یا گوش دادن به موسیقی آرام می شوم.</option>
</select>
<br>
    <button class="btn btn-primary w-100 py-2 w-25" type="submit">سوال بعدی</button>
</form>
</section>
CONTENT;
include_once '../layouts/master.php';
?>
