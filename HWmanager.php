<?php
session_start();
if(isset($_SESSION['login']) && $_SESSION['login'] == "OK" && $_SESSION['role'] == "manager"){
    echo "<h1>管理者後台</h1>";
    echo "UserID (Cookie): " . $_COOKIE['uName'] . "<br/>";
    echo "<a href='HWloginout.php'>登出</a>";
} else {
    echo "權限不足，你不是管理者！<a href='HWindex.php'>回首頁</a>";
}
?>
