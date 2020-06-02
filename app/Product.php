<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function order()
    {
        return $this->belongsToMany(Order::class);
    }

    public function flavors()
    {
        return $this->belongsToMany(Flavor::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }
}
