<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    
    protected $fillable = [
        'user_id',
        'reference_id',
        'sub_total',
        'shipping',
        'total',
        'status',
        'created_at',
        'updated_at'
    ];
}
