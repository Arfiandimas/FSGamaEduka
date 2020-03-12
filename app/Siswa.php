<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'name', 'pendidikan_terakhir', 'umur', 'alamat_lengkap', 'no_telp', 'email', 'created_at', 'updated_at', 'deleted_at', 'program_id'
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
