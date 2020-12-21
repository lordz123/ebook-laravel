<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'images',
        'images1',
        'images2',
        'images3',
        'name',
        'description',
        'price',
        'status'
    ];
}
