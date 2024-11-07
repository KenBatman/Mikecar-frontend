<?php
session_start();
session_unset();  // Xóa tất cả các biến session
session_destroy(); // Hủy session
header("Location: /Mikecar-frontend-main/pages/test.php");  // Chuyển hướng về trang chính
exit();
?>
