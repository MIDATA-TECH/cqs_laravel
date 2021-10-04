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
use Illuminate\Support\Facades\Http;
use Exception;

class RegisterController extends Controller
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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

        private function unique_code($limit)
        {
        return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
        }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'accountType' => ['required', 'string', 'max:255'],
            'middlename' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'nationalID' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255']
        ]);
    }
    

    protected function pushprUserToEDMS($newUser){

        $token = "dads3daf@SDFFDGASGATEAGR";
        try {
            //code...
            $res = Http::withHeaders([
                'Authorization' => $token
            ])->post('http://localhost:5001/api/v1/professional/registration',[
                "firstName" => $newUser -> name,
                "middleName" => $newUser -> middlename,
                "surname" => $newUser -> surname ,
                "nationalId" => $newUser -> nationalID,
                "phoneNumber" => $newUser -> phone ,
                "uuid" => $newUser -> identifier,
                "email" => $newUser -> email
    
            ])->json();
            return $res;
        } catch (Exception $th) {
            //throw $th;
            return $res=[];

        }
       

    }

    protected function pushlsUserToEDMS($newUser){

        $token = "dads3daf@SDFFDGASGATEAGR";
        try {
                    //code...
                    $res = Http::withHeaders([
                        'Authorization' => $token
                    ])->post('http://localhost:5001/api/v1/lssp/registration',[
                        "firstName" => $newUser -> name,
                        "middleName" => $newUser -> middlename,
                        "surname" => $newUser -> surname ,
                        "nationalId" => $newUser -> nationalID,
                        "phoneNumber" => $newUser -> phone ,
                        "uuid" => $newUser -> identifier,
                        "email" => $newUser -> email
            
                    ])->json();

                    return $res;
                } catch (Exception $th) {
                    //throw $th;
                    return $res=[];
                }
        

    }


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
   

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // create user object
        $newUser = new User();

        // passing data
        $newUser -> name = $data['name'];
        $newUser-> email = $data['email'];
        $newUser -> password = Hash::make($data['password']);
        $newUser -> accountType = $data['accountType'];
        $newUser -> middlename = $data['middlename'];
        $newUser -> surname = $data['surname'];
        $newUser -> nationalID = $data['nationalID'];
        $newUser -> phone = $data['phone'];
        $newUser -> identifier = $this->unique_code(9);

        // saving the new user

        // echo($data['middlename']);
        $newUser -> save();

        // return $newUser -> accountType;

        // sendUser 
        if ($newUser -> accountType == 'Professional') {
            # code...
            $res = $this->pushprUserToEDMS($newUser);
        } else {
            # code...
            $res = $this->pushlsUserToEDMS($newUser);
        }
        
        

        // return $res->status;

        return $newUser;

    }
}
