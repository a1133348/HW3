<?php
session_start();
session_destroy();
echo "您已登出系統 (Session 已清除)。<br/>";
echo "<a href='HWindex.php'>回到首頁</a>";
?>
