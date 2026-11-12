
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Yn Hijab Fashion</title>

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

        html {
            scroll-behavior: smooth;
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
            background: rgba(255, 245, 243, 0.95);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid #f4dddd;
        }

        .logo {
            font: 700 25px 'Playfair Display', serif;
            color: var(--text);
            text-decoration: none;
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
            font-size: 13px;
            font-weight: 600;
            padding: 9px 16px;
            border-radius: 30px;
            transition: .3s;
        }

        nav a:hover,
        nav a.active {
            background: var(--pink-medium);
        }

        .story-heading {
            text-align: center;
            padding: 90px 7% 85px;
            background: linear-gradient(135deg, #fff5f3, #ffe4e3);
        }

        .eyebrow {
            color: var(--pink-hover);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 5px;
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
        }

        .story-heading h1 {
            font-size: clamp(36px, 5vw, 58px);
            margin: 18px 0;
        }

        .story-heading p {
            max-width: 600px;
            margin: auto;
            color: var(--muted);
            font-size: 15px;
            line-height: 1.8;
        }

        .vision-mission {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 25px;
            padding: 65px 9%;
            background: var(--pink-medium);
        }

        .info-card {
            padding: 35px;
            min-height: 210px;
            border-radius: 25px;
            background: var(--pink-bg);
            box-shadow: 0 10px 30px rgba(100, 55, 55, .06);
        }

        .info-card h2 {
            font-size: 32px;
            margin-bottom: 18px;
        }

        .info-card p {
            color: var(--muted);
            line-height: 1.9;
            font-size: 14px;
        }

        .values-section {
            padding: 75px 7%;
            text-align: center;
        }

        .section-title {
            font-size: 38px;
            margin: 12px 0;
        }

        .section-description {
            color: var(--muted);
            font-size: 14px;
            line-height: 1.8;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .value-card {
            padding: 35px 15px;
            min-height: 175px;
            border-radius: 22px;
            background: var(--white);
            border: 1px solid #f2dddd;
            transition: .3s;
        }

        .value-card:hover {
            transform: translateY(-7px);
            background: var(--pink-soft);
        }

        .value-card span {
            font-size: 30px;
        }

        .value-card h3 {
            font-size: 23px;
            margin-top: 17px;
        }

        .journey-section {
            padding: 70px 9%;
            background: #ffe4e3;
        }

        .journey-section > h2 {
            text-align: center;
            font-size: 38px;
            margin-bottom: 40px;
        }

        .journey-list {
            max-width: 750px;
            margin: auto;
        }

        .journey-item {
            display: flex;
            align-items: center;
            gap: 22px;
            margin: 25px 0;
            padding: 22px;
            border-radius: 18px;
            background: rgba(255, 255, 255, .65);
        }

        .year {
            flex: 0 0 58px;
            height: 58px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            background: var(--pink-dark);
            color: white;
            font-weight: 700;
            font-size: 14px;
        }

        .journey-item h3 {
            font: 700 16px 'DM Sans', sans-serif;
            margin-bottom: 7px;
        }

        .journey-item p {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.7;
        }

        .who-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 55px;
            padding: 85px 9%;
        }

        .who-image {
            min-height: 350px;
            display: grid;
            place-items: center;
            border-radius: 25px;
            background: linear-gradient(135deg, #f5c9ca, #ffe4e3);
            color: #8b6666;
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            text-align: center;
            padding: 25px;
        }

        .who-content h2 {
            font-size: 42px;
            margin: 15px 0;
        }

        .who-content p {
            font-size: 14px;
            line-height: 2;
            color: var(--muted);
        }

        footer {
            padding: 30px 7%;
            background: #f5c9ca;
            text-align: center;
            font-size: 13px;
            color: var(--text);
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
                font-size: 12px;
                padding: 8px 11px;
            }

            .story-heading {
                padding: 65px 6%;
            }

            .vision-mission,
            .who-section {
                grid-template-columns: 1fr;
                gap: 20px;
                padding: 45px 6%;
            }

            .values-section,
            .journey-section {
                padding: 55px 6%;
            }

            .values-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 13px;
            }

            .value-card {
                padding: 25px 10px;
            }

            .value-card h3 {
                font-size: 20px;
            }

            .who-image {
                min-height: 250px;
            }

            .who-content h2 {
                font-size: 35px;
            }
        }

        @media (max-width: 400px) {
            nav {
                gap: 3px;
            }

            nav a {
                padding: 8px;
                font-size: 11px;
            }

            .journey-item {
                gap: 13px;
                padding: 15px;
            }

            .year {
                flex-basis: 48px;
                height: 48px;
                font-size: 12px;
            }
        }
    </style>
