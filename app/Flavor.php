<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flavor extends Model
{
    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
}
