<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album_Song extends Model
{
    use HasFactory;
    
    protected $table = 'album_song';

    public $timestamps = false;

    protected $guarded = [
        // Red list for mass changes. 
        'id'
    ];

    public function song()
    {
        return $this->hasOne(Song::class);
    }

    public function album()
    {
        return $this->hasOne(Album::class);
    }
}
