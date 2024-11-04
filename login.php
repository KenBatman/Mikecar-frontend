<?php
include 'db_connect.php';  // Kết nối tới cơ sở dữ liệu

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM Users WHERE Email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['PasswordHash'])) {
        $_SESSION['user_id'] = $user['Id'];
        $_SESSION['fullname'] = $user['FullName'];
        echo "Đăng nhập thành công! Xin chào, " . $user['FullName'];
    } else {
        echo "Email hoặc mật khẩu không chính xác!";
    }
}
?>
