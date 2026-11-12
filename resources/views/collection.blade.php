
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collection | Yn Hijab Fashion</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --pink-bg: #fff5f3;
            --pink-soft: #ffe4e3;
            --pink-medium: #f5c9ca;
            --pink-dark: #d8a0a6;
            --pink-hover: #c88791;
            --text: #332526;
            --muted: #806c6d;
            --white: #ffffff;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            color: var(--text);
            background: var(--pink-bg);
        }

        header {
            position: sticky;
            top: 0;
            z-index: 100;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            padding: 18px 7%;
            background: rgba(255, 245, 243, .95);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid #f4dddd;
        }

        .logo {
            font: 700 25px 'Playfair Display', serif;
        }

        .tagline {
            font-size: 11px;
            color: var(--muted);
            letter-spacing: 1px;
            margin-top: 3px;
        }

        nav {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 8px;
        }

        nav a {
            padding: 9px 15px;
            border-radius: 25px;
            color: var(--text);
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            transition: .3s;
        }

        nav a:hover,
        nav a.active {
            background: var(--pink-medium);
        }

        .hero {
            text-align: center;
            padding: 85px 7% 80px;
            background: linear-gradient(135deg, #fff5f3, #ffe4e3);
        }

        .eyebrow {
            font-size: 11px;
            letter-spacing: 5px;
            font-weight: 700;
            color: var(--pink-hover);
        }

        .hero h1 {
            font: 700 clamp(35px, 5vw, 55px) 'Playfair Display', serif;
            margin: 18px 0;
        }

        .hero p {
            max-width: 580px;
            margin: auto;
            color: var(--muted);
            font-size: 14px;
            line-height: 1.8;
        }

        .collection-section {
            padding: 55px 7% 80px;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 35px;
        }

        .section-heading h2 {
            font: 600 36px 'Playfair Display', serif;
            margin: 12px 0;
        }

        .section-heading p {
            color: var(--muted);
            font-size: 13px;
        }

        .categories {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 38px;
        }

        .category-btn {
            border: 1px solid #efcecf;
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 25px;
            background: var(--white);
            color: var(--text);
            font: 600 13px 'DM Sans', sans-serif;
            transition: .3s;
        }

        .category-btn:hover,
        .category-btn.active {
            background: var(--pink-dark);
            border-color: var(--pink-dark);
            color: white;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 25px;
            max-width: 1150px;
            margin: 0 auto;
        }

        .product-card {
            padding: 10px;
            border-radius: 22px;
            background: var(--white);
            border: 1px solid #f1dddd;
            box-shadow: 0 8px 25px rgba(80, 45, 45, .04);
            overflow: hidden;
            transition: .3s;
        }

        .product-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 30px rgba(80, 45, 45, .09);
        }

        .product-card[hidden] {
            display: none;
        }

        .product-image {
            width: 100%;
            height: 260px;
            object-fit: cover;
            display: block;
            border-radius: 16px;
            background: var(--pink-soft);
        }

        .product-image.placeholder {
            display: grid;
            place-items: center;
            color: var(--pink-hover);
            font-family: 'Playfair Display', serif;
            font-size: 21px;
            text-align: center;
            padding: 12px;
        }

        .product-info {
            padding: 17px 10px 8px;
        }

        .category-label {
            display: inline-block;
            padding: 5px 12px;
            background: var(--pink-soft);
            color: #986b70;
            border-radius: 20px;
            font-size: 11px;
            margin-bottom: 12px;
        }

        .product-info h3 {
            font: 600 21px 'Playfair Display', serif;
            margin-bottom: 9px;
        }

        .description {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.7;
            min-height: 42px;
        }

        .price {
            font-size: 15px;
            font-weight: 700;
            color: var(--pink-hover);
            margin: 15px 0;
        }

        .product-link {
            display: block;
            text-align: center;
            padding: 11px;
            border-radius: 25px;
            background: var(--pink-medium);
            color: var(--text);
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            transition: .3s;
        }

        .product-link:hover {
            background: var(--pink-hover);
            color: white;
        }

        .empty-message {
            grid-column: 1 / -1;
            text-align: center;
            padding: 45px 20px;
            border-radius: 20px;
            background: var(--white);
            border: 1px solid #f1dddd;
            color: var(--muted);
            line-height: 1.8;
        }

        .empty-message[hidden] {
            display: none;
        }

        footer {
            padding: 30px 7%;
            background: var(--pink-medium);
            text-align: center;
            font-size: 13px;
            color: var(--text);
        }

        @media (max-width: 900px) {
            .product-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 18px;
            }
        }

        @media (max-width: 760px) {
            header {
                flex-direction: column;
                align-items: center;
                padding: 18px 5%;
            }

            nav {
                justify-content: center;
            }

            nav a {
                padding: 8px 11px;
                font-size: 12px;
            }

            .hero {
                padding: 65px 6%;
            }

            .collection-section {
                padding: 45px 5% 60px;
            }

            .product-image {
                height: 210px;
            }
        }

        @media (max-width: 480px) {
            .product-grid {
                grid-template-columns: 1fr;
            }

            .product-image {
                height: 270px;
            }

            .section-heading h2 {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>

<header>
    <div>
        <div class="logo">Yn Hijab Fashion</div>
        <div class="tagline">Elegance In Every Thread</div>
    </div>

    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('collection') }}" class="active">Collection</a>
        <a href="{{ route('why-us') }}">Why Us</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>
