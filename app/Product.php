<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [

				'name',
        'seller_id',
        'collection_id',
        'price',
			];
    protected $table = 'products';

    public function seller(){
    				//return $this->belongsTo('App\student'); //RESTful way
    				return $this->belongsTo('App\User', 'seller_id'); //do it your self
    			}

    //
}
