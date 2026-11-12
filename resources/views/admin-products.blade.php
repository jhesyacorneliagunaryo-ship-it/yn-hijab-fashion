
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Produk - Yn Hijab Fashion</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            background: #fff5f3;
            color: #302323;
            font-family: 'DM Sans', sans-serif;
        }
        header {
            padding: 20px 6%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 14px;
            flex-wrap: wrap;
            background: #fffdfb;
            border-bottom: 1px solid #f0d9d5;
        }
        .logo { font: 700 25px 'Playfair Display', serif; }
        header a { color: #493332; text-decoration: none; font-size: 14px; }
        main { max-width: 1100px; margin: 42px auto; padding: 0 22px; }
        .eyebrow { letter-spacing: 4px; font-size: 11px; }
        h1 { font: 700 clamp(34px, 5vw, 50px) 'Playfair Display', serif; margin: 12px 0; }
        .intro { color: #796664; line-height: 1.8; }
        .toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
            margin: 28px 0;
        }
        .btn {
    display: inline-block;
    padding: 12px 18px;
    border: 0;
    border-radius: 30px;
    background: #D8A0A6;
    color: #38272A;
    text-decoration: none;
    font: 600 14px 'DM Sans', sans-serif;
    cursor: pointer;
    transition: 0.3s ease;
}

.btn:hover {
    background: #C98791;
    color: #FFFFFF;
}

.btn-light {
    background: #F3E1E1;
}
        .btn-light { background: #f6e6e2; }
        .count { color: #796664; font-size: 14px; }
 .success {
    padding: 15px 18px;
    background: #F8E6E7;
    color: #89515A;
    border: 1px solid #EAC9CD;
    border-radius: 12px;
    margin: 20px 0;
}
        .products {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
        }
        .product {
            min-width: 0;
            overflow: hidden;
            background: #fffdfb;
            border: 1px solid #efdbd7;
            border-radius: 18px;
        }
        .product img, .no-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
            background: #f5dedb;
        }
        .no-image {
            display: grid;
            place-items: center;
            color: #927d79;
        }
        .details { padding: 20px; }
        .category { font-size: 10px; letter-spacing: 2px; color: #a36d68; }
        h2 { font: 600 24px 'Playfair Display', serif; margin: 9px 0; overflow-wrap: anywhere; }
        .description { color: #796664; font-size: 13px; line-height: 1.7; overflow-wrap: anywhere; }
        .price { font-weight: 700; margin: 14px 0; }
        .actions { display: flex; gap: 9px; flex-wrap: wrap; }
        .delete {
    background: #F3DADB;
    color: #963F50;
}

.delete:hover {
    background: #E8BFC4;
    color: #71303C;
}
        .delete-form { margin: 0; }
        .empty {
            grid-column: 1 / -1;
            padding: 55px 20px;
            text-align: center;
            border: 1px dashed #dfbbb5;
            border-radius: 18px;
            background: #fffdfb;
        }
        .empty h2 { font-size: 30px; }
        footer { padding: 30px; text-align: center; color: #927d79; font-size: 12px; }
        @media(max-width: 800px) {
            .products { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }
        @media(max-width: 520px) {
            .products { grid-template-columns: 1fr; }
            .product img, .no-image { height: 250px; }
        }
    </style>
</head>
<body>
<header>
    <div class="logo">Yn Hijab Fashion</div>
    <a href="/admin/dashboard">← Kembali ke Dashboard</a>
</header>

<main>
    <div class="eyebrow">ADMIN COLLECTION</div>
    <h1>Kelola Produk.</h1>
    <p class="intro">Atur koleksi fashion yang tampil di halaman pengunjung.</p>

    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="success" style="background:#fff0ef;color:#9b3737">
            Ada data yang perlu diperiksa. Silakan coba lagi.
        </div>
    @endif

    <div class="toolbar">
        <span class="count">Total {{ $products->count() }} produk</span>
        <a class="btn" href="/admin/products/create">+ Tambah Produk</a>
    </div>

    <div class="products">
        @forelse($products as $product)
            <article class="product">
                @if($product->image)
                    <img
                        src="{{ asset('storage/' . $product->image) }}"
                        alt="{{ $product->name }}"
                        loading="lazy">
                @else
                    <div class="no-image">Belum ada foto produk</div>
                @endif

                <div class="details">
                    <div class="category">
                        {{ $product->category ?: 'YN COLLECTION' }}
                    </div>

                    <h2>{{ $product->name }}</h2>

                    <p class="description">
                        {{ $product->description ?: 'Belum ada deskripsi produk.' }}
                    </p>

                    <div class="price">
                        Rp {{ number_format((float) $product->price, 0, ',', '.') }}
                    </div>

                    <div class="actions">
                        <form class="delete-form"
                              action="/admin/products/{{ $product->id }}"
                              method="POST"
                              onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn delete">Hapus</button>
                        </form>
                    </div>
                </div>
            </article>
        @empty
            <div class="empty">
                <div style="font-size:38px">♡</div>
                <h2>Belum Ada Produk</h2>
                <p class="intro">Yuk, tambahkan koleksi pertama Yn Hijab Fashion!</p>
                <a class="btn" href="/admin/products/create">+ Tambah Produk</a>
            </div>
        @endforelse
    </div>
</main>

<footer>© {{ date('Y') }} Yn Hijab Fashion</footer>
</body>
</html>
