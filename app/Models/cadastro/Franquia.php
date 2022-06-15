<?php

namespace App\Models\cadastro;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franquia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'uf'
    ];
}
