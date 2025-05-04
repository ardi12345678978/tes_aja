<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // ← ini penting!
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kelas',
        'nilai1',
        'nilai2',
        'nilai3',
        'nilai_rata2',
        'grade',
    ];
}
