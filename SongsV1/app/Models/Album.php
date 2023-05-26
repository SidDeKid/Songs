<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $guarded = [
        // Red list for mass changes. 
        'id'
    ];

    public function songs()
    {
        return $this->belongsToMany(Song::class);
    }

    public function band() 
    {
        return $this->hasOne(Band::class);
    }
}
