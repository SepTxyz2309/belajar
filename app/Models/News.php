<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    // Izinkan pengisian massal untuk kolom ini
    protected $fillable = ['title', 'description', 'image'];
}