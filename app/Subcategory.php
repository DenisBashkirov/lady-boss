<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public function programs()
    {
        return $this->hasMany('App\Program', 'subcategory_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'parent_id', 'id');
    }
}
