<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk dan Layanan - Desa Cintamulya BUMDES</title>
    <link href='https://data.lampungselatankab.go.id/uploads/group/2024-07-29-040818.339388Logo-Lampung-Selatan-1024x724.png' rel='shortcut icon'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .navbar {
            display: flex;
            align-items: center;
            background-color: #28a745;
            padding: 10px 20px;
            flex-wrap: wrap;
            position: relative;
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
            margin: 5px 15px;
            font-size: 16px;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        .menu-toggle {
            display: none;
            font-size: 24px;
            background: none;
            border: none;
            color: white;
            cursor: pointer;
            margin-left: auto;
        }

        .menu {
            display: flex;
            gap: 15px;
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

            .menu-toggle {
                display: block;
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

        .produk-container {
            max-width: 800px; /* Mengatur lebar maksimum untuk kontainer produk */
            margin: 20px auto; /* Menambahkan margin atas dan bawah */
            padding: 20px; /* Menambahkan padding di dalam kontainer */
            background-color: #f8f9fa; /* Warna latar belakang yang lebih terang */
            border-radius: 10px; /* Sudut melengkung untuk kontainer */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan untuk efek kedalaman */
        }

        .produk-container h1 {
            color: #28a745; /* Warna hijau untuk judul */
            padding: 12px 0;
            border-bottom: 2px solid #28a745; /* Garis bawah yang lebih tebal */
            text-align: center;
            font-size: 24px; /* Ukuran font yang lebih besar untuk judul */
        }

        .produk-container p {
            font-size: 14pt; /* Ukuran font untuk deskripsi */
            color: #343a40; /* Warna teks deskripsi */
            text-align: justify; /* Rata kiri dan kanan untuk teks */
            margin: 10px 0;
            line-height: 1.6; /* Menambahkan jarak antar baris */
            padding: 0 15px; /* Menambahkan padding untuk ruang di sekitar teks */
        }

        .slideshow-container {
            max-width: 100%; /* Mengatur lebar maksimum untuk slideshow */
            position: relative;
            margin: 20px auto; /* Menambahkan margin atas dan bawah */
        }

        .slideshow-container img {
            width: 100%; /* Mengatur lebar gambar agar responsif */
            height: 450px; /* Mengatur tinggi gambar agar konsisten */
            object-fit: cover; /* Memastikan gambar terpotong dengan baik */
            border-radius: 10px; /* Sudut melengkung untuk gambar */
        }

        .mySlides {
            display: none;
        }

        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #728a745;
        }

        @media (max-width: 600px) {
            .produk-container {
                padding: 0 10px;
            }

            .produk-container h1 {
                font-size: 24px;
            }

            .produk-container p {
                font-size: 12pt;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <img src="{{ asset('images/logo Lampung Selatan.png') }}" alt="Logo">
        <div class="title">BUMDES</div>
        <button class="menu-toggle" onclick="toggleMenu()">&#9776;</button>
        <div class="menu">
            <a href="{{ url('/') }}">Beranda</a>
            <a href="/produk">Produk dan Layanan</a>
            <a href="{{ url('/informasi-bumdes') }}">Informasi BUMDES</a>
            <a href="{{ url('/tentang-kami') }}">Tentang Kami</a>
        </div>
    </nav>

    <div class="produk-container">
        <div class="slideshow-container">
            @foreach ($produk->images as $image)
                <div class="mySlides fade">
                    <img src="{{ env('APP_URL') . '/storage/' . $image }}" style="width:100%; border-radius: 10px;">
                </div>
            @endforeach

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div style="text-align:center">
            @foreach ($produk->images as $images)
                <span class="dot" onclick="currentSlide({{ $loop->index }})"></span>
            @endforeach
        </div>
        <h1>{{ $produk->nama }}</h1><br>
        <p>{{ $produk->deskripsi_singkat }}</p>
        <H1>Deskripsi</H1>
        <p>{{ $produk->deskripsi }}</p>
    </div>

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
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) { slides[i].style.display = "none"; }
            for (i = 0; i < dots.length; i++) { dots[i].className = dots[i].className.replace(" active", ""); }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }

        function toggleMenu() {
            document.querySelector('.menu').classList.toggle('active');
        }
    </script>
</body>

</html>