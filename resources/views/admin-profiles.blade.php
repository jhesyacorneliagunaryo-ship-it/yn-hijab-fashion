
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Konten - My Profile</title>

    <style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: "Segoe UI", Arial, sans-serif;
        background: #FFD9D9;
        color: #302323;
    }

    .sidebar {
        position: fixed;
        inset: 0 auto 0 0;
        width: 235px;
        padding: 32px 20px;
        background: #FFFDFB;
        border-right: 1px solid #F3C3C3;
        z-index: 10;
    }

    .brand {
        font-size: 23px;
        font-weight: 800;
        color: #D96B78;
        margin-bottom: 45px;
    }

    .menu-label {
        color: #A88989;
        font-size: 11px;
        letter-spacing: 1.5px;
        margin: 25px 12px 12px;
    }

    .nav-link {
        display: block;
        text-decoration: none;
        padding: 14px;
        border-radius: 12px;
        margin-bottom: 8px;
        color: #796664;
    }

    .nav-link.active,
    .nav-link:hover {
        color: #85434B;
        background: #FFBDBD;
    }

    .main {
        margin-left: 235px;
        padding: 38px;
        min-height: 100vh;
        background: #FFD9D9;
    }

    .topbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
        margin-bottom: 30px;
    }

    h1 {
        font-size: 28px;
        margin: 0 0 8px;
        color: #302323;
    }

    .muted {
        color: #796664;
        font-size: 14px;
    }

    .admin {
        padding: 12px 17px;
        border-radius: 30px;
        background: #FFFDFB;
        border: 1px solid #F3C3C3;
        color: #493332;
        font-size: 13px;
    }

    .hero {
        background: linear-gradient(120deg, #F28F96, #FFBDBD);
        color: #492B2D;
        border-radius: 22px;
        padding: 30px;
        margin-bottom: 25px;
        box-shadow: 0 12px 30px #D96B7825;
    }

    .hero h2 {
        margin: 0 0 10px;
        font-size: 23px;
        color: #492B2D;
    }

    .hero p {
        margin: 0;
        line-height: 1.8;
        font-size: 14px;
        color: #492B2D;
    }

    .stats {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 18px;
        margin-bottom: 25px;
    }

    .stat,
    .panel {
        background: #FFFDFB;
        border: 1px solid #F3C3C3;
        border-radius: 18px;
        padding: 24px;
    }

    .stat p {
        color: #796664;
        font-size: 14px;
        margin: 0 0 12px;
    }

    .stat h2 {
        color: #D96B78;
        font-size: 30px;
        margin: 0;
    }

    .panel-heading {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
        margin-bottom: 24px;
    }

    .panel-heading h2 {
        margin: 0 0 7px;
        font-size: 20px;
        color: #302323;
    }

    .btn {
        display: inline-block;
        padding: 11px 15px;
        border: 0;
        border-radius: 10px;
        text-decoration: none;
        font: inherit;
        font-size: 13px;
        cursor: pointer;
        text-align: center;
    }

    .primary {
        background: #F28F96;
        color: #402629;
    }

    .primary:hover {
        background: #E77D87;
    }

    .edit {
        background: #FFE4E4;
        color: #984A54;
    }

    .delete {
        background: #FFF0F0;
        color: #B83E50;
    }

    .content-card {
        background: #FFFDFB;
        border: 1px solid #F3C3C3;
        border-radius: 15px;
        padding: 22px;
        margin-bottom: 15px;
    }

    .content-card h3 {
        margin: 0 0 12px;
        font-size: 18px;
        color: #302323;
        overflow-wrap: anywhere;
    }

    .description {
        color: #594747;
        font-size: 14px;
        line-height: 1.8;
        white-space: pre-line;
        overflow-wrap: anywhere;
    }

    .card-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 12px;
        border-top: 1px solid #F3DCDC;
        margin-top: 20px;
        padding-top: 16px;
    }

    .actions {
        display: flex;
        gap: 8px;
    }

    .actions form {
        margin: 0;
    }

    .empty {
        text-align: center;
        padding: 35px 10px;
        color: #796664;
    }

    .success {
        padding: 14px 18px;
        background: #E7F8ED;
        color: #247744;
        border-radius: 12px;
        margin-bottom: 20px;
    }

    @media (max-width: 700px) {
        .sidebar {
            position: static;
            width: 100%;
            padding: 20px;
        }

        .brand {
            margin-bottom: 20px;
        }

        .menu-label {
            display: none;
        }

        .main {
            margin-left: 0;
            padding: 20px 14px;
        }

        .topbar {
            align-items: flex-start;
            flex-direction: column;
        }

        .stats {
            grid-template-columns: 1fr;
        }

        .panel {
            padding: 16px;
        }

        .panel-heading {
            align-items: flex-start;
            flex-direction: column;
        }
    }
</style>
</head>
<body>

<aside class="sidebar">
    <div class="brand">✦ My Profile</div>
    <div class="menu-label">MENU UTAMA</div>
    <a class="nav-link" href="/admin/dashboard">⌂ Dashboard</a>
    <a class="nav-link active" href="/admin/profiles">▤ Kelola Konten</a>
    <a class="nav-link" href="/" target="_blank">↗ Lihat Website</a>
</aside>

<main class="main">
    <header class="topbar">
        <div>
            <h1>Kelola Konten</h1>
            <p class="muted">Atur dan perbarui informasi website profilmu.</p>
        </div>
        <div class="admin">✦ Administrator</div>
    </header>

    <section class="hero">
        <h2>Halo, Admin! 👋</h2>
        <p>Selamat datang kembali. Kelola informasi profilmu dengan mudah melalui halaman ini.</p>
    </section>

    @if (session('success'))
        <div class="success">✓ {{ session('success') }}</div>
    @endif

    <section class="stats">
        <div class="stat">
            <p>Total Konten</p>
            <h2>{{ $profiles->count() }}</h2>
        </div>
        <div class="stat">
            <p>Status Website</p>
            <h2 style="font-size: 21px;">● Aktif</h2>
        </div>
    </section>

    <section class="panel">
        <div class="panel-heading">
            <div>
                <h2>Daftar Konten Profil</h2>
                <p class="muted">Kelola semua informasi yang tersimpan.</p>
            </div>
            <a class="btn primary" href="/admin/profiles/create">+ Tambah Konten</a>
        </div>

        @forelse ($profiles as $profile)
            <article class="content-card">
                <h3>{{ $profile->title }}</h3>
                <div class="description">{{ $profile->description }}</div>

                <div class="card-footer">
                    <span class="muted">ID Konten: {{ $profile->id }}</span>

                    <div class="actions">
                        <a class="btn edit"
                           href="/admin/profiles/{{ $profile->id }}/edit">Edit</a>

                        <form action="/admin/profiles/{{ $profile->id }}"
                              method="POST"
                              onsubmit="return confirm('Yakin ingin menghapus konten ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn delete" type="submit">Hapus</button>
                        </form>
                    </div>
                </div>
            </article>
        @empty
            <div class="empty">
                <h3>Belum ada konten ✨</h3>
                <p>Tambahkan konten pertama untuk website profilmu.</p>
            </div>
        @endforelse
    </section>

    <p class="muted" style="text-align:center;margin-top:25px;">
        My Profile · Panel Admin
    </p>
</main>

</body>
</html>
