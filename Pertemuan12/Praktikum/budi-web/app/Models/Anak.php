<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;

    protected $table = 'anaks';

    protected $fillable = [
        'nama',
        'usia',
        'alamat',
        'cerita',
        'foto',
        'status',
    ];
}
