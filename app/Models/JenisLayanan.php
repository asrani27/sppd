<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisLayanan extends Model
{
    use HasFactory;
    protected $table = 'jenis_layanan';
    protected $guarded = ['id'];
    public $timestamps = false;
}
