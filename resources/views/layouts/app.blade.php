<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Berita Laravel</title>
    
    {{-- Memuat asset frontend --}}
    @vite(['resources/css/app.css', 'resources/js/app.js']) 

    <style>
        /* Gaya dasar untuk membantu visualisasi */
        body { font-family: sans-serif; margin: 0; padding: 0; background-color: #f8f9fa; }
        .container { width: 90%; max-width: 1100px; margin: 20px auto; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .navbar { background: #007bff; padding: 15px 0; margin-bottom: 20px; }
        .navbar a { color: white; margin: 0 15px; text-decoration: none; font-weight: bold; }
        .nav-container { width: 90%; max-width: 1100px; margin: 0 auto; display: flex; align-items: center; }
    </style>
</head>
<body>
    <header class="navbar">
        <div class="nav-container">
            <a href="{{ url('/') }}">Portal Berita</a>
            <a href="{{ route('category.index') }}">Kategori</a>
        </div>
    </header>

    <div class="container">
        {{-- Area ini akan diisi oleh konten dari setiap halaman yang extends layout ini --}}
        @yield('content') 
    </div>

</body>
</html>