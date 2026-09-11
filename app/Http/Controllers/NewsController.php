<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    // Menampilkan halaman form upload admin
    public function create()
    {
        return view('admin.news.create');
    }

    // Memproses data yang dikirim dari form
    public function store(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // 2. Proses upload gambar ke folder public/storage/news
        $imagePath = $request->file('image')->store('news', 'public');

        // 3. Simpan data ke database
        News::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Berita berhasil diupload!');
    }
}