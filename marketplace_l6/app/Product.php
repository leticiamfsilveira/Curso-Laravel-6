<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function store(){
        return $this->belongsTo(Product::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
