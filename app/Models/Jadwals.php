<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokters extends Model
{
    use HasFactory;

    protected $fillable = [
        'hari',
        'jabatan',
        'jam_kerja',
    ];
}