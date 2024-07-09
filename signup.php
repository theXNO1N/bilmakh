<?php
session_start();
$message = $_SESSION['message'] ?? '';
$hidden = isset($_SESSION['message']) ? '' : 'd-none';
if (isset($_SESSION['message'])) {
    unset($_SESSION['message']);
}
$title ='شروع';
$content = <<<CONTENT
<section id="main" class="vh-100 d-flex flex-column align-items-center justify-content-center">
    <div class="alert alert-danger $hidden" role="alert">$message</div>
<form dir="rtl" class="bg-body-tertiary bg-opacity-50 p-5 rounded-5 d-flex flex-column gap-2 justify-content-center align-items-center" action="logic/start.php" method="post">
    <img class="mb-4 mx-auto" src="assets/img/logo.png" alt="" width="72">
    <div class="form-floating">
      <input name="name" type="text" minlength="3" pattern="[آ-ی ]+" class="form-control" id="text" placeholder="فارسی بنویس" required>
      <label for="floatingInput">اسم شما؟</label>
    </div>
    <div class="form-floating">
      <input name="family" type="text" minlength="3" pattern="[آ-ی ]+" class="form-control" id="text" placeholder="فارسی بنویس" required>
      <label for="floatingInput">فامیل شما؟</label>
    </div>
    <br>
    <button class="btn btn-primary w-100 py-2" type="submit">برو بریم</button>
</form>
</section>
CONTENT;
include_once 'layouts/master.php';
?>
