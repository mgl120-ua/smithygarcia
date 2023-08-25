<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JvSintetico extends Model
{
    use HasFactory;

    protected $table = "jvsintetico";

    protected $fillable = [
        'name',
        'price',
        'img',
    ];

    public function orders() {
        return $this->belongsToMany(Order::class);
    }

    public function shoppingcart() {
        return $this->belongsToMany(Shoppingcart::class);
    }
}
