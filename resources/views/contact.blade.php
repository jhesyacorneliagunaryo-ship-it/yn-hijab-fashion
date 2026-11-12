
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Yn Hijab Fashion</title>

    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fffafa;
            color: #493638;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            padding: 20px 5%;
            background: #FFDADA;
        }

        .logo {
            color: #493638;
            text-decoration: none;
            font-weight: bold;
            font-size: 22px;
        }

        nav {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        nav a {
            text-decoration: none;
            color: #493638;
            padding: 10px 13px;
            border-radius: 25px;
            font-size: 13px;
            font-weight: bold;
        }

        nav a:hover, nav a.active {
            background: #FF969B;
        }

        main {
            max-width: 900px;
            margin: auto;
            padding: 65px 5%;
            text-align: center;
        }

        h1 {
            color: #b76570;
            font-size: 42px;
        }

        .intro {
            line-height: 1.8;
            margin-bottom: 35px;
        }

        .contacts {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .contact-card {
            padding: 28px 18px;
            background: #fff0f0;
            border-radius: 18px;
        }

        .contact-card h2 {
            color: #b76570;
        }

        .contact-card a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 18px;
            border-radius: 25px;
            background: #FF969B;
            color: #493638;
            text-decoration: none;
            font-weight: bold;
        }

        footer {
            text-align: center;
            padding: 25px;
            background: #FFDADA;
        }

        @media (max-width: 600px) {
            header { align-items: flex-start; flex-direction: column; }
            h1 { font-size: 32px; }
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
        <a href="{{ route('why-us') }}">Why Us</a>
        <a class="active" href="{{ route('contact') }}">Contact</a>
    </nav>
</header>

<main>
    <h1>Contact Us</h1>

    <p class="intro">
        Yuk, terhubung dengan Yn Hijab Fashion melalui media sosial kami!
        Klik pilihan di bawah untuk mengunjungi akun kami.
    </p>

    <div class="contacts">
        <div class="contact-card">
            <h2>Instagram</h2>
            <p>Ikuti kabar dan koleksi terbaru kami.</p>
            <a href="https://instagram.com/" target="_blank" rel="noopener noreferrer">
                Kunjungi Instagram
            </a>
        </div>

        <div class="contact-card">
            <h2>TikTok</h2>
            <p>Lihat konten dan inspirasi fashion hijab.</p>
            <a href="https://www.tiktok.com/" target="_blank" rel="noopener noreferrer">
                Kunjungi TikTok
            </a>
        </div>

        <div class="contact-card">
            <h2>WhatsApp</h2>
            <p>Hubungi kami melalui WhatsApp.</p>
            <a href="https://wa.me/" target="_blank" rel="noopener noreferrer">
                Hubungi WhatsApp
            </a>
        </div>
    </div>
</main>

<footer>
    © {{ date('Y') }} Yn Hijab Fashion
</footer>
</body>
</html>
