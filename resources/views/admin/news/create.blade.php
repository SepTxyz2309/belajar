<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Upload Berita</title>
    <!-- Menghubungkan ke file CSS utama -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body class="admin-page">

    <div class="admin-card">
        <h2>Upload Berita Baru</h2>

        <!-- Alert Sukses -->
        @if(session('success'))
            <div class="alert-success">
                ✅ {{ session('success') }}
            </div>
        @endif

        <form action="{{ url('/admin/news') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="admin-form-group">
                <label>Judul Berita</label>
                <input type="text" name="title" placeholder="Masukkan judul konten..." required>
            </div>

            <div class="admin-form-group">
                <label>Deskripsi Singkat</label>
                <textarea name="description" rows="4" placeholder="Tuliskan detail berita di sini..." required></textarea>
            </div>

            <div class="admin-form-group">
                <label>Upload Gambar</label>
                <input type="file" name="image" accept="image/*" required>
            </div>

            <button type="submit" class="btn-admin-upload">Upload Sekarang</button>
        </form>

        <!-- Link tambahan navigasi admin -->
        <div class="admin-nav-links">
            <a href="{{ url('/') }}" target="_blank">Lihat Website</a>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>

</body>
</html>