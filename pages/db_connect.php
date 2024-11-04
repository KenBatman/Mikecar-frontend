<?php
$servername = "localhost";
$username = "root";       // Tên người dùng mặc định cho MySQL trên XAMPP là "root"
$password = "";           // Mật khẩu mặc định là rỗng
$dbname = "user_databasse"; // Tên cơ sở dữ liệu mà bạn đã tạo

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Lỗi kết nối: " . $conn->connect_error);
}
?>
