<?php
require_once 'database/db.php';
$sql = "SELECT * FROM `users` ORDER BY `users`.`score` DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_OBJ);
session_start();
$name = $_SESSION['name']??'';
$echo_users = '';
foreach ($users as $index => $user) {
    if ($user->name == $name) {
        $index += 1;
        $echo_users .= <<<ECHO
        <tr class="table-primary">
            <th scope="row">$index</th>
            <td>(شما)</td>
            <td>$user->score</td>
        </tr>
        
        ECHO;
    }else {
        $index += 1;
        $echo_users .= <<<ECHO
        <tr>
            <th scope="row">$index</th>
            <td>$user->name</td>
            <td>$user->score</td>
        </tr>
        
        ECHO;
    }
}
$title = 'کاربران';
$content = <<<"CONTENT"
<section dir="rtl" id="main" class="vh-100 d-flex flex-column align-items-center justify-content-center">
<div class="table-responsive h-50 rounded-2 border border-2 border-primary">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">نام و نام خانوادگی</th>
          <th scope="col">امتیاز</th>
        </tr>
      </thead>
      <tbody>
        $echo_users
      </tbody>
    </table>
</div>
<a href="index.php" class="btn btn-info mt-3">بازگشت</a>
</section>
CONTENT;
include_once 'layouts/master.php';
?>
