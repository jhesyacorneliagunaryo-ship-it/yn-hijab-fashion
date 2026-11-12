
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk — Yn Hijab Fashion</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            background: #fff5f3;
            color: #302323;
            font-family: 'DM Sans', sans-serif;
        }
        header {
            padding: 22px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #f0d9d5;
            background: #fffaf8;
        }
        .logo { font: 700 25px 'Playfair Display', serif; }
        header a, .back {
            text-decoration: none;
            color: #493332;
            font-size: 14px;
        }
        main {
            max-width: 850px;
            margin: 55px auto;
            padding: 0 22px;
        }
        .eyebrow { font-size: 11px; letter-spacing: 4px; }
        h1 {
            font: 600 clamp(35px, 5vw, 53px) 'Playfair Display', serif;
            margin: 12px 0;
        }
        .intro { color: #796664; line-height: 1.8; }
        .form-card {
            background: #fffdfb;
            border: 1px solid #f0ded9;
            border-radius: 20px;
            padding: 32px;
            margin-top: 30px;
            box-shadow: 0 12px 35px #57352a0a;
        }
        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .field { margin-bottom: 21px; }
        label {
            display: block;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 9px;
        }
        input, textarea {
            width: 100%;
            padding: 14px;
            border: 1px solid #e8d4d0;
            border-radius: 10px;
            background: #fffaf8;
            font: inherit;
            font-size: 14px;
            color: #302323;
        }
        input:focus, textarea:focus {
            outline: 2px solid #f4c4c0;
            border-color: #d99b96;
        }
        textarea { min-height: 120px; resize: vertical; }
        .hint { font-size: 12px; color: #927d79; margin-top: 8px; }
        .actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 8px;
        }
        .btn {
            display: inline-block;
            border: 0;
            border-radius: 30px;
            padding: 13px 22px;
            font: 600 14px 'DM Sans', sans-serif;
            text-decoration: none;
            cursor: pointer;
        }
        .primary { background: #efb9b5; color: #302323; }
        .secondary { background: #f6e9e5; color: #493332; }
        .errors {
            padding: 15px 20px;
            background: #fff0ef;
            border: 1px solid #e9aaa5;
            border-radius: 12px;
            color: #a13232;
            margin-bottom: 22px;
        }
        footer {
            text-align: center;
            color: #927d79;
            padding: 20px;
            font-size: 12px;
        }
        @media (max-width: 600px) {
            .grid { grid-template-columns: 1fr; gap: 0; }
            .form-card { padding: 22px; }
            main { margin-top: 35px; }
        }
    </style>
</head>
<body>
<header>
    <div class="logo">Yn Hijab Fashion</div>
    <a href="/admin/products">← Daftar Produk</a>
</header>

<main>
    <div class="eyebrow">ADMIN COLLECTION</div>
    <h1>Tambah Produk Baru.</h1>
    <p class="intro">Tambahkan koleksi terbaru agar pengunjung dapat melihatnya di halaman utama.</p>

    <div class="form-card">
        @if ($errors->any())
            <div class="errors">
                <strong>Periksa kembali data produk:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/admin/products" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="field">
                <label for="name">Nama Produk *</label>
                <input id="name" type="text" name="name"
                       value="{{ old('name') }}"
                       placeholder="Contoh: Pashmina Premium" required>
            </div>

            <div class="grid">
                <div class="field">
                    <label for="price">Harga (Rp) *</label>
                    <input id="price" type="number" name="price"
                           min="0" step="0.01"
                           value="{{ old('price') }}"
                           placeholder="75000" required>
                </div>

                <div class="field">
                    <label for="category">Kategori</label>
                    <input id="category" type="text" name="category"
                           value="{{ old('category') }}"
                           placeholder="Pashmina, Segi Empat, dll.">
                </div>
            </div>

            <div class="field">
                <label for="description">Deskripsi Produk</label>
                <textarea id="description" name="description"
                          placeholder="Ceritakan bahan, warna, dan keunggulan produk...">{{ old('description') }}</textarea>
            </div>

            <div class="field">
                <label for="image">Foto Produk</label>
                <input id="image" type="file" name="image"
                       accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp">
                <p class="hint">Format JPG, PNG, atau WEBP. Ukuran maksimal 2 MB.</p>
            </div>

            <div class="actions">
                <button type="submit" class="btn primary">Simpan Produk ↗</button>
                <a href="/admin/products" class="btn secondary">Batal</a>
            </div>
        </form>
    </div>
</main>

<footer>© {{ date('Y') }} Yn Hijab Fashion</footer>
</body>
</html>
