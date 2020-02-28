<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'judul', 'slug', 'gambar', 'deskripsi', 'konten', 'created_at', 'updated_at', 'deleted_at', 'category_id', 'user_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
