<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Cintamulya Bumdes</title>
    <link href='https://data.lampungselatankab.go.id/uploads/group/2024-07-29-040818.339388Logo-Lampung-Selatan-1024x724.png' rel='shortcut icon'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f4f4f4;
        }
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #28a745;
            padding: 15px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .navbar img {
            height: 50px;
            margin-right: 10px;
        }
        .navbar .title {
            font-size: 24px;
            color: white;
            font-weight: bold;
        }
        .menu {
            display: flex;
            gap: 20px;
        }
        .menu a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .menu a:hover {
            background: rgba(255, 255, 255, 0.2);
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
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                left: 0;
                width: 100%;
                background-color: #28a745;
                padding: 10px 0;
                z-index: 1000;
            }
            .menu.active {
                display: flex;
            }
            .menu a {
                padding: 10px;
                display: block;
            }
            .menu-toggle {
                display: block;
            }
        }
        .hero {
            position: relative;
            text-align: center;
            color: white;
            overflow: hidden;
        }
        .hero img {
            width: 100%;
            height: auto;
            max-height: 520px;
            object-fit: cover;
            filter: brightness(0.7);
        }
        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 80%;
        }
        .hero-content h1 {
            font-size: 28px;
            margin: 0;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
        }
        .hero-content .btn {
            background-color: #28a745;
            color: white;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 5px;
            font-size: 16px;
            transition: background 0.3s;
            margin-top: 20px; /* Menambahkan jarak atas untuk tombol Explore */
        }
        .hero-content .btn:hover {
            background-color: #218838;
        }
        .product-preview {
            padding: 40px 20px;
            background-color: #fff;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            border-radius: 10px;
        }
        .product-preview h2 {
            font-size: 28px;
            color: #28a745;
            margin-bottom: 20px;
        }
        .slider {
            overflow: hidden;
            position: relative;
        }
        .slides {
            display: flex;
            transition: transform 0.5s ease;
            width: 100%;
        }
        .slide {
            min-width: 100%;
            box-sizing: border-box;
            padding: 10px;
        }
        .product-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            margin: 10px; /* Menambahkan margin untuk jarak antar produk */
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }
        .product-card img {
            width: 50%;
            height: 100%;
            object-fit: cover;
        }
        .product-card h3 {
            font-size: 18px;
            color: #28a745;
            margin: 10px 0;
        }
        .product-card p {
            font-size: 14px;
            color: #666;
            margin: 5px 10px 15px;
        }
        .footer-navbar {
            background-color: #28a745;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: auto;
        }
        .footer-navbar .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 5px;
        }
        .footer-navbar .social-icons a {
            background: white;
            color: #28a745;
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s;
        }
        .footer-navbar .social-icons a:hover {
            background: #ddd;
        }
        @media (max-width: 768px) {
            .product-card img {
                height: 150px; /* Menyesuaikan tinggi gambar pada perangkat mobile */
            }
            .hero-content h1 {
                font-size: 24px; /* Menyesuaikan ukuran font pada perangkat mobile */
            }
            .product-preview {
                padding: 20px; /* Mengurangi padding pada perangkat mobile */
            }
        }
        /* CSS untuk bagian Desa Cintamulya */
        .container {
            width: auto;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0 , 0, 0.1);
        }
        .section {
            margin-bottom: 40px;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: space-between;
        }
        .section-content {
            padding: 20px;
            flex: 1;
            margin-left: 20px; /* Menambahkan jarak antara gambar dan teks */
        }
        .map-container {
            display: flex;
            flex-direction: column; /* Mengubah arah flex menjadi kolom */
            align-items: center; /* Menyelaraskan konten di tengah */
        }
        .map-buttons {
            display: flex;
            gap: 10px;
            margin-top: 10px; /* Menambahkan jarak atas untuk tombol */
        }
        .map-buttons button {
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .map-buttons button:hover {
            background-color: #218838;
        }
        @media (max-width: 768px) {
            .section {
                flex-direction: column; /* Mengubah arah flex menjadi kolom pada perangkat kecil */
                align-items: center; /* Menyelaraskan konten di tengah */
            }
            .section-content {
                margin-left: 0; /* Menghapus margin kiri pada perangkat kecil */
                text-align: center; /* Menyelaraskan teks di tengah */
            }
            .map-container img {
                width: 100%; /* Membuat gambar responsif */
                height: auto; /* Menjaga rasio aspek gambar */
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div style="display: flex; align-items: center;">
            <img src="{{ asset('images/logo Lampung Selatan.png') }}" alt="Logo">
            <span class="title">BUMDES</span>
        </div>
        <button class="menu-toggle" onclick="toggleMenu()">&#9776;</button>
        <div class="menu">
            <a href="{{ url('/') }}">Beranda</a>
            <a href="{{ url('/produk') }}">Produk dan Layanan</a>
            <a href="{{ url('/informasi-bumdes') }}">Informasi BUMDES</a>
            <a href="{{ url('/tentang-kami') }}">Tentang Kami</a>
        </div>
    </nav>
    <div class="content">
        <div class="hero">
            <img src="{{ asset('images/Dasboard Cintamulya.jpg') }}" alt="Hero Image">
            <div class="hero-content">
                <h1>Selamat Datang Di Website<br>BUMDES Mulya Abadi Desa Cintamulya</h1>
                <br>
                <a href="#produk" class="btn">Explore</a>
            </div>
        </div>
        
        <div class="product-preview" id="produk">
            <h2>Produk Kami</h2>
            <div class="slider">
                <div class="slides">
                    @foreach ($produks as $produk)
                        <div class="slide">
                            <div class="product-card">
                                <a href="/produk/{{ $produk->id }}">
                                    <img src="{{ asset(env('APP_URL') . '/storage/' . $produk->images[0]) }}" alt="{{ $produk->nama }}">
                                    <h3>{{ $produk->nama }}</h3>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container">
            <div class="section">
                <img alt="Gerbang Desa Cintamulya" height="300" src="{{ asset('images/Dasboard Cintamulya.jpg') }}" width="390"/>
                <div class="section-content">
                <h2><a href="https://cintamulya.smartvillage.co.id/index.php/artikel/2016/8/26/sejarah-desa" style="color: inherit; text-decoration: none;">Sejarah Desa</a></h2>
                <p><a href="https://cintamulya.smartvillage.co.id/index.php/artikel/2016/8/26/sejarah-desa" style="color: inherit; text-decoration: none;">Desa Cintamulya pada mulanya adalah merupakan kawasan hutan Register 35 Way Katibung yang mulai dibuka pada Tahun 1964 dengan kondisi hutan rawa yang sudah rusak, pada awalnya Desa Cintamulya adalah merupakan desa kecil atau yang sering disebut umbuhan dimana waktu itu terkenal dengan nama umbul bandong yang diambil dari nama Pak Bandong selaku kepala tebang.</p>
                <p>Seiring berjalannya waktu Umbul Bandong menjadi ramai dan berubah menjadi sebuah Dusun dan diberi nama ”MULYA JADI” yang kemudian menginduk kepada salah satu Desa yang ada di Kalianda yakni Desa Cintamulya yang dipimpin oleh Bapak Musa Laksamana.</a></p>
                <p><a href="https://cintamulya.smartvillage.co.id/index.php/artikel/2016/8/26/sejarah-desa" style="color: green; text-decoration: none;">Lihat lebih lengkap</a></p>    
            </div>
            </div>
            <div class="section">
                <div class="map-container">
                <iframe alt="Peta Lokasi Kantor" height="250" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31770.183174531172!2d105.54025731078912!3d-5.526469978486395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e411d649ef7fe2f%3A0x14fc344ce6af0c7d!2sCintamulya%2C%20Kec.%20Candipuro%2C%20Kabupaten%20Lampung%20Selatan%2C%20Lampung!5e0!3m2!1sid!2sid!4v1738472214103!5m2!1sid!2sid"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="section-content">
                    <h2><a href="https://cintamulya.smartvillage.co.id/index.php/artikel/2016/8/26/wilayah-desa" style="color: inherit; text-decoration: none;">Wilayah Desa</a></h2>
                    <p><a href="https://cintamulya.smartvillage.co.id/index.php/artikel/2016/8/26/wilayah-desa" style="color: inherit; text-decoration: none;">Desa Cintamulya merupakan salah satu dari 14 desa di wilayah Kecamatan Candipuro, yang terletak 2,5 Km ke arah Barat dari Kecamatan Candipuro yang mempunyai luas wilayah seluas 812 Hektar, dengan rincian sebagai berikut:</a></p>
                    <p><a href="https://cintamulya.smartvillage.co.id/index.php/artikel/2016/8/26/wilayah-desa" style="color: green; text-decoration: none;">Lihat lebih lengkap</a></p>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-navbar">
        <div>Hak cipta situs © 2025 - Desa Cintamulya</div>
        <div class="social-icons">
        <a href="https://web.facebook.com/cintamulya.cintamulya.7"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/desa_cintamulya/"><i class="fab fa-instagram"></i></a>
        <a href="https://api.whatsapp.com/send?phone=6281366697657"><i class="fab fa-whatsapp"></i></a>
        <a href="https://www.youtube.com/@desacintamulya1872"><i class="fab fa-youtube"></i></a>
        <a href="https://t.me/Taba"><i class="fab fa-telegram"></i></a>
        </div>
    </footer>
    <script>
        let currentIndex = 0;

        function showSlide(index) {
            const slides = document.querySelector('.slides');
            const totalSlides = document.querySelectorAll('.slide').length;
            if (index >= totalSlides) {
                currentIndex = 0;
            } else if (index < 0) {
                currentIndex = totalSlides - 1;
            } else {
                currentIndex = index;
            }
            slides.style.transform = 'translateX(' + (-currentIndex * 100) + '%)';
        }

        setInterval(() => {
            showSlide(currentIndex + 1);
        }, 3000); // Ganti slide setiap 3 detik

        function toggleMenu() {
            document.querySelector('.menu').classList.toggle('active');
        }
    </script>
</body>
</html>