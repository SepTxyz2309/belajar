@extends('layouts.main')

@section('content')
<div class="news-gallery-container">
    <div class="page-title">
        <h2>Galeri Olahraga</h2>
    </div>

    <!-- Foto Sorotan Utama -->
    <article class="headline-item">
        <img src="https://via.placeholder.com/1000x500/e74c3c/fff?text=Pertandingan+Final" alt="Headline Sport">
        <div class="headline-text">
            <h3>Kemenangan Dramatis di Menit Terakhir</h3>
            <p>Ditulis pada 29 Agustus 2026 | Kategori: Sepak Bola</p>
        </div>
    </article>

    <!-- Deretan Foto Kecil -->
    <div class="news-grid">
        <article class="news-card">
            <img src="https://via.placeholder.com/600x400/3498db/fff?text=Lari+Maraton" alt="Sport 1">
            <h4>Persiapan Maraton Tahunan</h4>
        </article>
        
        <article class="news-card">
            <img src="https://via.placeholder.com/600x400/2ecc71/fff?text=Bola+Basket" alt="Sport 2">
            <h4>Aksi Memukau di Lapangan Basket</h4>
        </article>
        
        <article class="news-card">
            <img src="https://via.placeholder.com/600x400/f1c40f/000?text=Bulu+Tangkis" alt="Sport 3">
            <h4>Atlet Bulu Tangkis Muda Berbakat</h4>
        </article>
    </div>
</div>
@endsection