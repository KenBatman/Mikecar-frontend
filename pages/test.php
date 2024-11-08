<?php
session_start();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MikeCar - Thuê Xe Cao Cấp</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <h3>MikeCar</h3>
        </div>

        <div class="nav-links">
            <a href="#about">Về Chúng Tôi</a>
            <a href="#services">Dịch Vụ</a>
            <a href="#fleet">Đội Xe</a>
            <a href="#contact">Liên Hệ</a>
            <a href="#danhchoban">Dành cho bạn</a>
            <a href="#huongdan">Hướng dẫn thuê xe</a>
        </div>

        <div class="auth-buttons">
            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
                <span>Chào, <?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
                <a href="logout.php" class="btn btn-outline">Đăng Xuất</a>
            <?php else: ?>
                <button class="btn btn-outline" onclick="openModal('signup-modal')">Đăng Ký</button>
                <button class="btn btn-primary" onclick="openModal('login-modal')">Đăng Nhập</button>
            <?php endif; ?>
        </div>
    </nav>
    <section class="hero">
        <h1> MikeCar</h1>
        <p>Trải nghiệm dịch vụ cho thuê xe cao cấp với đội xe đa dạng của chúng tôi</p>

        
        <div class="service-types">
            <div class="service-type active" onclick="selectServiceType(this)">
                Tự Lái
            </div>
            <div class="service-type" onclick="selectServiceType(this)">
                Có Tài Xế
            </div>
            <div class="service-type" onclick="selectServiceType(this)">
                Thuê Dài Hạn
            </div>
        </div>

        <div class="search-form">
            <div class="search-grid">
                <select class="search-input">
                    <option value="">Loại Xe</option>
                    <option value="economy">Tiết Kiệm</option>
                    <option value="luxury">Sang Trọng</option>
                    <option value="suv">SUV</option>
                    <option value="sports">Thể Thao</option>
                </select>
                <input type="date" class="search-input" placeholder="Ngày Nhận Xe">
                <input type="date" class="search-input" placeholder="Ngày Trả Xe">
                <input type="text" class="search-input" placeholder="Địa Điểm">
                <button class="search-button">Tìm Xe Có Sẵn</button>
            </div>
        </div>
        
    </section>

    <section id="about" class="content-section">
        <div class="section-content">
            <h2>Về Chúng Tôi</h2>
            <p>Ở đây chúng tôi có</p>
            <ul>
                <li>Hỗ trợ khách hàng 24/7</li>
                <li>Các lựa chọn thuê xe linh hoạt</li>
                <li>Xe đời mới nhất</li>
                <li>Giá cả cạnh tranh</li>
            </ul>
            <p>Sứ mệnh của chúng tôi là mang lại trải nghiệm thuê xe xuất sắc với sự minh bạch và đáng tin cậy.</p>
        </div>
    </section>

    <section id="services" class="content-section">
        <div class="section-content">
            <h2>Dịch Vụ Của Chúng Tôi</h2>
            <div class="services-grid">
                <div class="service-card">
                    <h3>Dịch Vụ Tự Lái</h3>
                    <p>Tự do khám phá theo cách riêng với những chiếc xe được bảo dưỡng tốt.</p>
                </div>
                <div class="service-card">
                    <h3>Dịch Vụ Có Tài Xế</h3>
                    <p>Tài xế chuyên nghiệp mang lại sự thoải mái và tiện lợi cho bạn.</p>
                </div>
                <div class="service-card">
                    <h3>Thuê Dài Hạn</h3>
                    <p>Kỳ hạn thuê dài với mức giá và quyền lợi đặc biệt.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="fleet" class="content-section">
        <div class="section-content">
            <h2>Đội Xe Của Chúng Tôi</h2>
            <div class="fleet-grid">
                <div class="car-card">
                    <h3>Xe Tiết Kiệm</h3>
                    <p>Tiết kiệm nhiên liệu, lý tưởng cho việc đi lại trong thành phố</p>
                    <span class="price">Từ 50$/ngày</span>
                </div>
                <div class="car-card">
                    <h3>Xe Sang Trọng</h3>
                    <p>Sự thoải mái và phong cách cao cấp</p>
                    <span class="price">Từ 150$/ngày</span>
                </div>
                <div class="car-card">
                    <h3>SUV</h3>
                    <p>Rộng rãi và phù hợp với mọi địa hình</p>
                    <span class="price">Từ 100$/ngày</span>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="content-section">
        <div class="section-content">
            <h2>Liên Hệ</h2>
            <div class="contact-info">
                <div>
                    <h3>Liên Hệ Với Chúng Tôi</h3>
                    <p>Email: info@mikecar.com</p>
                    <p>Điện Thoại: 0987672634</p>
                    <p>Địa Chỉ: 123 Đường Hehe, Thành Phố Auto, AC 12345</p>
                </div>
                <form class="contact-form">
                    <input type="text" placeholder="Tên Của Bạn" required>
                    <input type="email" placeholder="Email Của Bạn" required>
                    <textarea placeholder="Tin Nhắn Của Bạn" required></textarea>
                    <button type="submit" class="btn btn-primary">Gửi Tin Nhắn</button>
                </form>
            </div>
        </div>
    </section>
    <section id="danhchoban" class="content-section">
        <div class="section-content">
            <h2>Xe Dành Cho Bạn</h2>
            <div class="car-recommendations">
                <div class="car-card">
                    <img src="https://th.bing.com/th/id/OIP.rpJwOKkRRRvYrGwdzeRNYQHaE8?rs=1&pid=ImgDetMain" alt="Toyota Veloz Cross 2022">
                    <h3>TOYOTA VELOZ CROSS 2022</h3>
                    <p>Địa điểm: Quận Bình Thạnh, TP. Hồ Chí Minh</p>
                    <span class="price">913K/ngày</span>
                    <span class="discount">Giảm 13%</span>
                    <button class="btn btn-primary">Đặt Xe Nhanh</button>
                </div>
                <div class="car-card">
                    <img src="data:image/jpeg;base64,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" alt="Mitsubishi Xpander 2022">
                    <h3>MITSUBISHI XPANDER 2022</h3>
                    <p>Địa điểm: Quận Bình Thạnh, TP. Hồ Chí Minh</p>
                    <span class="price">865K/ngày</span>
                    <span class="discount">Giảm 14%</span>
                    <button class="btn btn-primary">Đặt Xe Nhanh</button>
                </div>
                <div class="car-card">
                    <img src="https://th.bing.com/th/id/OIP.A5dWtrdMdBMwX50MEahLswHaE8?w=249&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Mitsubishi Xpander 2024">
                    <h3>MITSUBISHI XPANDER 2024</h3>
                    <p>Địa điểm: Quận 1, TP. Hồ Chí Minh</p>
                    <span class="price">856K/ngày</span>
                    <span class="discount">Giảm 14%</span>
                    <button class="btn btn-primary">Đặt Xe Nhanh</button>
                </div>
                <div class="car-card">
                    <img src="https://th.bing.com/th/id/OIP.ecKxYbVYXEL97Suk6t_xCQHaEK?w=309&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Toyota Vios 2020">
                    <h3>TOYOTA VIOS 2020</h3>
                    <p>Địa điểm: Quận Bình Thạnh, TP. Hồ Chí Minh</p>
                    <span class="price">808K/ngày</span>
                    <button class="btn btn-primary">Đặt Xe Nhanh</button>
                </div>
            </div>
        </div>
    </section>
    <section id="huongdan" class="content-section">
        <h2>Hướng Dẫn Thuê Xe</h2>
        <p>Chỉ với 4 bước đơn giản để trải nghiệm thuê xe Mioto một cách nhanh chóng:</p>
        <ol>
            <li><strong>Đặt xe trên web Mikecar</strong></li>
            <li><strong>Nhận xe</strong></li>
            <li><strong>Bắt đầu hành trình</strong></li>
            <li><strong>Trả xe & kết thúc chuyến đi</strong></li>
        </ol>
    </section>
 <!-- Form Đăng Ký -->
<div id="signup-modal" class="modal">
    <div class="modal-content">
        <span class="close-modal" onclick="closeModal('signup-modal')">&times;</span>
        <h2>Đăng Ký</h2>
        <form class="auth-form" action="register.php" method="POST">
            <input type="text" name="name" placeholder="Họ Và Tên" class="search-input" required>
            <input type="email" name="email" placeholder="Email" class="search-input" required>
            <input type="password" name="password" placeholder="Mật Khẩu" class="search-input" required>
            <button type="submit" class="btn btn-primary">Đăng Ký</button>
        </form>
    </div>
</div>

<!-- Form Đăng Nhập -->
<div id="login-modal" class="modal">
    <div class="modal-content">
        <span class="close-modal" onclick="closeModal('login-modal')">&times;</span>
        <h2>Đăng Nhập</h2>
        <form class="auth-form" action="login.php" method="POST">
            <input type="email" name="email" placeholder="Email" class="search-input" required>
            <input type="password" name="password" placeholder="Mật Khẩu" class="search-input" required>
            <button type="submit" class="btn btn-primary">Đăng Nhập</button>
        </form>
    </div>
</div>
    <script src="script.js"></script>
</body>
</html>
