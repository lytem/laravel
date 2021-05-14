<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $fillable=['product_id','quantita_entrata','note'];

    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function record(){
        return $this->belongsTo(Record::class);
    }
}
