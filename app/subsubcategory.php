<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subsubcategory extends Model
{
    public function subcategories()
    {
            return $this->belongsTo('App\subcategory');
    }
}
