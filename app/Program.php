<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    protected $fillable = [
        'name', 'pertemuan', 'deskripsi', 'gambar', 'created_at', 'updated_at', 'deleted_at'
    ];


    use SoftDeletes;

    protected $dates = ['deleted_at'];

}
