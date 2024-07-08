<?php
$title ='شروع';
$content = <<<CONTENT
<section id="start" class="vh-100 d-flex align-items-center justify-content-center">
<form action="start.php" method="POST">
    <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72">
    <div class="form-floating">
      <input name="name" type="text" class="form-control" id="text" placeholder="فارسی بنویس" required>
      <label for="floatingInput">اسمت؟</label>
    </div>
    <br>
    <button class="btn btn-primary w-100 py-2" type="submit">سوال اول</button>
</form>
</section>
CONTENT;
include_once 'layouts/master.php';
?>
