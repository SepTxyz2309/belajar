<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wahyu Septian | Portofolio</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <!-- Header Tetap -->
    <header class="pm-header">
        <div class="logo">
            <a href="{{ url('/') }}">WAHYU SEPTIAN</a>
        </div>
        <nav class="pm-nav">
            <ul>
                <li><a href="{{ url('/') }}">PORTRAITS</a></li>
                <li><a href="{{ url('/jurnal-foto') }}">JURNAL FOTO</a></li>
                <li><a href="{{ url('/sport') }}">SPORT</a></li>
            </ul>
        </nav>
    </header>

    <!-- Area Konten Dinamis -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Tetap -->
    <footer style="text-align: center; padding: 40px; margin-top: 20px; font-size: 0.8rem; color: #7f8c8d;">
        <p>&copy; 2026 Wahyu Septian. All Rights Reserved.</p>
    </footer>

</body>
</html>