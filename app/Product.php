<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'title', 'description', 'price', 'stock',
    ];

    

    public function scopeAvailable($query) 
    {
        return $query->where('stock', '>', 0);        
    }

    public function scopeOutSell($query) 
    {
        return $query->where('stock', 0);        
    }

    public function scopeLatestEdited($query) 
    {
        return $query->orderBy('updated_at', 'desc');
    }
}
