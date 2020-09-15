<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    
    use HasFactory;
    protected $fillable = ['nomeProduto', 'sku', 'peso', 'altura', 'largura', 'profundidade', 'valor'];
    protected $dates = ['deleted_at'];
}
