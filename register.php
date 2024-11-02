<?php
include 'db_connect.php'; // Kết nối tới cơ sở dữ liệu

// Xử lý đăng ký
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Mã hóa mật khẩu

    $sql = "INSERT INTO Users (FullName, Email, PasswordHash) VALUES (:fullname, :email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':fullname', $fullname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    try {
        $stmt->execute();
        echo "Đăng ký thành công!";
    } catch (Exception $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}
?>
