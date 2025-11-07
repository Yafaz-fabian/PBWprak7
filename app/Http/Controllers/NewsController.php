<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // ini method controller untuk landing page news
  public function index()
    {
        // PERBAIKAN: Tambahkan 'category' ke dalam with()
        $semua_berita = News::with('wartawan', 'komentar', 'category')
        ->latest()
        ->get();

        return view('news.index', [
            'news_list' => $semua_berita
        ]);
    }

    // ini method controller untuk menampilkan detail news
    // $news akan otomatis diisi oleh Laravel berdasarkan id news yang diakses di route
    // News $news artinya Laravel akan melakukan route model binding
   public function show(News $news)
    {
        // PERBAIKAN: Tambahkan 'category' ke dalam load()
        // load relasi wartawan, komentar, dan kategori
        $news->load('wartawan', 'komentar', 'category');

        // tampilkan view news.show dengan mengirim data news yang sudah di load relasinya
        return view('news.show', [
            'news' => $news
        ]);
    }
}
