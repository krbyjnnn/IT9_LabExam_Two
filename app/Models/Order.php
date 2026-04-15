<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'rice_id',
        'customer_name',
        'quantity_kg',
        'total_price',
    ];

    public function rice()
    {
        return $this->belongsTo(Rice::class);
    }
}
