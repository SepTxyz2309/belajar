<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wahyu Septian | Portofolio</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <!-- Header Minimalis -->
    <header class="pm-header">
        <div class="logo">
            <!-- Ganti teks logo dengan nama kamu -->
            <a href="#">WAHYU SEPTIAN</a>
        </div>
        <nav class="pm-nav">
            <ul>
                <li><a href="{{ url('#') }}">Beranda</a></li>
                <li><a href="{{ url('/sport') }}">Sport</a></li>
                <li><a href="#">THINGS</a></li>
                <li><a href="#">CLIENTS</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">CONNECT</a></li>
            </ul>
        </nav>
    </header>

    <!-- Judul Halaman -->
    <div class="page-title">
        <h2>Portraits</h2>
    </div>

    <!-- Grid Foto Tanpa Celah -->
    <main class="photo-grid">
        <!-- Gunakan asset() untuk foto lokal, atau biarkan placeholder untuk tes tampilan -->
        <img src="{{ asset('picture/wahyu.jpeg') }}" alt="Foto 1">
        <img src="{{ asset('picture/gambar2.jpg') }}" alt="Foto 2">
        <img src="{{ asset('picture/wahyu.jpeg') }}" alt="Foto 3">
        <img src="{{ asset('picture/wahyu.jpeg') }}" alt="Foto 4">
        <img src="{{ asset('picture/wahyu.jpeg') }}" alt="Foto 5">
        <img src="{{ asset('picture/wahyu.jpeg') }}" alt="Foto 6">
        <img src="{{ asset('picture/wahyu.jpeg') }}" alt="Foto 7">
        <img src="{{ asset('picture/gambar2.jpg') }}" alt="Foto 8">
    </main>

</body>
</html>