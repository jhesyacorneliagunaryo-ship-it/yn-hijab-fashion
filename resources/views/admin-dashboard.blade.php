<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin | Yn Hijab Fashion</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fff5f8;
            color: #573b46;
        }

        header {
            background: #ffb8c1;
            color: #633746;
            padding: 24px 6%;
        }

        header h1 {
            margin: 0 0 8px;
        }

        header p {
            margin: 0;
        }

        main {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 5px 20px #eddde2;
        }

        .card h2 {
            margin-top: 0;
            color: #b64e72;
        }

        .buttons {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 25px;
        }

        .buttons form {
            margin: 0;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 44px;
            padding: 12px 18px;
            border: none;
            border-radius: 10px;
            color: white;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            font-family: inherit;
            cursor: pointer;
            transition: 0.2s;
        }

        .btn:hover {
            opacity: 0.85;
            transform: translateY(-1px);
        }

        .btn-profile {
            background: #bd6685;
        }

        .btn-products {
            background: #d87591;
        }

        .btn-logout {
            background: #a9445d;
        }

        @media (max-width: 520px) {
            .buttons {
                flex-direction: column;
                align-items: stretch;
            }

            .buttons .btn,
            .buttons form {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>Dashboard Admin</h1>
        <p>Kelola konten Yn Hijab Fashion</p>
    </header>

    <main>
        <section class="card">
            <h2>Selamat datang, Admin! 🎀</h2>
            <p>Login kamu berhasil.</p>
            <p>Pilih menu di bawah untuk mengelola website kamu.</p>

            <div class="buttons">
                <a class="btn btn-profile" href="/admin/profiles">
                    ← Kembali ke My Profile
                </a>

                <a class="btn btn-products" href="/admin/products">
                    Kelola Produk
                </a>

                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button class="btn btn-logout" type="submit">
                        Keluar
                    </button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>
```