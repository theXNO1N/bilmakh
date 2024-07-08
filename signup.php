<?php
$title ='شروع';
$content = <<<CONTENT
<section id="start" class="vh-100 d-flex align-items-center justify-content-center">
<form action="logic/start.php" method="post">
    <img class="mb-4" src="" alt="" width="72">
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
