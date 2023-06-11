<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'baiviet';
    protected $fillable = [
        'tieude',
        'ten_bhat',
        'ma_tloai',
        'tomtat',
        'noidung',
        'ma_tgia',
        'hinhanh',
    ];
    public $timestamps = false;
}
