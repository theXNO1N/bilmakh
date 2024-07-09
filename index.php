<?php
session_start();
if (isset($_SESSION['name'])) {
    $wellcome = 'سلام' . PHP_EOL .$_SESSION['name']. PHP_EOL . 'عزیز';
    if ($_SESSION['page'] == 12) {
        $color_btn = 'btn-info';
        $text_btn = 'مشاهده امتیاز';
        $action = 'end.php';
    }else {
        $color_btn = 'btn-primary';
        $text_btn = 'ادامه تست';
        $action = 'logic/switcher.php';
    }
} else {
    $wellcome = 'سلام خوش آمدید به این تست';
    $color_btn = 'btn-success';
    $text_btn = 'شروع تست';
    $action = 'signup.php';
}
$title = 'صفحه اصلی';
$content = <<<CONTENT
<section dir="rtl" id="main" class="vh-100 d-flex flex-column align-items-center justify-content-center">
    <div id="main-div" class="container bg-body-tertiary bg-opacity-75 w-100 py-5 text-center border border-2 border-primary rounded-5">
        <img class="d-block mx-auto mb-4"
             src="assets/img/logo.png" alt="" width="72">
        <h1 class="display-5 fw-bold text-white">$wellcome</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4 text-white-50">تست MMPI یکی از معروف‌ترین تست‌های شخصیت‌شناسی است. این تست به شما کمک می‌کند تا پروفایل کامل شخصیت خود را همراه با تفسیر دقیق شاخص‌های اعتباری و بالینی دریافت کنید. تعداد سوالات این تست 10 سوال است.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="$action" type="button" class="btn $color_btn btn-lg px-4 gap-3">$text_btn</a>
                <a href="list.php" type="button" class="btn btn-outline-secondary btn-lg px-4">لیست کاربران</a>
            </div>
        </div>
    </div>
</section>
CONTENT;
include_once 'layouts/master.php';
?>
