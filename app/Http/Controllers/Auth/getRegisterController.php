<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class getRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    // use RegistersUsers;

    // /**
    //  * Where to redirect users after registration.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = RouteServiceProvider::HOME;

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    //     private function unique_code($limit)
    //     {
    //     return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
    //     }

    // /**
    //  * Get a validator for an incoming registration request.
    //  *
    //  * @param  array  $data
    //  * @return \Illuminate\Contracts\Validation\Validator
    //  */
    

    // get register page

    protected function getRegister(Request $request, Response $response)
    {
        
        if(!$request->has('accountType')) {
        //redirect or show an error message  
       
        return view("auth.register")->with("accountType",$request->input('accountType'));

        }  else {
        # code...
        
        return view("auth.register")->with("accountType",$request->input('accountType'));

        }
     }


  
}
