<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
            'name', 'price', 'qty', 'description', 'image'
        ];

        public function orders(){
            return $this->hasMany(Order::class);
        }
        
        
}
