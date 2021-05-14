<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    protected $fillable=['stocks_id','ordini_id','quantita','note'];

    public function stock(){
        return $this->belongsTo(Stock::class);
    }
    public function order(){
        return $this->hasMany(Order::class);
    }
}
