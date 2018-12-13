<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramPriceListItem extends Model
{
    public function price_range()
    {
        return $this->hasOne('App\PriceRange', 'price_list_item_id', 'id');
    }
}