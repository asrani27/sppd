<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataLatih extends Model
{
    use HasFactory;
    protected $table = 'data_latih';
    protected $guarded = ['id'];
    public $timestamps = false;
}
