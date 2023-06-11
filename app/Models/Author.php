<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = "tacgia";
    protected $fillable = ['ten_tgia'];

    public $timestamps = false;
}
