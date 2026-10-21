
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Konten Profil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
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
            box-sizing: border-box;
            padding: 12px;
            margin: 8px 0 18px;
            border: 1px solid #d1d5db;
            border-radius: 7px;
            font-size: 15px;
        }

        textarea {
            min-height: 150px;
        }

        button, a {
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
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Konten Profil</h1>

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form
            action="{{ url('/admin/profiles/' . $profile->id) }}"
            method="POST"
        >
            @csrf
            @method('PUT')

            <label for="title">Judul Profil</label>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title', $profile->title) }}"
                required
            >

            <label for="description">Deskripsi Profil</label>
            <textarea
                id="description"
                name="description"
                required
            >{{ old('description', $profile->description) }}</textarea>

            <button type="submit">Simpan Perubahan</button>
            <a href="{{ url('/admin/profiles') }}">Kembali</a>
        </form>
    </div>
</body>
</html>
