<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousCategorie extends Model
{
    use HasFactory;
    protected $fillable = [
         'title',
         'categorie_id',
         'product_id'
    ];
    public $fill = [
         'title',
         'categorie_id',
         'product_id'
    ];


}
