<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'código',
        'categoria',
        'nome',
        'preço',
        'composição',
        'data de cadastro',
        'tamanho',
        'quantidade do produto'
    ];
}
