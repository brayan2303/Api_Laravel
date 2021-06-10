<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public $timestamps = false;  // no mostrar el campo tiempo
    protected $fillable = ['id', 'cat_now', 'cat_obs'];  //mostrar campos
}
