
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | Web Profile</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #fce7f3, #e0e7ff);
        }
        .login-box {
            width: 90%;
            max-width: 390px;
            padding: 35px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 12px 35px #6b728033;
        }
        h1 { text-align: center; color: #4338ca; }
        p { text-align: center; color: #6b7280; }
        label { display: block; margin: 18px 0 7px; }
        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 9px;
        }
        button {
            width: 100%;
            margin-top: 24px;
            padding: 13px;
            border: 0;
            border-radius: 9px;
            color: white;
            background: #6366f1;
            cursor: pointer;
        }
        button:hover { background: #4338ca; }
        .error { color: #dc2626; text-align: left; }
    </style>
</head>
<body>
    <div class="login-box">
        <h1>Admin Login</h1>
        <p>Silakan masuk untuk mengelola website</p>

        @if ($errors->any())
            <p class="error">{{ $errors->first() }}</p>
        @endif

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <label for="email">Email Admin</label>
            <input id="email" type="email" name="email"
                   value="{{ old('email') }}" required>

            <label for="password">Password</label>
            <input id="password" type="password" name="password"
                   required>

            <button type="submit">Masuk</button>
        </form>
    </div>
</body>
</html>
