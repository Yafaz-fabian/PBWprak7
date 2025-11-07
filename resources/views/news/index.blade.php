@extends('layouts.app') 

@section('content')

    <h1>Daftar Berita</h1>
    
    @forelse ($news_list as $news)
        <div style="border: 1px solid #ddd; padding: 15px; margin-bottom: 20px; border-radius: 5px;">
            <h2>
                {{-- Link ke halaman detail berita --}}
                <a href="{{ route('news.show', $news->id) }}" style="text-decoration: none; color: #007bff;">
                    {{ $news->judul }}
                </a>
            </h2>
            
            <p style="font-size: 0.9em; color: #555;">
                Oleh: **{{ $news->wartawan->nama }}** | 
                Dipublikasikan pada: {{ $news->created_at->format('d M Y') }} 
                
                {{-- LOGIKA BARU: Menampilkan Kategori --}}
                @if ($news->category)
                    | Kategori: 
                    <a href="{{ route('category.show', $news->category->slug) }}" style="color: #28a745;">
                        **{{ $news->category->nama }}**
                    </a>
                @endif
            </p>

            <p>{{ $news->ringkasan }}...</p>

            <a href="{{ route('news.show', $news->id) }}" class="btn-readmore">
                Baca Selengkapnya
            </a>
        </div>
    @empty
        <p>Belum ada berita yang tersedia saat ini.</p>
    @endforelse

@endsection

{{-- Asumsi Anda menggunakan CSS dasar atau Bootstrap untuk tampilan --}}
{{-- Anda mungkin perlu menambahkan CSS kustom di file app.css Anda --}}