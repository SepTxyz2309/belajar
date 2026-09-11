<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MITKOM | Lembaga Kursus Komputer</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <!-- ================= HEADER ================= -->
    <header class="pm-header">
        <div class="logo">
            <a href="#">MITKOM</a>
        </div>
        <nav class="pm-nav">
            <ul>
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li><a href="{{ url('/program') }}">Program Kelas</a></li>
                <li><a href="{{ url('/biaya') }}">Biaya & Jadwal</a></li>
                <li><a href="{{ url('/fasilitas') }}">Fasilitas</a></li>
                <li><a href="{{ url('/kontak') }}">Pendaftaran</a></li>
            </ul>
        </nav>
    </header>

    <!-- ================= HERO SECTION ================= -->
    <div class="page-title">
        <h2>Kuasai Skill Digital, Siap Hadapi Dunia Kerja!</h2>
        <p>Belajar komputer dan pemrograman dari nol sampai mahir dibimbing instruktur profesional.</p>
    </div>

    <!-- ================= GRID KELAS ================= -->
    <main class="photo-grid">
        <div class="course-card">
            <img src="{{ asset('picture/code.jpg') }}" alt="Kelas Web Development Laravel">
            <h3>Web Development (Laravel & PHP 8)</h3>
        </div>
        
        <div class="course-card">
            <img src="{{ asset('picture/mm.jpg') }}" alt="Kelas Mikrokontroler">
            <h3>Mikrokontroler & IoT (Arduino)</h3>
        </div>
        
        <div class="course-card">
            <img src="{{ asset('picture/images.jpg') }}" alt="Kelas Python & Computer Vision">
            <h3>Computer Vision (Python & OpenCV)</h3>
        </div>
        
        <div class="course-card">
            <img src="{{ asset('picture/desain.jpg') }}" alt="Kelas Desain Grafis">
            <h3>Desain Grafis Profesional</h3>
        </div>
    </main>

    <!-- ================= GALERI BERITA / AKTIVITAS ================= -->
    <section class="news-gallery-container">
        <!-- Berita Utama -->
        <div class="headline-item">
            <img src="{{ asset('picture/belajar.jpg') }}" alt="Aktivitas Belajar">
            <div class="headline-text">
                <h3>Pendaftaran Kelas Batch September 2026 Telah Dibuka!</h3>
                <p>Segera daftarkan diri Anda, kuota terbatas hanya untuk 20 peserta per kelas dengan fasilitas lengkap.</p>
            </div>
        </div>

        <!-- Berita Tambahan (Grid 3 Kolom) -->
       <div class="news-grid">
    @foreach($news as $item)
    <div class="news-card">
        <!-- Menampilkan gambar yang diupload admin -->
        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
        <!-- Menampilkan judul dari database -->
        <h4>{{ $item->title }}</h4>
        <!-- Menampilkan deskripsi dari database -->
        <p>{{ $item->description }}</p>
    </div>
    @endforeach
</div>
    </section>

</body>
</html>