<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Exception;

class HomeController extends Controller
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

    protected $AuthorizationToken = "dads3daf@SDFFDGASGATEAGR";


    private function getProfile($token){

  
         $profile = [];

        try {
            
            if (Auth::user()->accountType == "Professional") {
                # code...
                $profile = Http::withHeaders([
                   'Authorization' => $token
               ])->get('http://localhost:5001/api/v1/professional/'.Auth::user()->identifier)->json();
               
            }elseif (Auth::user()->accountType == "LSSP") {
                # code...
                $profile = Http::withHeaders([
                   'Authorization' => $token
               ])->get('http://localhost:5001/api/v1/lssp/'.Auth::user()->identifier)->json();
            }else {
               $profile = Http::withHeaders([
                   'Authorization' => $token
               ])->get('http://localhost:5001/api/v1/licensee/'.Auth::user()->identifier)->json();
            }
        } catch (Exception $e) {
            //throw $th;
            $profile["message"] = "Backed Server not accessible";
        }
         
     

         $profile["messages"] = [];
         $profile["errors"] = [];

         return $profile;

    }

    private function validataMatchPasswords($plain, $hashed){

        //  validate old password
    
        if (Hash::check($plain, $hashed)) {

            return True;
    
        }else {
            //  array_push($messages, 'Your old password is incorrent');
             return False;
    
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pr = $this->getProfile($this->AuthorizationToken);
        array_push($pr["messages"], "Welcome to Common Qualification System Dashboard");

        if (isset($pr["message"])) {
            # code...
            $pr["status"] = 0;
        }
      
     
        return view('home')->with("profile", $pr);

    }


    public function changepassword(Request $request, Response $response) {
    
        $validated = $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'oldpassword' => ['required', 'string', 'min:8'],
            // 'accountType' => ['required', 'string', 'max:255']
        ]);
    
        $messages = ['success', 'congrats'];
    
        $user = Auth::user();
    
        $encr_oldpassword = Hash::make($request->oldpassword);
       
        // get user profile
        $pr = $this->getProfile($this->AuthorizationToken);

        if ($this->validataMatchPasswords($request->oldpassword, $user->password)) {
            # checked correct
            // update the password

            $user->password =  Hash::make($request->password);
            $user->save();

            // push the message

            array_push($pr["messages"], "You have successfully updated your password");

        } else {
            # not checked correct

            array_push($pr["errors"], "Your previous password is not correct");

        }
        
        

        
        
        return view('home')->with("profile", $pr);
   
        }

    
}
