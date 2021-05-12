<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $fillable=['ordini_id','product_id','quantita_entrate','note'];

    public function product(){
        return $this->hasMany(Product::class);
    }
}
