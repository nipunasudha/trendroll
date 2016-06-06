<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Input;
use Html;
use App\Http\Requests;

class UploadController extends Controller
{
  public function upload_image(){
    if(Input::hasFile('myfile')){
      $file=Input::file('myfile');
      $file->move('uploaded_images',$file->getClientOriginalName());
      echo $file->getClientOriginalName();
      echo "<br>". Html::image('uploaded_images/'.$file->getClientOriginalName());



    }else{
      echo "the is no file";
    }
  }
}
