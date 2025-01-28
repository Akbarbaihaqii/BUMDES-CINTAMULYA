<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Desa Cintamulya BUMDES</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
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
        .header {
            text-align: center;
            background-color: #28a745;
            color: white;
            padding: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
        }
        .image-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .image-gallery img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .content {
            padding: 20px;
            background-color: #ffffff;
            color: #333333;
            line-height: 1.6;
        }
        .content h2 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #28a745;
        }
        .content p {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <!-- Navbar Atas -->
    <nav class="navbar">
        <img src="{{ asset('images/logo Lampung Selatan.png') }}" alt="Logo"> <!-- Ganti dengan URL logo Anda -->
        <div class="title">BUMDES</div>
        <a href="{{ url('/') }}">Beranda</a>
        <a href="#">Produk dan Layanan</a>
        <a href="#">Informasi BUMDES</a>
        <a href="{{ url('/tentang-kami') }}">Tentang Kami</a>
    </nav>

    <!-- Image Gallery -->
    <div class="image-gallery">
        <img src="{{ asset('images/Gambar 1.jpg') }}" alt="Gambar 1">
        <img src="{{ asset('images/Gambar 2.jpg') }}" alt="Gambar 2">
        <img src="{{ asset('images/gallery3.jpg') }}" alt="Gambar 3">
        <img src="{{ asset('images/gallery4.jpg') }}" alt="Gambar 4">
        <img src="{{ asset('images/gallery5.jpg') }}" alt="Gambar 5">
    </div>

    <!-- Content Section -->
    <div class="content">
        <h2>Profil BUMDES Desa Cintamulya</h2>
        <p>
            BUMDES Mulya Abadi Desa Cintamulya didirikan untuk meningkatkan kesejahteraan masyarakat 
            melalui berbagai program inovatif dan usaha desa. Kami berkomitmen untuk memberikan pelayanan 
            terbaik dan mendukung perekonomian lokal melalui pengelolaan sumber daya yang efektif.
        </p>
        <p>
            Visi kami adalah menjadi badan usaha desa yang mandiri, profesional, dan inovatif dalam 
            mendukung pembangunan desa. Dengan dukungan masyarakat dan pemerintah desa, kami terus 
            berusaha untuk menghadirkan manfaat yang nyata bagi seluruh warga desa.
        </p>
        <h2>Misi Kami</h2>
        <p>
            1. Mengelola usaha desa secara transparan dan akuntabel.<br>
            2. Memberdayakan masyarakat desa melalui pelatihan dan kesempatan kerja.<br>
            3. Mendukung produk lokal untuk memperluas pasar dan meningkatkan pendapatan masyarakat.<br>
            4. Berkontribusi pada pembangunan infrastruktur desa untuk kemajuan bersama.
        </p>
    </div>
    <!-- Navbar Bawah -->
    <footer class="footer-navbar">
        <div class="copyright">
            Hak cipta situs © 2025 - Desa Cintamulya
        </div>
        <div class="social-icons">
            <a href="https://www.facebook.com/your_page" target="_blank" title="Facebook">F</a>
            <a href="https://www.instagram.com/your_username" target="_blank" title="Instagram">I</a>
            <a href="https://t.me/your_username" target="_blank" title="Login">L</a>
            <a href="https://wa.me/your_number" target="_blank" title="WhatsApp">W</a>
            <a href="https://www.youtube.com/your_channel" target="_blank" title="YouTube">Y</a>
        </div>
    </footer>
</body>
</html>
