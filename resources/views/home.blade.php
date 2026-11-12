
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yn Hijab Fashion | Elegance in Every Thread</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        :root {
            --pink-bg: #fff5f3;
            --pink-soft: #ffe4e3;
            --pink-medium: #f5c9ca;
            --pink-dark: #d8a0a6;
            --pink-hover: #c88791;
            --text: #38272a;
            --muted: #806b6b;
            --white: #fffdfb;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 100px;
        }

        body {
            margin: 0;
            background: var(--pink-bg);
            color: var(--text);
            font-family: 'DM Sans', sans-serif;
        }

        a {
            color: inherit;
        }

        /* NAVBAR */
        header {
            position: sticky;
            top: 0;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 17px 6%;
            background: rgba(255, 245, 243, 0.97);
            border-bottom: 1px solid #efd5d3;
            backdrop-filter: blur(12px);
        }

        .admin-logo {
            text-decoration: none;
            flex-shrink: 0;
        }

        .logo {
            font: 700 25px 'Playfair Display', serif;
            color: var(--text);
            transition: color 0.2s;
        }

        .admin-logo:hover .logo {
            color: var(--pink-hover);
        }

        nav {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 7px;
        }

        nav a {
            padding: 10px 15px;
            border-radius: 25px;
            color: var(--text);
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            transition: 0.25s ease;
        }

        nav a:hover,
        nav a.active {
            background: var(--pink-dark);
            color: white;
        }

        /* HERO */
        .hero {
            min-height: 440px;
            display: flex;
            align-items: center;
            padding: 70px 8%;
            background:
                radial-gradient(circle at 85% 30%, #f6d1d1 0, transparent 28%),
                linear-gradient(120deg, #fff5f3, #ffe4e3);
        }

        .hero-content {
            max-width: 650px;
        }

        .eyebrow {
            font-size: 11px;
            letter-spacing: 4px;
            line-height: 1.8;
            color: #a36d73;
            font-weight: 700;
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
        }

        .hero h1 {
            margin: 18px 0;
            font-size: clamp(45px, 7vw, 76px);
            line-height: 1.08;
            font-weight: 700;
        }

        .hero p {
            max-width: 490px;
            color: var(--muted);
            font-size: 14px;
            line-height: 1.9;
        }

        .hero-links {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 27px;
        }

        .pill {
            display: inline-block;
            padding: 13px 21px;
            border-radius: 30px;
            background: var(--pink-dark);
            color: white;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            transition: 0.25s ease;
        }

        .pill:hover {
            background: var(--pink-hover);
            transform: translateY(-2px);
        }

        .pill.secondary {
            background: var(--white);
            color: var(--text);
            border: 1px solid #e8c4c4;
        }

        .pill.secondary:hover {
            background: var(--pink-soft);
        }

        /* GENERAL SECTION */
        .section {
            padding: 65px 6%;
        }

        .section-heading {
            margin-bottom: 35px;
            text-align: center;
        }

        .section-heading h2,
        .benefits-heading h2 {
            margin: 9px 0;
            font-size: clamp(30px, 4vw, 42px);
        }

        .section-heading p {
            margin: 0;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.8;
        }

        /* PRODUCTS */
        .collection {
            background: #f5d0d0;
        }

        .count {
            margin-top: 10px;
            color: #795b5d;
            font-size: 12px;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 24px;
            max-width: 1150px;
            margin: 0 auto;
        }

        .product {
            min-width: 0;
            overflow: hidden;
            border: 1px solid #ebc6c6;
            border-radius: 20px;
            background: var(--white);
            transition: transform 0.25s, box-shadow 0.25s;
        }

        .product:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(110, 65, 65, 0.10);
        }

        .product img,
        .placeholder {
            display: block;
            width: 100%;
            height: 240px;
            object-fit: cover;
            background: #f4d5d4;
        }

        .placeholder {
            display: grid;
            place-items: center;
            padding: 15px;
            color: #89676a;
            font: 20px 'Playfair Display', serif;
            text-align: center;
        }

        .product-details {
            padding: 20px;
        }

        .look {
            color: #a36d73;
            font-size: 10px;
            letter-spacing: 2px;
            font-weight: 700;
        }

        .product h3 {
            margin: 9px 0;
            font-size: 23px;
            overflow-wrap: anywhere;
        }

        .product p {
            margin: 0;
            color: var(--muted);
            font-size: 12px;
            line-height: 1.8;
            overflow-wrap: anywhere;
        }

        .price {
            margin-top: 15px;
            color: #a15e68;
            font-size: 14px;
            font-weight: 700;
        }

        .empty {
            grid-column: 1 / -1;
            padding: 55px 20px;
            border: 1px dashed #d7a6a9;
            border-radius: 20px;
            background: var(--white);
            text-align: center;
        }

        .empty h3 {
            font-size: 27px;
        }

        .empty p {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.8;
        }

        /* BENEFITS */
        .benefits {
            background: var(--pink-bg);
        }

        .benefits-heading {
            margin-bottom: 35px;
            text-align: center;
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
            max-width: 1150px;
            margin: 0 auto;
        }

        .benefit-card {
            padding: 28px 18px;
            border: 1px solid #efd3d2;
            border-radius: 20px;
            background: var(--white);
            text-align: center;
            transition: transform 0.25s;
        }

        .benefit-card:hover {
            transform: translateY(-4px);
        }

        .benefit-icon {
            display: grid;
            place-items: center;
            width: 53px;
            height: 53px;
            margin: 0 auto 15px;
            border-radius: 50%;
            background: var(--pink-soft);
            font-size: 23px;
        }

        .benefit-card h3 {
            margin: 8px 0;
            font-size: 19px;
        }

        .benefit-card p {
            margin: 0;
            color: var(--muted);
            font-size: 12px;
            line-height: 1.8;
        }

        /* FOOTER */
        .contact {
            padding: 55px 6% 25px;
            background: #e6b9bc;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.3fr 0.8fr 0.8fr 1fr;
            gap: 30px;
            max-width: 1150px;
            margin: 0 auto;
            padding-bottom: 35px;
        }

        .footer-brand h2 {
            margin: 0 0 12px;
            font-size: 29px;
        }

        .footer-brand p,
        .footer-column p {
            color: #594344;
            font-size: 12px;
            line-height: 1.9;
        }

        .footer-column h3 {
            margin: 4px 0 14px;
            font: 700 16px 'DM Sans', sans-serif;
        }

        .footer-column a {
            display: block;
            width: fit-content;
            margin: 10px 0;
            color: #493638;
            text-decoration: none;
            font-size: 12px;
        }

        .footer-column a:hover {
            color: #8e515c;
            text-decoration: underline;
        }

        .copyright {
            padding-top: 20px;
            border-top: 1px solid rgba(80, 40, 40, 0.2);
            text-align: center;
            color: #594344;
            font-size: 12px;
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {
            header {
                align-items: flex-start;
                flex-direction: column;
            }

            nav {
                justify-content: flex-start;
            }

            .products {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .benefits-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .footer-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 520px) {
            header {
                padding: 15px 5%;
            }

            .logo {
                font-size: 22px;
            }

            nav {
                gap: 3px;
            }

            nav a {
                padding: 8px 10px;
                font-size: 11px;
            }

            .hero {
                min-height: 390px;
                padding: 50px 6%;
            }

            .hero h1 {
                font-size: 49px;
            }

            .section {
                padding: 45px 5%;
            }

            .products {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .product img,
            .placeholder {
                height: 260px;
            }

            .benefits-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 10px;
            }

            .benefit-card {
                padding: 20px 10px;
            }

            .benefit-card h3 {
                font-size: 16px;
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
                gap: 25px 15px;
            }

            .footer-brand h2 {
                font-size: 23px;
            }
        }
    </style>
</head>

<body>

<header>
    <a href="{{ route('admin.login.form') }}" class="admin-logo">
        <span class="logo">Yn Hijab Fashion</span>
    </a>

    <nav>
        <a href="{{ route('home') }}" class="active">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('collection') }}">Collection</a>
        <a href="{{ route('why-us') }}">Why Us</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>
</header>

<main>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-content">
            <div class="eyebrow">NEW COLLECTION {{ date('Y') }}</div>

            <h1>
                Elegance<br>
                Meets<br>
                Modesty
            </h1>

            <p>
                Yn Hijab Fashion menghadirkan koleksi hijab pilihan
                dengan desain elegan, bahan berkualitas, dan nyaman
                digunakan untuk aktivitas sehari-hari.
            </p>

            <div class="hero-links">
                <a class="pill secondary" href="{{ route('about') }}">
                    Our Story
                </a>

                <a class="pill" href="{{ route('collection') }}">
                    Explore Collection
                </a>
            </div>
        </div>
    </section>

    <!-- COLLECTION -->
    <section class="section collection">
        <div class="section-heading">
            <div class="eyebrow">OUR COLLECTION</div>
            <h2>Featured Products</h2>
            <p>Koleksi hijab pilihan dengan kualitas terbaik.</p>

            <div class="count">
                {{ isset($products) ? $products->count() : 0 }}
                koleksi tersedia
            </div>
        </div>

        <div class="products">
            @forelse(($products ?? collect()) as $product)

                <article class="product">

                    @if(!empty($product->image))
                        <img
                            src="{{ asset('storage/' . $product->image) }}"
                            alt="{{ $product->name ?? 'Produk Yn Hijab Fashion' }}"
                            loading="lazy"
                        >
                    @else
                        <div class="placeholder">
                            Yn Hijab Fashion
                        </div>
                    @endif

                    <div class="product-details">

                        <div class="look">
                            {{ $product->category ?: 'YN COLLECTION' }}
                        </div>

                        <h3>
                            {{ $product->name ?? $product->title ?? 'Koleksi Fashion' }}
                        </h3>

                        <p>
                            {{ $product->description ?: 'Koleksi pilihan Yn Hijab Fashion.' }}
                        </p>

                        @if(isset($product->price))
                            <div class="price">
                                Rp {{ number_format((float) $product->price, 0, ',', '.') }}
                            </div>
                        @endif

                    </div>
                </article>

            @empty

                <div class="empty">
                    <div style="font-size: 38px;">♡</div>

                    <h3>Our Collection Is Coming</h3>

                    <p>
                        Koleksi Yn Hijab Fashion akan ditampilkan di sini.
                        Silakan kunjungi kembali untuk melihat koleksi terbaru kami.
                    </p>
                </div>

            @endforelse
        </div>
    </section>

    <!-- BENEFITS -->
    <section class="section benefits">

        <div class="benefits-heading">
            <div class="eyebrow">WHY CHOOSE US</div>
            <h2>Experience The Difference</h2>
        </div>

        <div class="benefits-grid">

            <article class="benefit-card">
                <div class="benefit-icon">♡</div>
                <h3>Premium Quality</h3>
                <p>Menggunakan bahan pilihan yang nyaman dipakai.</p>
            </article>

            <article class="benefit-card">
                <div class="benefit-icon">✿</div>
                <h3>Elegant Design</h3>
                <p>Desain modern dan elegan untuk setiap kesempatan.</p>
            </article>

            <article class="benefit-card">
                <div class="benefit-icon">☻</div>
                <h3>Friendly Service</h3>
                <p>Kami siap membantu dengan pelayanan yang ramah.</p>
            </article>

            <article class="benefit-card">
                <div class="benefit-icon">✧</div>
                <h3>Everyday Comfort</h3>
                <p>Kenyamanan untuk menemani aktivitas sehari-hari.</p>
            </article>

        </div>
    </section>

</main>

<!-- FOOTER -->
<footer class="contact">

    <div class="footer-grid">

        <div class="footer-brand">
            <h2>Yn Hijab Fashion</h2>

            <p>
                Elegance in Every Thread.<br>
                Premium hijab crafted for confidence and comfort.
            </p>
        </div>

        <div class="footer-column">
            <h3>Quick Links</h3>

            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('collection') }}">Collection</a>
            <a href="{{ route('why-us') }}">Why Us</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>

        <div class="footer-column">
            <h3>Follow Us</h3>

            <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">
                Instagram ↗
            </a>

            <a href="https://www.tiktok.com/" target="_blank" rel="noopener noreferrer">
                TikTok ↗
            </a>

            <a href="https://wa.me/" target="_blank" rel="noopener noreferrer">
                WhatsApp ↗
            </a>
        </div>

        <div class="footer-column">
            <h3>Contact</h3>

            <p>
                Hubungi kami melalui media sosial
                untuk informasi lebih lanjut tentang Yn Hijab Fashion.
            </p>
        </div>

    </div>

    <div class="copyright">
        © {{ date('Y') }} Yn Hijab Fashion. All Rights Reserved.
    </div>

</footer>

</body>
</html>
