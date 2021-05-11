<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornitore extends Model
{
    use HasFactory;
    protected $fillable=['nome','referente','indirizzo','cap','city','country','email','phone'];

    public function product(){
        return $this->hasMany(Product::class);
    }
}
