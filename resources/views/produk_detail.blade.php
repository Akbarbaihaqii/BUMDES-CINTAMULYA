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
                position: absolute;
                bottom: 0px;
                right: 0px;
                left: 0px;
                widows: 100%;
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

            .produk-container {
                display: flex;
                padding: 0 12rem;
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
                gap: 24px;
            }

            /* Slideshow container */
            .slideshow-container {
                max-width: 1000px;
                position: relative;
                margin: auto;
            }

            /* Hide the images by default */
            .mySlides {
                display: none;
            }

            /* Next & previous buttons */
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

            /* Position the "next button" to the right */
            .next {
                right: 0;
                border-radius: 3px 0 0 3px;
            }

            /* On hover, add a black background color with a little bit see-through */
            .prev:hover,
            .next:hover {
                background-color: rgba(0, 0, 0, 0.8);
            }

            /* Caption text */
            .text {
                color: #f2f2f2;
                font-size: 15px;
                padding: 8px 12px;
                position: absolute;
                bottom: 8px;
                width: 100%;
                text-align: center;
            }

            /* Number text (1/3 etc) */
            .numbertext {
                color: #f2f2f2;
                font-size: 12px;
                padding: 8px 12px;
                position: absolute;
                top: 0;
            }

            /* The dots/bullets/indicators */
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
                background-color: #717171;
            }

            /* Fading animation */
            .fade {
                animation-name: fade;
                animation-duration: 1.5s;
            }

            @keyframes fade {
                from {
                    opacity: .4
                }

                to {
                    opacity: 1
                }
            }

            .produk-container .produk-img {
                width: 350px;
                height: 250px;
                object-fit: cover;
            }

            .produk-container h1 {
                color: #28a745;
                padding-bottom: 12px;
                border-bottom: 1px solid #717171;
            }

            .produk-container p {
                font-size: 12pt;
                color: #343a40
            }
        </style>
    </head>

    <body>
        <!-- Navbar Atas -->
        <nav class="navbar">
            <img src="{{ asset('images/logo Lampung Selatan.png') }}" alt="Logo">
            <div class="title">BUMDES</div>
            <a href="{{ url('/') }}">Beranda</a>
            <a href="/produk">Produk dan Layanan</a>
            <a href="#">Informasi BUMDES</a>
            <a href="{{ url('/tentang-kami') }}">Tentang Kami</a>
        </nav>

        <div class="produk-container">
            <div class="slideshow-container">

                @foreach ($produk->images as $image)
                    <div class="mySlides fade">
                        <div class="numbertext">{{ $loop->index }} / {{ $loop->count }}</div>
                        <img src={{ env('APP_URL') . '/storage/' . $image }} style="width:100%">
                    </div>
                @endforeach
                <!-- Full-width images with number and caption text -->

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                @foreach ($produk->images as $images)
                    <span class="dot" onclick="currentSlide({{ $loop->index }})"></span>
                @endforeach
            </div>
            <div>
                <h1>{{ $produk->nama }}</h1>
                <p>{{ $produk->deskripsi }}</p>
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
                <a href="https://t.me/your_username" target="_blank" title="Login">L</a>
                <a href="https://wa.me/your_number" target="_blank" title="WhatsApp">W</a>
                <a href="https://www.youtube.com/your_channel" target="_blank" title="YouTube">Y</a>
            </div>
        </footer>
    </body>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>

</html>
