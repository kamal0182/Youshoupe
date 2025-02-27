<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    use HasUuids;
    protected  $fillable  = [
        'title',
        'description'
    ];
    public  $fill = [
        'title',
        'description'
    ];
    public function souscategories()
    {
        return $this->hasMany(SousCategorie::class);
    }
}
