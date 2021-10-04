<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome');

});

Route::get('/lssp',  [App\Http\Controllers\LsspController::class, 'index']);
Route::get('/lssp/up',  [App\Http\Controllers\LsspController::class, 'up']);
Route::get('/lssp/both',  [App\Http\Controllers\LsspController::class, 'both']);

Route::get('/professional',  [App\Http\Controllers\ProfessionalController::class, 'index']);
Route::get('/professional/up',  [App\Http\Controllers\ProfessionalController::class, 'up']);
Route::get('/professional/both',  [App\Http\Controllers\ProfessionalController::class, 'both']);

// Route::get('/professional', function () {

//     $token = "dads3daf@SDFFDGASGATEAGR";   

//     $upstream = Http::withHeaders([
//         'Authorization' => $token
//     ])->get('http://localhost:5001/api/v1/professional/upstream')->json();
//     $downstream = Http::withHeaders([
//         'Authorization' => $token
//     ])->get('http://localhost:5001/api/v1/professional/downstream')->json();
//     $both = Http::withHeaders([
//         'Authorization' => $token
//     ])->get('http://localhost:5001/api/v1/professional/both')->json();


//     $data = [
//         'upstream' => $upstream['data'],
//         'downstream' => $downstream['data'],
//         'both' => $both['data'],
//     ];

//     // return $data;


//     return view('professional')->with('db', $data);;

// });

Route::get('/registerlicensee', function () {

    return view('auth.registerlicensee');

});

// Route::post('/user/changepassword', function () {

//     return view('welcome');

// });

Route::post('changepassword',  [App\Http\Controllers\HomeController::class, 'changepassword'])->name('changepassword');




Route::get('api/RegisterUserr', function (Request $request, Response $response) {

    $newUser = new User();
    $newUser -> name = 'kalagala';
    $newUser -> email = 'kalagala@gmail.com';
    $newUser -> password = Hash::make('kala123');
    $newUser -> save();

    

    return response( 'suceess', 200)->header('Content-Type', 'application/json');

    // return 123;

});




Auth::routes();

// Authentication routes...
// Route::get('auth/login', 'Auth\AuthController@getLogin')->name('login');
// Route::post('auth/login', 'Auth\AuthController@postLogin')->name('login');
// Route::get('auth/logout', 'Auth\AuthController@getLogout')->name('logout');

// Registration routes...
Route::get('auth/register',[App\Http\Controllers\Auth\RegisterController::class, 'getRegister'])->name('getregister');


// Route::post('auth/register', 'Auth\AuthController@postRegister')->name('register');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
