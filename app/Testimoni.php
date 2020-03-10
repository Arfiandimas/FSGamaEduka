<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimoni extends Model
{
    protected $fillable = [
        'name', 'foto', 'kesan', 'created_at', 'updated_at', 'deleted_at', 'program_id'
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }


    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
