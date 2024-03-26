<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPPD extends Model
{
    use HasFactory;
    protected $table = 'sppd';
    protected $guarded = ['id'];

    public function pengikut()
    {
        return $this->hasMany(Pengikut::class, 'sppd_id');
    }
}
