<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisOli extends Model
{
    use HasFactory;
    protected $table = 'jenis_oli';
    protected $guarded = ['id'];
    public $timestamps = false;
}
