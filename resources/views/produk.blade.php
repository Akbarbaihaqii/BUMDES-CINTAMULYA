<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk dan Layanan - Desa Cintamulya BUMDES</title>
    <link href='https://data.lampungselatankab.go.id/uploads/group/2024-07-29-040818.339388Logo-Lampung-Selatan-1024x724.png' rel='shortcut icon'>
    <link href='https://data.lampungselatankab.go.id/uploads/group/2024-07-29-040818.339388Logo-Lampung-Selatan-1024x724.png' rel='shortcut icon'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
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
            margin: 5px 10px;
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

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            padding: 20px;
            background-color: #f9f9f9;
        }

        .product-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .product-card img {
            width: 100%;
            height: auto; /* Tinggi gambar disesuaikan */
            max-height: 300px; /* Batas tinggi maksimum */
            object-fit: contain; /* Memastikan gambar tidak terpotong */
            border-bottom: 1px solid #ddd; /* Tambahan garis pemisah bawah */
        }

        .product-card h3 {
            font-size: 18px;
            font-weight: bold;
            color: #28a745;
            margin: 10px 0 5px;
        }

        .product-card p {
            font-size: 14px;
            color: #666;
            margin: 5px 10px 15px;
        }

        .product-card a {
            background-color: #28a745;
            color: white;
            font-size: 14px;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 8px;
            transition: background-color 0.3s;
            margin-top: auto;
        }

        .product-card a:hover {
            background-color: #218838;
        }

        .footer-navbar {
            margin-top: auto;
            background-color: #28a745;
            color: white;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2);
        }

        .footer-navbar .copyright {
            font-size: 14px;
            text-align: center;
            width: 100%;
        }

        .footer-navbar .social-icons {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin-top: 10px;
        }

        .footer-navbar .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 5px;
            width: 30px;
            height: 30px;
            background-color: white;
            color: #28a745; /* Ubah warna ikon menjadi hijau */
            border-radius: 50%;
            font-size: 14px;
            text-align: center;
            text-decoration: none;
        }

        .footer-navbar .social-icons a:hover {
            background-color: #28a745;
            color: white; /* Ubah warna ikon menjadi putih saat hover */
        }

        @media (max-width: 600px) {
            .product-card img {
                height: auto;
                aspect-ratio: 4 / 3;
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
            <a href="{{ url('/produk') }}">Produk dan Layanan</a>
            <a href="{{ url('/informasi-bumdes') }}">Informasi BUMDES</a>
            <a href="{{ url('/tentang-kami') }}">Tentang Kami</a>
        </div>
    </nav>

    <div class="products">
        @foreach ($produks as $produk)
            <div class="product-card">
                <img src="{{ asset(env('APP_URL') . '/storage/' . $produk->images[0]) }}" alt="Produk 1">
                <h3>{{ $produk->nama }}</h3>
                <p>{{ $produk->deskripsi_singkat }}</p>
                <a href="/produk/{{ $produk->id }}">Lihat Detail</a>
            </div>
        @endforeach
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
        function toggleMenu() {
            document.querySelector('.menu').classList.toggle('active');
        }
    </script>
</body>

</html>