<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use Searchable;

    protected $fillable = [
        'judul', 'slug', 'gambar', 'deskripsi', 'konten', 'created_at', 'updated_at', 'deleted_at', 'category_id', 'user_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function searchableAs()
    {
        return 'articles';
    }

    public function toSearchableArray()
    {
        return [
            'id'=>$this->id,
            'judul'=>$this->judul
        ];
    }
}
