<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = [
        'title',
        'description',
        'price',
        'image',
        'admin'
    ];
    protected $fill = [
        'title',
        'description',
        'price',
        'image',
        'admin'
    ];
    public function user()
    {
        return $this->belongsTo(User::class ,"admin");
    }
    public function SousCategories()
    {
        return $this->hasOne(SousCategorie::class);
    }

}
