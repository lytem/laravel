<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['product_id','fornitore_id','nome_magazzino','utente'];

    public function product(){
        return $this->hasMany(Product::class);
    }
    public function fornitore(){
        return $this->hasMany(Fornitore::class);
    }
    public function record(){
        return $this->hasMany(Record::class);
    }
}
