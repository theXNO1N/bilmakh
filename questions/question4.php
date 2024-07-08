<?php
session_start();
$name = $_SESSION['name'];
$score = $_SESSION['score'];
if (isset($_SESSION['page'])) {
    if ($_SESSION['page'] != 4) {
        header('Location: ../logic/switcher.php');
    }
}else {
    header('Location: ../index.php');
}
$num1 = rand(0,1);
$num2 = rand(0,1);
$title ='سوال چهار';
$content = <<<CONTENT
<section class="bg-body-tertiary vh-100 d-flex align-items-center justify-content-center">
<form action="../logic/switcher.php" method="POST" dir="rtl">
<div>
    <h5>نام: <span>$name</span></h5>
    <h5>امتیاز: <span>$score</span></h5>
    <h3>چگونه با استرس مواجه می شوید؟</h3>
</div>
<select required name="score" class="form-select" size="2">
  <option value="$num1" >من سعی می کنم با ورزش و فعالیت های بدنی استرس را کاهش دهم.</option>
  <option value="$num2" >من سعی می کنم با مطالعه، موسیقی گوش دادن یا هنر استرس را کاهش دهم.</option>
</select>
<br>
    <button class="btn btn-primary w-100 py-2 w-25" type="submit">سوال بعدی</button>
</form>
</section>
CONTENT;
include_once '../layouts/master.php';
?>
