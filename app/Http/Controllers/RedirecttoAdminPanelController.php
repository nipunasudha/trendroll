<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
class RedirecttoAdminPanelController extends Controller
{
   public function check_and_redirect(){
       $user = Auth::user();
        if(!Auth::check()){
            return redirect('login');
        }else{
            if($user->level==1){
                return view('layouts/backend');
            }else{
                return redirect('home');
            }
        }
   }
}
