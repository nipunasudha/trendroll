<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;

class ProductController extends Controller
{
  public function filter_for_his_her($forwhome){
    if($forwhome=="her" || $forwhome=="him"){
      $filtered_products= Product::orderBy('name', 'asc')->get();
      return view('his_her_home',['forwhome' => $forwhome,'tab' => $forwhome,'product_list'=>$filtered_products]);
    }else {
      abort(404);
    }
  }

  public function view_item($forwhome,$item_id){

    if($forwhome=="her" || $forwhome=="him"){
      $item = Product::where('id', $item_id)->first();
      if($item){
        return view('product_view',['item'=>$item,'tab' => 'her']);
      }else{

      }

    }else {
      abort(404);
    }


  }


}
