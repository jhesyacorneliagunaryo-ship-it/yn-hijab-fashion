
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Konten Profil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            margin: 0;
            padding: 30px;
            color: #1f2937;
        }

        .container {
            max-width: 650px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin: 8px 0 18px;
            box-sizing: border-box;
            border: 1px solid #d1d5db;
            border-radius: 7px;
            font-size: 15px;
        }

        textarea {
            min-height: 150px;
            resize: vertical;
        }

        button, .back {
            display: inline-block;
            padding: 11px 16px;
            border: none;
            border-radius: 7px;
            background: #4338ca;
            color: white;
            text-decoration: none;
            cursor: pointer;
        }

        .error {
            color: #dc2626;
            margin-bottom: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Konten Profil</h1>
        <p>Masukkan informasi yang ingin ditampilkan di website.</p>

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ url('/admin/profiles') }}" method="POST">
            @csrf

            <label for="title">Judul Profil</label>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
                placeholder="Contoh: Tentang Saya"
                required
            >

            <label for="description">Deskripsi Profil</label>
            <textarea
                id="description"
                name="description"
                placeholder="Tulis deskripsi profil di sini..."
                required
            >{{ old('description') }}</textarea>

            <button type="submit">Simpan Konten</button>
            <a class="back" href="{{ url('/admin/profiles') }}">Kembali</a>
        </form>
    </div>
</body>
</html>
