<?php
session_start();

$uName = $_POST['uName'];
$uPwd = $_POST['uPwd'];
$role = $_POST['role'];

$fID='student';  $fPWD='12345678';
$aID='admin';    $aPWD='12345678';
$bID='teacher';  $bPWD='12345678';

$isSuccess = false;

if ($role == 'student' && $uName == $fID && $uPwd == $fPWD) {
    $isSuccess = true;
} elseif ($role == 'manager' && $uName == $aID && $uPwd == $aPWD) {
    $isSuccess = true;
} elseif ($role == 'teacher' && $uName == $bID && $uPwd == $bPWD) {
    $isSuccess = true;
}

if ($isSuccess) {
    $_SESSION['login'] = "OK";
    $_SESSION['role'] = $role;
    setcookie("uName", $uName, time()+3600);

    echo "登入成功！歡迎 " . $uName . " (" . $role . ")<br/>";
    echo "<a href='HWstudent.php'>進入學生專區</a>";
} else {
    echo "帳號、密碼或角色選擇錯誤！<a href='HWindex.php'>回首頁</a>";
}
?>
