<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class JsonRespondController extends Controller
{
  public function test(){
    //return "You are about to get a JSON!";
    return response()->json(['name' => 'Nipuna Sudharaka', 'drink' => 'Coffee']);
  }

  public function test2(Request $request){

      return response()->json(['name' => $request->name, 'drink' => $request->drink]);


  }

  public function test3(Request $request){
      return response()->json(['message' => $request->id]);
  }



}
