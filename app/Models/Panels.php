<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panels extends Model
{
    use HasFactory;

    protected $table = "panels";

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
