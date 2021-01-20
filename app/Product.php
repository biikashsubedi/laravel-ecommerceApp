<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'qty', 'image','price','detail','discount', 'is_featured', 'category_id'];
}
