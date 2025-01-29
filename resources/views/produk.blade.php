<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Produk dan Layanan - Desa Cintamulya BUMDES</title>
        <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
            }

            .navbar {
                display: flex;
                align-items: center;
                background-color: #28a745;
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
                background-color: #28a745;
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

            .products {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;
                padding: 20px;
                background-color: #f9f9f9;
            }

            .product-card {
                background-color: white;
                width: 250px;
                border: 1px solid #ddd;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                text-align: center;
                padding: 15px;
            }

            .product-card img {
                width: 100%;
                height: 150px;
                object-fit: cover;
                border-radius: 5px;
            }

            .product-card h3 {
                font-size: 20px;
                color: #28a745;
                margin: 10px 0;
            }

            .product-card p {
                color: #333;
                font-size: 14px;
                margin-bottom: 10px;
            }

            .product-card a {
                display: inline-block;
                margin-top: 10px;
                padding: 10px 20px;
                background-color: #28a745;
                color: white;
                text-decoration: none;
                border-radius: 5px;
            }

            .product-card a:hover {
                background-color: #218838;
            }
        </style>
    </head>

    <body>
        <!-- Navbar Atas -->
        <nav class="navbar">
            <img src="{{ asset('images/logo Lampung Selatan.png') }}" alt="Logo">
            <div class="title">BUMDES</div>
            <a href="{{ url('/') }}">Beranda</a>
            <a href="#">Produk dan Layanan</a>
            <a href="#">Informasi BUMDES</a>
            <a href="{{ url('/tentang-kami') }}">Tentang Kami</a>
        </nav>
        <!-- Product Section -->
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
