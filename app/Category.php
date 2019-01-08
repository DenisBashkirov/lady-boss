<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function subcategories()
    {
        return $this->hasMany('App\Subcategory', 'parent_id', 'id')->orderBy('ordering');
    }
}
