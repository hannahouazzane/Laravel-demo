<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Cookie;
class UserController extends Controller
{
    public function getCookie(Request $request){
        // $cookie = $request->cookies->get("ncvo_who_am_i", false);
        $value = $request->cookie('hannahs_cookie');
        $val = Cookie::get('hannahs_cookie');


       
        // if($cookie == true){
        //     $testing_view= "recieved cookie $cookie";
        // }

        // else {
        //     $testing_view= "no cookie ";
        // }

        return view(
            "welcome",
             [
             "posts"=>$value . " or " .$val,
             "cookies"=> $request->cookie()
        ]);

    }


 
  
    // $response=Http::get('https://account.ncvo.org.uk/api/auth/whoami');


    
}
