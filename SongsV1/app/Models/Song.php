<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Song extends Model
{
    use HasFactory;

    protected $guarded = [
        // Red list for mass changes. 
        'id'
    ];

    public function albums()
    {
        return $this->belongsToMany(Album::class);
    }
}
