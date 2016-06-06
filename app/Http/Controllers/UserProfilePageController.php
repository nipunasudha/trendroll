<?php

namespace App\Http\Controllers;
use App\Product;
use App\SellerReview;

use App\Http\Requests;
use Illuminate\Http\Request;

class UserProfilePageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page)
    {

      if($page=="products"){
        $products = Product::orderBy('name', 'asc')->get();
          return view('/my_profile',['tab' => 'account','page'=>$page,'products'=>$products]);
      }elseif($page=="reviews"){
        $reviews = SellerReview::orderBy('rating', 'desc')->get();
          return view('/my_profile',['tab' => 'account','page'=>$page,'reviews'=>$reviews]);
      }else{
        return view('/my_profile',['tab' => 'account','page'=>$page]);
      }


    }
}
