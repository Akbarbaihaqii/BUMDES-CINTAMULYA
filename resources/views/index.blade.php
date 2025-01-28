<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Cintamulya Bumdes</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Pastikan konten memenuhi tinggi viewport */
        }
        .content {
            flex: 1; /* Membuat konten utama fleksibel untuk mengisi ruang */
        }
        .navbar {
            display: flex;
            align-items: center;
            background-color: #28a745; /* Warna hijau */
            padding: 10px 20px;
        }
        .navbar img {
            height: 50px;
            margin-right: 10px;
        }
        .navbar .title {
            font-size: 20px;
            color: white;
            font-weight: bold;
            margin-right: auto;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
        .footer-navbar {
            background-color: #28a745; /* Warna abu gelap */
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2);
        }
        .footer-navbar .copyright {
            font-size: 14px;
        }
        .footer-navbar .social-icons {
            display: flex;
            align-items: center;
        }
        .footer-navbar .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 10px;
            width: 30px;
            height: 30px;
            background-color: white;
            color: #343a40;
            border-radius: 50%;
            font-size: 14px;
            text-align: center;
            text-decoration: none;
        }
        .footer-navbar .social-icons a:hover {
            background-color: #28a745;
            color: white;
        }
        .hero {
            text-align: center;
            color: white;
        }
        .hero img {
            width: 100%;
            height: 595px; /* Atur tinggi gambar */
            object-fit: cover; /* Crop gambar agar menyesuaikan ukuran */
            object-position: center; /* Posisi crop berada di tengah */
        }
        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        .hero-content h1 {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .hero-content .btn {
            background-color: #28a745;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
        }
        .hero-content .btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <!-- Navbar Atas -->
    <nav class="navbar">
        <img src="{{ asset('images/logo Lampung Selatan.png') }}" alt="Logo"> <!-- Ganti dengan URL logo Anda -->
        <div class="title">BUMDES</div>
        <a href="#">Beranda</a>
        <a href="{{ url('/produk') }}">Produk dan Layanan</a>
        <a href="#">Informasi BUMDES</a>
        <a href="{{ url('/tentang-kami') }}">Tentang Kami</a>
    </nav>

    <!-- Konten Utama -->
    <div class="content">
        <!-- Hero Section -->
        <div class="hero">
            <img src="{{ asset('images/Dasboard Cintamulya.jpg') }}" alt="Hero Image"> <!-- Ganti dengan gambar utama -->
            <div class="hero-content">
                <h1>Selamat Datang Di Website<br>BUMDES Mulya Abadi Desa Cintamulya</h1>
                <a href="#" class="btn">Explore</a>
            </div>
        </div>
    </div>

    <!-- Navbar Bawah -->
    <footer class="footer-navbar">
        <div class="copyright">
            Hak cipta situs © 2025 - Desa Cintamulya
        </div>
        <div class="social-icons">
            <a href="https://www.facebook.com/your_page" target="_blank" title="Facebook">F</a>
            <a href="https://www.instagram.com/your_username" target="_blank" title="Instagram">I</a>
            <a href="https://t.me/your_username" target="_blank" title="Telegram">T</a>
            <a href="https://wa.me/your_number" target="_blank" title="WhatsApp">W</a>
            <a href="https://www.youtube.com/your_channel" target="_blank" title="YouTube">Y</a>
        </div>
    </footer>
</body>
</html>
