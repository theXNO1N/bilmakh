<?php
$title ='صفحه اصلی';
$content = <<<CONTENT
<section id="main" class="vh-100 d-flex align-items-center justify-content-center">
    <div id="main-div" class="mx-auto w-50 py-5 text-center border border-2 border-primary rounded-5">
        <img class="d-block mx-auto mb-4 rounded-circle border border-2 border-primary"
             src="https://avatars.githubusercontent.com/u/169103594?s=96&v=4" alt="" width="72">
        <h1 class="display-5 fw-bold text-white">سلام خوش آمدید به این بازی </h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4 text-white-50">این بازی فلان فلان فلان</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="signup.php" type="button" class="btn btn-primary btn-lg px-4 gap-3">شروع بازی</a>
                <a type="button" class="btn btn-outline-secondary btn-lg px-4">بقیه کاربران</a>
            </div>
        </div>
    </div>
</section>
CONTENT;
include_once 'layouts/master.php';
?>
