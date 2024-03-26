<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengikut extends Model
{
    use HasFactory;
    protected $table = 'pengikut';
    protected $guarded = ['id'];
    public $timestamps = false;
    public function sppd()
    {
        return $this->belongsTo(SPPD::class, 'sppd_id');
    }
}
