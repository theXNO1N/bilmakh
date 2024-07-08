<?php
session_start();
$name = $_SESSION['name'];
$score = $_SESSION['score'];
if (isset($_SESSION['page'])) {
    if ($_SESSION['page'] != 1) {
        header('Location: ../logic/switcher.php');
    }
}else {
    header('Location: ../index.php');
}
$num1 = rand(0,1);
$num2 = rand(0,1);
$title ='سوال یک';
$content = <<<CONTENT
<section class="bg-body-tertiary vh-100 d-flex align-items-center justify-content-center">
<form action="../logic/switcher.php" method="POST" dir="rtl">
<div>
    <h5>نام: <span>$name</span></h5>
    <h5>امتیاز: <span>$score</span></h5>
    <h3>زمانی که با دوستان خود هستید، معمولاً چه نقشی را بازی می کنید؟</h3>
</div>
<select required name="score" class="form-select" size="2">
  <option value="$num1" >من معمولاً رهبر گروه هستم. </option>
  <option value="$num2" > من معمولاً نقش پشتیبان را بازی می کنم و به دیگران کمک می کنم</option>
</select>
<br>
    <button class="btn btn-primary w-100 py-2 w-25" type="submit">سوال بعدی</button>
</form>
</section>
CONTENT;
include_once '../layouts/master.php';
?>
