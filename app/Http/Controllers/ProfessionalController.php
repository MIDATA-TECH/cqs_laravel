<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

use Exception;

class ProfessionalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
    
        $token = "dads3daf@SDFFDGASGATEAGR";   

       

        try
        {
            $downstream = Http::withHeaders([
                'Authorization' => $token
            ])->get('http://localhost:5001/api/v1/professional/downstream')->json();

            $data = [
                'downstream' => $downstream['data']
    
            ];
        }
        catch(Exception $e)
        {
           

            $data = [];
        }

     
       
       
       
        // return $data;

        return view('professional.professional')->with('db', $data);

    }


    public function up()
    {
        
    
       

        $token = "dads3daf@SDFFDGASGATEAGR";   

       

        try
        {
           

            $upstream = Http::withHeaders([
                'Authorization' => $token
            ])->get('http://localhost:5001/api/v1/professional/upstream')->json();
    
    
    
            $data = [
                'upstream' => $upstream['data']
    
            ];
        }
        catch(Exception $e)
        {
           

            $data = [];
        }

     

        // return $data;

        return view('professional.professionalup')->with('db', $data);

    }


    public function both()
    {
        
    
        $token = "dads3daf@SDFFDGASGATEAGR";   



        // return $data;



         

        try
        {
           

           
                $both = Http::withHeaders([
                    'Authorization' => $token
                ])->get('http://localhost:5001/api/v1/professional/both')->json();


                $data = [

                    'both' => $both['data'],
                ];
        }
        catch(Exception $e)
        {
           

            $data = [];
        }

        return view('professional.professionalboth')->with('db', $data);

    }


}
