<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Kolom yang bisa diisi massal
    protected $fillable = [
        'title',
        'is_done',
    ];
}
