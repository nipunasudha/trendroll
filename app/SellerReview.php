<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class SellerReview extends Model
{
  protected $fillable = [
      'reviewer_id',
      'seller_id',
      'rating',
      'comment',
    ];

    public function reviewer(){
            //return $this->belongsTo('App\student'); //RESTful way
            return $this->belongsTo('App\User', 'seller_id'); //do it your self
          }




}
