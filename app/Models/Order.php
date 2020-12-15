<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'payment_id',
        'total',
        'status',
        'photo',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function payment()
    {
        return $this->belongsTo('App\Models\Payment','payment_id');
    }
}
