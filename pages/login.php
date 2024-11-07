
<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Lưu thông tin người dùng vào session
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['logged_in'] = true;

            // Chuyển hướng sau khi đăng nhập thành công
            header("Location: /Mikecar-frontend-main/pages/test.php");
            exit();
        } else {
            echo "Sai mật khẩu.";
        }
    } else {
        echo "Không tìm thấy tài khoản với email này.";
    }
}

$conn->close();
?>

