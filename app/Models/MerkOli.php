<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerkOli extends Model
{
    use HasFactory;
    protected $table = 'merk_oli';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function jenisoli()
    {
        return $this->belongsTo(JenisOli::class, 'jenis_oli_id');
    }
}
