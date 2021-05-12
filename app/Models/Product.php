<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['nome','categorie_id','fornitore_id','prezzo_unitario','peso','volume','reparto','giacenza'];

    public function fornitore(){
        return $this->belongsTo(Fornitore::class);
    }

    public function categorie(){
        return $this->belongsTo(Category::class);
    }

    public function stock(){
        return $this->hasOne(stock::class);
    }
}
