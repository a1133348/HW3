<?php
if(isset($_COOKIE['uName'])){
    echo "歡迎回來：" . $_COOKIE['uName'] . "<br/>";
    echo "<a href='HWcookiedel.php'>刪除 COOKIE (登出 ID)</a><hr/>";
}
?>

<h2>使用者登入</h2>
<form action="HWlogincheck.php" method="POST">
    ID: <input type="text" name="uName" required><br/>
    Password: <input type="password" name="uPwd" required><br/>
    Role: 
    <select name="role">
        <option value="student">學生</option>
        <option value="teacher">教師</option>
        <option value="manager">管理者</option>
    </select><br/><br/>
    <input type="submit" value="登入">
</form>
