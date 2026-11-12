
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why Us | Yn Hijab Fashion</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --pink-bg: #fff0f5;
            --pink-soft: #ffe0eb;
            --pink-medium: #ffb6d0;
            --pink-dark: #ff8fb5;
            --pink-hover: #f46f9e;
            --text: #4a2937;
            --muted: #856575;
            --white: #ffffff;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--pink-bg);
            color: var(--text);
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
            background: rgba(255, 240, 245, .96);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid #ffd1e1;
        }

        .logo {
            color: var(--text);
            text-decoration: none;
            font: 700 25px 'Playfair Display', serif;
            white-space: nowrap;
        }

        nav {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        nav a {
            text-decoration: none;
            color: var(--text);
            padding: 9px 15px;
            border-radius: 25px;
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
            padding: 85px 7%;
            background: linear-gradient(135deg, #fff0f5, #ffd6e5, #ffc2d8);
        }

        .eyebrow {
            color: var(--pink-hover);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 5px;
        }

        h1, h2 {
            font-family: 'Playfair Display', serif;
        }

        .hero h1 {
            font-size: clamp(36px, 5vw, 55px);
            margin: 18px 0;
        }

        .hero p {
            max-width: 620px;
            margin: auto;
            color: var(--muted);
            font-size: 14px;
            line-height: 1.9;
        }

        .main-section {
            padding: 70px 7%;
            text-align: center;
            background: #fff8fa;
        }

        .section-title {
            font-size: 38px;
            margin: 12px 0;
        }

        .section-description {
            color: var(--muted);
            font-size: 14px;
            line-height: 1.8;
            max-width: 600px;
            margin: auto;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 25px;
            max-width: 1100px;
            margin: 45px auto 0;
        }

        .card {
            padding: 38px 25px;
            border-radius: 24px;
            background: var(--white);
            border: 1px solid #ffd3e2;
            box-shadow: 0 8px 25px rgba(244, 111, 158, .10);
            transition: .3s;
        }

        .card:hover {
            transform: translateY(-7px);
            background: #ffe5ee;
            box-shadow: 0 15px 30px rgba(244, 111, 158, .18);
        }

        .card-icon {
            width: 70px;
            height: 70px;
            display: grid;
            place-items: center;
            margin: 0 auto 22px;
            border-radius: 50%;
            background: var(--pink-soft);
            font-size: 32px;
        }

        .card h2 {
            font-size: 24px;
            margin-bottom: 12px;
        }

        .card p {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.9;
        }

        .closing-section {
            padding: 60px 7%;
            background: linear-gradient(135deg, #ffb6d0, #ffc9dc);
            text-align: center;
        }

        .closing-section h2 {
            font-size: 32px;
            margin-bottom: 12px;
        }

        .closing-section p {
            max-width: 600px;
            margin: auto;
            font-size: 14px;
            line-height: 1.9;
            color: #634e50;
        }

        .closing-link {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 25px;
            border-radius: 30px;
            background: #ffffff;
            color: var(--text);
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            transition: .3s;
        }

        .closing-link:hover {
            background: var(--pink-hover);
            color: white;
        }

        footer {
            padding: 30px 7%;
            background: #ffe0eb;
            text-align: center;
            font-size: 13px;
            color: var(--muted);
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

            .main-section {
                padding: 55px 6%;
            }

            .cards {
                grid-template-columns: 1fr;
                gap: 18px;
                margin-top: 32px;
            }

            .card {
                padding: 32px 22px;
            }

            .section-title {
                font-size: 32px;
            }

            .closing-section {
                padding: 50px 6%;
            }
        }
    </style>
</head>

<body>

<header>
    <a class="logo" href="{{ route('home') }}">Yn Hijab Fashion</a>

    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('collection') }}">Collection</a>
        <a class="active" href="{{ route('why-us') }}">Why Us</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>
</header>

<main>

    <section class="hero">
        <div class="eyebrow">WHY YN HIJAB FASHION</div>

        <h1>Why Choose Us?</h1>

        <p>
            Yn Hijab Fashion hadir untuk menemani penampilanmu
            dengan koleksi hijab yang nyaman, menarik, dan cocok
            untuk berbagai aktivitas sehari-hari.
            Temukan keanggunan dalam setiap pilihan.
        </p>
    </section>

    <section class="main-section">

        <div class="eyebrow">OUR ADVANTAGES</div>

        <h2 class="section-title">What Makes Us Special?</h2>

        <p class="section-description">
            Kami percaya bahwa setiap detail memiliki arti.
            Karena itu, kami menghadirkan pilihan yang mengutamakan
            kenyamanan dan keindahan.
        </p>

        <div class="cards">

            <div class="card">
                <div class="card-icon">✨</div>
                <h2>Desain Menarik</h2>
                <p>
                    Pilihan hijab dengan desain yang cantik,
                    elegan, dan mudah dipadukan dengan berbagai
                    gaya penampilan.
                </p>
            </div>

            <div class="card">
                <div class="card-icon">🌸</div>
                <h2>Nyaman Dipakai</h2>
                <p>
                    Temukan pilihan hijab untuk menemani kegiatan
                    sehari-hari dengan kenyamanan dan gaya.
                </p>
            </div>

            <div class="card">
                <div class="card-icon">💗</div>
                <h2>Pilihan Beragam</h2>
                <p>
                    Jelajahi koleksi hijab sesuai selera dan
                    kebutuhanmu untuk berbagai kesempatan.
                </p>
            </div>

        </div>

    </section>

    <section class="closing-section">
        <h2>Find Your Elegance</h2>

        <p>
            Lengkapi penampilanmu dengan koleksi Yn Hijab Fashion.
            Temukan pilihan favoritmu dan jadikan setiap penampilan
            lebih istimewa.
        </p>

        <a href="{{ route('collection') }}" class="closing-link">
            Explore Collection
        </a>
    </section>

</main>

<footer>
    © {{ date('Y') }} Yn Hijab Fashion. All Rights Reserved.
</footer>

</body>
</html>
