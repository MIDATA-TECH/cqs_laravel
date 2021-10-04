<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('/RegisterUser', function (Request $request, Response $response) {
    $authkey = $request->header('Authorization'); 
    $authkey_saved = '123f';

    if ($authkey == $authkey) {
        # code..

        // checking if user has all the required fields
        if (
            $request -> username &&
            $request -> email &&
            $request -> password
        ) {
            # create user object

            $newUser = new User();
            $newUser -> name = $request -> username;
            $newUser -> email = $request -> email;
            $newUser -> password = Hash::make($request -> password);

            #save the user

             // $newUser -> save();
             return response( $newUser -> password , 200)->header('Content-Type', 'application/json');

        } else {
            # return message

            return response( 'Missing Required Information' , 400)->header('Content-Type', 'application/json');
        }
        
  
    }else {

        return response( 'Not Authorized' , 401)->header('Content-Type', 'application/json');
    }


    // return 123;

});



Route::post('/ChangeUserPassword', function (Request $request, Response $response) {
    $authkey = $request->header('Authorization'); 
    $authkey_saved = '123f';

    if ($authkey == $authkey) {
        # code..

        // checking if user has all the required fields
        if (
            $request -> username ||
            $request -> email ||
            $request -> password
        ) {
            # create user object

           $userToUpdate = User::where('email', $request -> email) -> first();
            if ($request -> username ) {
                # update username
                $userToUpdate -> username;
            }

            if ($request -> email ) {
                # update username
                $userToUpdate -> email;
            }

            if ($request -> password ) {
                # update username
                $userToUpdate -> password;
            }



            #save the user

             // $newUser -> save();
             return response( $newUser -> password , 200)->header('Content-Type', 'application/json');

        } else {
            # return message

            return response( 'Missing Required Information' , 400)->header('Content-Type', 'application/json');
        }
        
  
    }else {

        return response( 'Not Authorized' , 401)->header('Content-Type', 'application/json');
    }


    // return 123;

});

