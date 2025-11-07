<?php

namespace App\Models;

use App\Models\Category; // Tambahkan import ini
use App\Models\Komentar; // Tambahkan import ini
use App\Models\Wartawan; // Tambahkan import ini

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    
    // PASTIKAN category_id ADA DI $fillable
    protected $fillable = ['judul', 'ringkasan', 'isi', 'wartawan_id', 'category_id']; 

    public function wartawan()
    {
        return $this->belongsTo(Wartawan::class, 'wartawan_id');
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class, 'news_id');
    }
    
    // PASTIKAN METHOD INI ADA (Relasi Kategori)
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}