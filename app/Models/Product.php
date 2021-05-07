<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    
    protected $fillable = [
        'name',
        'category',
        'price',
        'details',
        'image1',
        'image2',
        'image3',
        'created_at',
        'updated_at'
    ];
}
