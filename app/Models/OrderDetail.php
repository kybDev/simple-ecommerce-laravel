<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_details';
    
    protected $fillable = [
        'reference_id',
        'product_id',
        'qty',
        'total',
        'created_at',
        'updated_at'
    ];
}
