<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }

    public function price_list_items()
    {
        return $this->hasMany('App\ProgramPriceListItem');
    }
}