</header>

<section class="hero">
    <div class="eyebrow">OUR COLLECTION</div>
    <h1>Premium Hijab Collection</h1>
    <p>
        Discover elegant hijab collections designed for
        modern muslimah. Temukan pilihan terbaik untuk
        melengkapi penampilanmu.
    </p>
</section>

<main class="collection-section">

    <div class="section-heading">
        <div class="eyebrow">FIND YOUR STYLE</div>
        <h2>Explore Our Collection</h2>
        <p>Temukan koleksi favoritmu di sini.</p>
    </div>

    <div class="categories">
        <button type="button" class="category-btn active" data-category="all">
            All
        </button>

        @foreach(($products ?? collect())->pluck('category')->filter()->unique() as $category)
            <button
                type="button"
                class="category-btn"
                data-category="{{ strtolower(str_replace(' ', '-', $category)) }}"
            >
                {{ $category }}
            </button>
        @endforeach
    </div>

    <div class="product-grid">

        @forelse(($products ?? collect()) as $product)

            <article
                class="product-card"
                data-category="{{ strtolower(str_replace(' ', '-', $product->category ?? 'lainnya')) }}"
            >

                @if(!empty($product->image))
                    <img
                        class="product-image"
                        src="{{ asset('storage/' . $product->image) }}"
                        alt="{{ $product->name }}"
                        loading="lazy"
                    >
                @else
                    <div class="product-image placeholder">
                        Yn Hijab Fashion
                    </div>
                @endif

                <div class="product-info">

                    <span class="category-label">
                        {{ $product->category ?: 'Collection' }}
                    </span>

                    <h3>{{ $product->name }}</h3>

                    <p class="description">
                        {{ $product->description ?: 'Discover our elegant collection.' }}
                    </p>

                    <p class="price">
                        Rp {{ number_format((float) $product->price, 0, ',', '.') }}
                    </p>

                    <a class="product-link" href="{{ route('contact') }}">
                        Hubungi Kami
                    </a>

                </div>
            </article>

        @empty

            <div class="empty-message">
                Belum ada produk tersedia.<br>
                Silakan kunjungi kembali nanti.
            </div>

        @endforelse

        <div class="empty-message" id="empty-message" hidden>
            Produk untuk kategori ini belum tersedia.
        </div>

    </div>

</main>

<footer>
    © {{ date('Y') }} Yn Hijab Fashion. All Rights Reserved.
</footer>

<script>
    const categoryButtons = document.querySelectorAll('.category-btn');
    const productCards = document.querySelectorAll('.product-card');
    const emptyMessage = document.getElementById('empty-message');

    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            const selectedCategory = button.dataset.category;
            let visibleCount = 0;

            categoryButtons.forEach(item => {
                item.classList.remove('active');
            });

            button.classList.add('active');

            productCards.forEach(card => {
                const matches = selectedCategory === 'all' ||
                    card.dataset.category === selectedCategory;

                card.hidden = !matches;

                if (matches) {
                    visibleCount++;
                }
            });

            emptyMessage.hidden = visibleCount > 0;
        });
    });
</script>

</body>
</html>
