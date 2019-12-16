<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    /**
     * No incluir: id, created_at, updated_at, deleted_at
     */
    protected $fillable = [
        'title', 'price', 'stock',
    ];
}
