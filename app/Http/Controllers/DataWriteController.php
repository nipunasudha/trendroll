<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use Validator;
class DataWriteController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }
    public function write_products(Request $request){
      //dd($request->all());

      $validator = Validator::make($request->all(), [
          'name' => 'required|max:255',
          'seller_id' => 'required|max:255',
          'collection_id' => 'max:255',
          'price' => 'required|numeric',
      ]);
      if ($validator->fails()) {
          return "Ahhh! You messed up. Re-check the submission.";
      }
      $product = new Product;
      $product->name = $request->name;
      $product->seller_id = $request->seller_id;
      $product->collection_id = $request->collection_id;
      $product->price = $request->price;
      $product->save();
      return redirect("list");
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
