<?php

namespace App\Models;

use App\Models\Kost;
use App\Models\Kecamatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kota extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function kecamatan()
    {
        return $this->hasMany(Kecamatan::class);
    }

    function kost()
    {
        return $this->hasMany(Kost::class);
    }
}
