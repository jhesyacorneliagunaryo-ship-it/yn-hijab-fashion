
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Yn Hijab Fashion</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; background: #fff5f3; color: #302323; font-family: 'DM Sans', sans-serif; }
        header {
            padding: 22px 6%; background: #fffdfb;
            border-bottom: 1px solid #f0d9d5;
            display: flex; justify-content: space-between; align-items: center;
            gap: 15px; flex-wrap: wrap;
        }
        .logo { font: 700 25px 'Playfair Display', serif; }
        
.logout {
    border: 1px solid #E7C3C5;
    background: #F3E1E1;
    color: #38272A;
    padding: 11px 17px;
    border-radius: 25px;
    cursor: pointer;
    font: inherit;
}

        main { max-width: 1100px; margin: 45px auto; padding: 0 22px; }
        .eyebrow { letter-spacing: 4px; font-size: 11px; }
        h1 { font: 700 clamp(36px, 5vw, 54px) 'Playfair Display', serif; margin: 12px 0; }
        .intro { color: #796664; line-height: 1.8; }
        .cards { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 22px; margin-top: 35px; }
        .card { padding: 30px; border: 1px solid #efdbd7; border-radius: 20px; background: #fffdfb; }
        .symbol { font-size: 30px; }
        h2 { font: 600 27px 'Playfair Display', serif; margin: 18px 0 10px; }
        .card p { color: #796664; line-height: 1.8; font-size: 14px; }
        
.btn {
    display: inline-block;
    margin-top: 12px;
    padding: 12px 19px;
    border-radius: 30px;
    text-decoration: none;
    background: #D8A0A6;
    color: #38272A;
    font-size: 14px;
    font-weight: 700;
    transition: background 0.3s ease;
}

.btn:hover {
    background: #C98791;
}

        .quick { margin-top: 30px; padding: 25px 30px; border-radius: 18px; background: #f8dedb; }
        .quick a { color: #493332; margin-right: 22px; line-height: 2.5; }
        footer { text-align: center; padding: 30px; color: #927d79; font-size: 12px; }
        @media(max-width: 650px) { .cards { grid-template-columns: 1fr; } main { margin-top: 30px; } }
    </style>
</head>
<body>
<header>
    <div class="logo">Yn Hijab Fashion</div>
    <a href="/admin/dashboard">← Dashboard</a>
</header>

<main>
    <div class="eyebrow">ADMINISTRATION</div>
    <h1>Welcome Back.</h1>
    <p class="intro">Selamat datang di dashboard Yn Hijab Fashion. Kelola produk dan konten website kamu dari satu tempat.</p>

    <div class="cards">
        <section class="card">
            <div class="symbol">✿</div>
            <h2>Kelola Produk</h2>
            <p>Tambah koleksi fashion, unggah foto produk, atur harga dan deskripsi, atau hapus produk yang tidak ditampilkan lagi.</p>
            <a class="btn" href="/admin/products">Buka Daftar Produk ↗</a>
            <br>
            <a class="btn" href="/admin/products/create">+ Tambah Produk</a>
        </section>

        <section class="card">
            <div class="symbol">♡</div>
            <h2>Konten Profil</h2>
            <p>Kelola informasi profil yang ingin ditampilkan kepada pengunjung website.</p>
            <a class="btn" href="/admin/profiles">Kelola Konten Profil ↗</a>
        </section>
    </div>

    <section class="quick">
        <strong>Akses Cepat</strong><br>
        <a href="/">Lihat Website Pengunjung ↗</a>
        <a href="/admin/products">Daftar Produk</a>
        <a href="/admin/profiles">Konten Profil</a>
    </section>
</main>

<footer>© {{ date('Y') }} Yn Hijab Fashion · Admin Dashboard</footer>
</body>
</html>
