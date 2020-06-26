<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'codeno', 'name', 'photo', 'price', 'discount', 'description', 'subcategory_id', 'brand_id'
    ];

    public function subcategories()
    {
    	return $this->belongsTo('App\Subcategory');
    }

    public function brands()
    {
    	return $this->belongsTo('App\Brand');
    }
}
