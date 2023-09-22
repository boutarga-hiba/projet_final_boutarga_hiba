<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        "name",
        "description",
        "prix",
        "stock",
        "image",
        "categorie_id",
    ];


    // * pour les categorie
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function users(){
        return $this->belongsToMany(User::class , "user_products");
    }
}
