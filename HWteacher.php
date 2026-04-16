<?php
session_start();
if(isset($_SESSION['login']) && $_SESSION['login'] == "OK"){
    if($_SESSION['role'] == "teacher" || $_SESSION['role'] == "manager"){
        echo "<h1>教師專區</h1>";
        echo "教師 ID: " . ($_COOKIE['uName'] ?? "未設定") . "<hr/>";
        echo "<a href='HWindex.php'>回首頁</a> | <a href='HWloginout.php'>登出</a>";
    } else {
        echo "權限不足：您不是教師或管理者！ <a href='HWindex.php'>回首頁</a>";
    }
} else {
    echo "請先登入！ <a href='HWindex.php'>回首頁</a>";
}
?>
