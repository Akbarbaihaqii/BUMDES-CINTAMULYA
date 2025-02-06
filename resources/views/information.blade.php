<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi BUMDES - Desa Cintamulya BUMDES</title>
    <link href='https://data.lampungselatankab.go.id/uploads/group/2024-07-29-040818.339388Logo-Lampung-Selatan-1024x724.png' rel='shortcut icon'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
            position: relative; /* Tambahkan posisi relatif untuk menu toggle */
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
        .menu {
            display: flex;
            gap: 15px;
        }
        .menu-toggle {
            display: none;
            font-size: 24px;
            background: none;
            border: none;
            color: white;
            cursor: pointer;
        }
        @media (max-width: 768px) {
            .menu {
                display: none; /* Sembunyikan menu di layar kecil */
                flex-direction: column; /* Ubah menjadi kolom */
                position: absolute;
                top: 60px; /* Sesuaikan posisi */
                left: 0;
                width: 100%;
                background-color: #28a745;
                padding: 10px 0;
                z-index: 1000;
            }
            .menu.active {
                display: flex; /* Tampilkan menu saat aktif */
            }
            .menu a {
                padding: 10px; /* Tambahkan padding untuk tautan */
                display: block; /* Tampilkan tautan sebagai blok */
            }
            .menu-toggle {
                display: block; /* Tampilkan tombol di layar kecil */
            }
        }
        .footer-navbar {
            background-color: #28a745;
            color: white;
            text-align: center;
            padding: 10px;
        }
        .footer-navbar .social-icons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 5px;
        }
        .footer-navbar .social-icons a {
            background: white;
            color: #28a745;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            text-decoration: none;
            font-weight: bold;
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
        .content {
            padding: 20px;
            background-color: #ffffff;
            color: #333333;
            line-height: 1.6;
            margin-top: 10px; /* Tambahkan jarak responsif antara navbar dan konten */
        }
        .content h2 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #28a745;
        }
        .content p {
            margin-bottom: 10px;
        }
        .info-section {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-top: 20px;
        }
        .info-section h3 {
            color: #28a745;
            margin-bottom: 10px;
        }
        .image-gallery {
            display: flex;
            overflow: hidden; /* Sembunyikan gambar yang tidak terlihat */
            position: relative;
            width: 100%;
            margin: 10px; /* Pusatkan galeri */
        }
        .image-gallery .gallery-wrapper {
            display: flex;
            transition: transform 0.5s ease; /* Animasi transisi */
            width: calc(100% * 20); /* Pastikan lebar galeri sesuai dengan jumlah gambar */
        }
        .image-gallery img {
            width: 50vw; /* Lebar gambar 100% dari viewport */
            height: auto; /* Tinggi otomatis untuk menjaga rasio aspek */
            object-fit: cover; /* Menjaga gambar tetap proporsional */
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            margin: 0 5px; /* Jarak antar gambar */
        }
        
    </style>
</head>
<body>
    <!-- Navbar Atas -->
    <nav class="navbar">
        <img src="{{ asset('images/logo Lampung Selatan.png') }}" alt="Logo"> <!-- Ganti dengan URL logo Anda -->
        <div class="title">BUMDES</div>
        <button class="menu-toggle" onclick="toggleMenu()">&#9776;</button>
        <div class="menu">
            <a href="{{ url('/') }}">Beranda</a>
            <a href="{{ url('/produk') }}">Produk dan Layanan</a>
            <a href="{{ url('/informasi-bumdes') }}">Informasi BUMDES</a>
            <a href="{{ url('/tentang-kami') }}">Tentang Kami</a>
        </div>
    </nav>

    <div class="content">
        <h2>Tentang BUMDES</h2>
        <div class="info-section">
            <h3>Deskripsi</h3>
            <p>Badan Usaha Milik Desa (BUMDES) Desa Cintamulya didirikan untuk meningkatkan perekonomian masyarakat desa melalui pengelolaan sumber daya lokal dan penyediaan layanan yang bermanfaat bagi warga.</p>
        </div>
        <div class="info-section">
            <h3>Visi</h3>
            <p>Menjadi lembaga ekonomi yang mandiri dan berkelanjutan, serta berkontribusi terhadap kesejahteraan masyarakat Desa Cintamulya.</p>
        </div>
        <div class="info-section">
            <h3>Misi</h3>
            <p>1. Mengelola sumber daya desa secara efektif dan efisien.</p>
            <p>2. Meningkatkan keterampilan dan pengetahuan masyarakat dalam bidang ekonomi.</p>
            <p>3. Menyediakan produk dan layanan yang berkualitas untuk masyarakat.</p>
        </div>
    </div>

    <!-- Galeri Gambar -->
    <div class="image-gallery">
        <div class="gallery-wrapper">
            <img src="{{ asset('images/Gambar 1.jpg') }}" alt="Gambar 1">
            <img src="{{ asset('images/Gambar 2.jpg') }}" alt="Gambar 2">
            <img src="{{ asset('images/Gambar KKN 2.jpg') }}" alt="Gambar 3">
            <img src="{{ asset('images/Gambar KKN 3.jpg') }}" alt="Gambar 4">
            <img src="{{ asset('images/Gambar KKN 1.jpg') }}" alt="Gambar 5">
            <img src="{{ asset('images/Gambar KKN 4.jpg') }}" alt="Gambar 6">
            <img src="{{ asset('images/Gambar KKN 5.jpg') }}" alt="Gambar 7">
            <img src="{{ asset('images/Gambar KKN 6.jpg') }}" alt="Gambar 8">
            <img src="{{ asset('images/Gambar KKN 7.jpg') }}" alt="Gambar 9">
        </div>
    </div>

    <!-- Navbar Bawah -->
    <footer class="footer-navbar">
        <div class="copyright">
            Hak cipta situs © 2025 - Desa Cintamulya
        </div>
        <div class="social-icons">
        <a href="https://web.facebook.com/cintamulya.cintamulya.7"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/desa_cintamulya/"><i class="fab fa-instagram"></i></a>
        <a href="https://api.whatsapp.com/send?phone=6281366697657"><i class="fab fa-whatsapp"></i></a>
        <a href="https://www.youtube.com/@desacintamulya1872"><i class="fab fa-youtube"></i></a>
        <a href="https://t.me/Taba"><i class="fab fa-telegram"></i></a>
        </div>
    </footer>

    <script>
        function toggleMenu() {
            var menu = document.querySelector('.menu');
            menu.classList.toggle('active');
        }

        // Fitur geser otomatis untuk galeri gambar
        let currentIndex = 0;
        const images = document.querySelectorAll('.image-gallery img');
        const totalImages = images.length;

        function showNextImage() {
            currentIndex = (currentIndex + 1) % totalImages; // Geser ke gambar berikutnya
            const galleryWrapper = document.querySelector('.gallery-wrapper');
            const offset = -currentIndex * (window.innerWidth + 10); // Hitung offset berdasarkan lebar viewport dan margin
            galleryWrapper.style.transform = `translateX(${offset}px)`; // Geser galeri
        }

        setInterval(showNextImage, 3000); // Ganti gambar setiap 3 detik
    </script>
</body>
</html>