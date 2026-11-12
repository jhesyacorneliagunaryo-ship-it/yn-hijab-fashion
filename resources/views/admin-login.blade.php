
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | Yn Hijab Fashion</title>

    <style>
        .password-wrapper {
    position: relative;
    width: 100%;
}

.password-wrapper input {
    width: 100%;
    padding-right: 48px;
}


.password-wrapper {
    position: relative;
    width: 100%;
}

.password-wrapper input {
    width: 100%;
    padding: 12px 48px 12px 12px;
}

.password-wrapper .toggle-password {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    width: auto;
    height: auto;
    margin: 0;
    padding: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: none;
    border-radius: 0;
    background: transparent;
    color: #8b6268;
    cursor: pointer;
    line-height: 1;
}

.password-wrapper .toggle-password:hover {
    background: transparent;
    color: #c46f7a;
}


.toggle-password:hover {
    color: #c46f7a;
}
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #FFF5F4, #E8C1C4);
            padding: 20px;
        }

        .login-box {
            width: 90%;
            max-width: 390px;
            padding: 35px;
            background: #FFFCFB;
            border: 1px solid #EAD0D0;
            border-radius: 20px;
            box-shadow: 0 12px 35px rgba(135, 83, 91, 0.15);
        }

        h1 {
            text-align: center;
            color: #B87580;
            margin-bottom: 10px;
        }

        p {
            text-align: center;
            color: #796466;
            line-height: 1.6;
        }

        label {
            display: block;
            margin: 18px 0 7px;
            color: #493638;
            font-weight: 600;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #E2C4C7;
            border-radius: 9px;
            background: #FFFAFA;
            outline: none;
            font-size: 14px;
        }

        input:focus {
            border-color: #D8A0A6;
            box-shadow: 0 0 0 3px rgba(216, 160, 166, 0.18);
        }

        button {
            width: 100%;
            margin-top: 24px;
            padding: 13px;
            border: 0;
            border-radius: 9px;
            color: white;
            background: #D8A0A6;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background: #C98791;
        }

        .error {
            color: #B4233A;
            text-align: left;
            font-size: 13px;
        }

        .brand {
            text-align: center;
            color: #B87580;
            font-size: 12px;
            letter-spacing: 3px;
            margin-bottom: 12px;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <div class="brand">YN HIJAB FASHION</div>

        <h1>Admin Login</h1>
        <p>Silakan masuk untuk mengelola website kamu.</p>

        @if ($errors->any())
            <p class="error">{{ $errors->first() }}</p>
        @endif

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf

            <label for="email">Email Admin</label>
            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                autocomplete="username"
                required
            >

            <label for="password">Password</label>
           
<div class="password-wrapper">
    <input
        type="password"
        name="password"
        id="adminPassword"
        placeholder="Masukkan password"
        required
    >

    <button
        type="button"
        class="toggle-password"
        id="togglePassword"
        aria-label="Tampilkan password"
        title="Tampilkan password"
    >
        <svg id="eyeIcon"
             xmlns="http://www.w3.org/2000/svg"
             width="22" height="22"
             viewBox="0 0 24 24"
             fill="none"
             stroke="currentColor"
             stroke-width="2"
             stroke-linecap="round"
             stroke-linejoin="round">
            <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7z"/>
            <circle cx="12" cy="12" r="3"/>
        </svg>
    </button>
</div>


            <button type="submit">Masuk</button>
        </form>
    </div>
    <script>
    const passwordInput = document.getElementById('adminPassword');
    const toggleButton = document.getElementById('togglePassword');
    const eyeIcon = document.getElementById('eyeIcon');

    toggleButton.addEventListener('click', function () {
        const isHidden = passwordInput.type === 'password';

        passwordInput.type = isHidden ? 'text' : 'password';

        if (isHidden) {
            eyeIcon.innerHTML = `
                <path d="M3 3l18 18"/>
                <path d="M10.6 10.6a2 2 0 0 0 2.8 2.8"/>
                <path d="M9.9 5.2A10.8 10.8 0 0 1 12 5c6.5 0 10 7 10 7a15 15 0 0 1-4 4.7"/>
                <path d="M6.2 6.2C3.5 8 2 12 2 12s3.5 7 10 7c1 0 2-.2 2.9-.5"/>
            `;
            toggleButton.setAttribute('aria-label', 'Sembunyikan password');
            toggleButton.setAttribute('title', 'Sembunyikan password');
        } else {
            eyeIcon.innerHTML = `
                <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7z"/>
                <circle cx="12" cy="12" r="3"/>
            `;
            toggleButton.setAttribute('aria-label', 'Tampilkan password');
            toggleButton.setAttribute('title', 'Tampilkan password');
        }
    });
</script>
</body>
</html>
