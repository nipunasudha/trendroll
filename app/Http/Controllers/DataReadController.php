<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;

class DataReadController extends Controller
{
    public function read_products(){
        
        $products = Product::orderBy('created_at', 'asc')->get();
        $array = array( 'passed_products'=>  $products);
        return view('backendviews.adminpanel_products',$array);
    }
}
