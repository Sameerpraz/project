<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name', 'product_title', 'uid', 'product_slug', 'product_posted_by'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
