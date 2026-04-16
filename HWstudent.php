<?php
session_start();
if(isset($_SESSION['login']) && $_SESSION['login'] == "OK"){
    echo "<h1>學生專區</h1>";
    echo "目前的 ID (來自 Cookie): " . ($_COOKIE['uName'] ?? "未設定") . "<br/>";
    echo "您的角色身分 (來自 Session): " . $_SESSION['role'] . "<hr/>";
    echo "<a href='HWindex.php'>回首頁</a> | <a href='HWloginout.php'>登出</a>";
} else {
    echo "非法進入，請先登入！ <a href='HWindex.php'>回首頁</a>";
}
?>
