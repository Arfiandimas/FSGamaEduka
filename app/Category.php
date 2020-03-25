<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'slug'
    ];

    public function articles(){
        return $this->hasMany('App\Article');
    }

    public static function boot() {
        parent::boot();

        static::deleting(function($category) { // before delete() method call this
            $uncategorized = Category::firstOrCreate(['name' => 'Uncategorized', 'slug' => 
                                'uncategorized']);
            Article::where('category_id', $category->id)->update(
                                ['category_id' => $uncategorized->id]);
        });
    }
}
