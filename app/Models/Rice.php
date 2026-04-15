<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rice extends Model
{
    protected $table = 'rices';
    protected $fillable = [
        'rice_name',
        'price_per_kg',
        'stock_quantity',
        'description',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