</head>

<body>

<header>
    <a href="{{ route('home') }}" class="logo">Yn Hijab Fashion</a>

    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}" class="active">About</a>
        <a href="{{ route('collection') }}">Collection</a>
        <a href="{{ route('why-us') }}">Why Us</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>
</header>

<main>

    <section class="story-heading">
        <div class="eyebrow">OUR STORY</div>
        <h1>Elegance in Every Thread</h1>
        <p>
            Every piece we create is inspired by confidence,
            comfort, and timeless beauty.
        </p>
    </section>

    <section class="vision-mission">
        <div class="info-card">
            <h2>Our Vision</h2>
            <p>
                Menjadi brand hijab lokal yang dikenal karena
                kualitas, keanggunan, dan pelayanan terbaik.
            </p>
        </div>

        <div class="info-card">
            <h2>Our Mission</h2>
            <p>
                ✓ Menghadirkan hijab berkualitas.<br>
                ✓ Memberikan pelayanan terbaik.<br>
                ✓ Mengikuti tren fashion muslimah.<br>
                ✓ Menjaga kepuasan pelanggan.
            </p>
        </div>
    </section>

    <section class="values-section">
        <div class="eyebrow">WHAT WE BELIEVE</div>
        <h2 class="section-title">Our Values</h2>
        <p class="section-description">
            Prinsip yang selalu menjadi bagian dari setiap langkah kami.
        </p>

        <div class="values-grid">
            <div class="value-card">
                <span>🤎</span>
                <h3>Elegance</h3>
            </div>

            <div class="value-card">
                <span>⭐</span>
                <h3>Quality</h3>
            </div>

            <div class="value-card">
                <span>🌿</span>
                <h3>Comfort</h3>
            </div>

            <div class="value-card">
                <span>🤝</span>
                <h3>Trust</h3>
            </div>
        </div>
    </section>

    <section class="journey-section">
        <h2>Our Journey</h2>

        <div class="journey-list">

            <div class="journey-item">
                <span class="year">2024</span>
                <div>
                    <h3>YN Hijab Fashion Was Founded</h3>
                    <p>
                        Perjalanan dimulai dengan menghadirkan
                        hijab berkualitas.
                    </p>
                </div>
            </div>

            <div class="journey-item">
                <span class="year">2025</span>
                <div>
                    <h3>Growing Online</h3>
                    <p>
                        Memperluas jangkauan melalui media sosial.
                    </p>
                </div>
            </div>

            <div class="journey-item">
                <span class="year">2026</span>
                <div>
                    <h3>Official Website Launch</h3>
                    <p>
                        Membangun website resmi Yn Hijab Fashion.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="who-section">
        <div class="who-image">
            Yn Hijab Fashion
        </div>

        <div class="who-content">
            <div class="eyebrow">YN HIJAB FASHION</div>
            <h2>Who We Are</h2>

            <p>
                YN Hijab Fashion menghadirkan hijab premium yang
                menggabungkan kenyamanan, kualitas, dan desain elegan
                untuk menemani setiap langkah muslimah Indonesia.
                Kami percaya setiap perempuan berhak tampil percaya
                diri dengan gaya yang sederhana namun berkelas.
            </p>
        </div>
    </section>

</main>

<footer>
    © {{ date('Y') }} Yn Hijab Fashion. All Rights Reserved.
</footer>

</body>
</html>
