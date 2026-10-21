
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Produk | Yn Hijab Fashion</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: #573b46;
            background: #fff6f7;
        }

        .navbar {
            background: #ffb8c1;
            padding: 22px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 14px;
        }

        .navbar h2 {
            margin: 0;
            color: #633746;
        }

        .navbar a {
            color: #633746;
            text-decoration: none;
            font-weight: bold;
            margin-left: 18px;
        }

        .container {
            max-width: 1200px;
            margin: 35px auto;
            padding: 0 22px;
        }

        .heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 25px;
        }

        .heading h1 {
            margin-bottom: 5px;
        }

        .heading p {
            color: #997682;
            margin-top: 0;
        }

        .btn {
            display: inline-block;
            padding: 12px 18px;
            border: none;
            border-radius: 10px;
            background: #d87591;
            color: white;
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-delete {
            background: #fff0f2;
            color: #b94360;
            border: 1px solid #f2c5cf;
        }

        .success {
            background: #e7f7e9;
            color: #286638;
            padding: 14px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 24px;
        }

        .product {
            background: white;
            border: 1px solid #f3dfe4;
            border-radius: 17px;
            overflow: hidden;
            box-shadow: 0 5px 18px #eddde2;
        }

        .product img,
        .no-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #ffe2e7;
            color: #ad7585;
        }

        .product-content {
            padding: 18px;
        }

        .category {
            display: inline-block;
            padding: 5px 10px;
            background: #ffedf1;
            color: #b65f7b;
            border-radius: 20px;
            font-size: 12px;
        }

        .product h3 {
            margin: 12px 0 7px;
        }

        .price {
            color: #c65e80;
            font-size: 19px;
            font-weight: bold;
        }

        .description {
            color: #8c737d;
            overflow-wrap: anywhere;
        }

        .actions {
            margin-top: 16px;
        }

        .empty {
            text-align: center;
            padding: 45px 20px;
            background: white;
            border-radius: 16px;
            grid-column: 1 / -1;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #997682;
        }

        @media (max-width: 500px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar a {
                margin-left: 0;
                margin-right: 12px;
            }
        }
    </style>
</head>

<body>

<header class="navbar">
    <h2>Yn Hijab Fashion</h2>
    <nav>
        <a href="/admin/profiles">Konten Profil</a>
        <a href="/admin/products">Produk</a>
    </nav>
</header>

<main class="container">

    <div class="heading">
        <div>
            <h1>Daftar Produk</h1>
            <p>Kelola koleksi fashion hijab kamu di sini.</p>
        </div>

        <a class="btn" href="/admin/products/create">
            + Tambah Produk
        </a>
    </div>

    @if (session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <section class="products">
        @forelse ($products as $product)
            <article class="product">

                @if ($product->image)
                    <img
                        src="{{ asset('storage/' . $product->image) }}"
                        alt="{{ $product->name }}"
                    >
                @else
                    <div class="no-image">Foto belum tersedia</div>
                @endif

                <div class="product-content">

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

                    <div class="actions">
                        <form
                            action="/admin/products/{{ $product->id }}"
                            method="POST"
                            onsubmit="return confirm('Yakin ingin menghapus produk ini?')"
                        >
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-delete" type="submit">
                                Hapus Produk
                            </button>
                        </form>
                    </div>

                </div>
            </article>
        @empty
            <div class="empty">
                <h3>Belum Ada Produk</h3>
                <p>Yuk, tambahkan produk pertamamu!</p>
                <a class="btn" href="/admin/products/create">
                    Tambah Produk
                </a>
            </div>

            
        @endforelse
    </section>

</main>

<footer>
    &copy; {{ date('Y') }} Yn Hijab Fashion
</footer>

</body>
</html>
