
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk - Yn Hijab Fashion</title>
    <style>
        body {
            margin: 0;
            padding: 30px 16px;
            font-family: Arial, sans-serif;
            background: #fff5fa;
            color: #493348;
        }
        .container {
            max-width: 650px;
            margin: 20px auto;
            padding: 30px;
            background: white;
            border-radius: 18px;
            box-shadow: 0 5px 25px #ead6e5;
        }
        h1 { color: #c04d91; }
        label {
            display: block;
            margin-top: 18px;
            font-weight: bold;
        }
        input, textarea {
            box-sizing: border-box;
            width: 100%;
            margin-top: 8px;
            padding: 12px;
            border: 1px solid #e5bfd8;
            border-radius: 9px;
            font: inherit;
        }
        textarea { min-height: 100px; }
        button, .back {
            display: inline-block;
            margin-top: 22px;
            padding: 12px 18px;
            border: 0;
            border-radius: 9px;
            background: #d45a9e;
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 15px;
        }
        .back { background: #eee3f7; color: #75449c; }
        .error { color: #c62828; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Produk 🌸</h1>
        <p>Tambahkan koleksi terbaru Yn Hijab Fashion.</p>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/admin/products" method="POST"
              enctype="multipart/form-data">
            @csrf

            <label>Nama Produk *</label>
            <input type="text" name="name"
                   value="{{ old('name') }}" required>

            <label>Harga Produk (Rp) *</label>
            <input type="number" name="price" min="0" step="0.01"
                   value="{{ old('price') }}" required>

            <label>Kategori</label>
            <input type="text" name="category"
                   value="{{ old('category') }}"
                   placeholder="Contoh: Pashmina">

            <label>Deskripsi</label>
            <textarea name="description"
                      placeholder="Deskripsi produk...">{{ old('description') }}</textarea>

            <label>Foto Produk</label>
            <input type="file" name="image"
                   accept=".jpg,.jpeg,.png,.webp">

            <button type="submit">Simpan Produk</button>
            <a class="back" href="/admin/products">Kembali</a>
        </form>
    </div>
</body>
</html>
