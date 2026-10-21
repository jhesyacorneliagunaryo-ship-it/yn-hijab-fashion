
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yn Hijab Fashion</title>

    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: #563944;
            background: #fff8f8;
        }

        nav {
            padding: 20px 7%;
            background: #ffb6c1;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px;
        }

        nav h2 { margin: 0; }

        nav a {
            color: #633746;
            text-decoration: none;
            margin-left: 18px;
            font-weight: bold;
        }

        .hero {
            padding: 55px 20px;
            text-align: center;
            background: #ffdce2;
        }

        .hero h1 {
            font-family: Georgia, serif;
            font-size: clamp(30px, 5vw, 48px);
            margin: 10px 0;
        }

        .hero p { color: #805e68; }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 40px 22px;
        }

        .section-title {
            text-align: center;
            font-family: Georgia, serif;
            font-size: 30px;
            margin-bottom: 30px;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 24px;
        }

        .product {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 18px #ecdde1;
        }

        .product img, .placeholder {
            width: 100%;
            height: 250px;
            object-fit: cover;
            background: #ffe8ed;
        }

        .placeholder {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #a77c89;
        }

        .product-info { padding: 18px; }

        .category {
            font-size: 12px;
            color: #b65778;
        }

        .product h3 { margin-bottom: 8px; }

        .price {
            color: #bd5779;
            font-weight: bold;
            font-size: 18px;
        }

        .description {
            color: #876e77;
            overflow-wrap: anywhere;
        }

        .contact {
            text-align: center;
            background: #ffe5ea;
            padding: 45px 20px;
        }

        .contact a {
            display: inline-block;
            background: white;
            padding: 10px 20px;
            margin: 8px;
            border-radius: 25px;
            color: #a84f70;
            text-decoration: none;
        }

        footer {
            padding: 20px;
            text-align: center;
            background: #ffb6c1;
        }

        @media (max-width: 500px) {
            nav { flex-direction: column; }
            nav a { margin: 0 7px; }
        }
    </style>
</head>

<body>

<nav>
    <h2>Yn Hijab Fashion</h2>
    <div>
        <a href="#home">Home</a>
        <a href="#products">Produk</a>
        <a href="#contact">Contact</a>
    </div>
</nav>

<section class="hero" id="home">
    <p>WELCOME TO YN HIJAB FASHION</p>
    <h1>Premium Hijab Collection</h1>
    <p>Temukan koleksi hijab favoritmu dengan gaya yang anggun.</p>
</section>

<main class="container" id="products">
    <h2 class="section-title">Koleksi Produk</h2>

    <div class="products">
        @forelse ($products as $product)
            <article class="product">
                @if ($product->image)
                    <img
                        src="{{ asset('storage/' . $product->image) }}"
                        alt="{{ $product->name }}"
                    >
                @else
                    <div class="placeholder">Foto produk</div>
                @endif

                <div class="product-info">
                    @if ($product->category)
                        <span class="category">
                            {{ $product->category }}
                        </span>
                    @endif

                    <h3>{{ $product->name }}</h3>

                    <div class="price">
                        Rp {{ number_format((float) $product->price, 0, ',', '.') }}
                    </div>

                    @if ($product->description)
                        <p class="description">
                            {{ $product->description }}
                        </p>
                    @endif
                </div>
            </article>
        @empty
            <p>Produk segera hadir. Nantikan koleksi terbaru kami!</p>
        @endforelse
    </div>
</main>

<section class="contact" id="contact">
    <h2>Contact Us</h2>
    <p>Hubungi kami melalui media sosial.</p>

    <a href="https://www.tiktok.com/" target="_blank"
       rel="noopener noreferrer">TikTok</a>

    <a href="https://www.instagram.com/" target="_blank"
       rel="noopener noreferrer">Instagram</a>

    <a href="https://wa.me/" target="_blank"
       rel="noopener noreferrer">WhatsApp</a>
</section>

<footer>
    &copy; {{ date('Y') }} Yn Hijab Fashion
</footer>

</body>
</html>
