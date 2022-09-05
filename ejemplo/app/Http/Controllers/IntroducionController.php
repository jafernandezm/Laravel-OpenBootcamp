<?php

namespace App\Http\Controllers;

use Log;
use Illuminate\Http\Request;

class IntroducionController extends Controller
{
    public function index(Request $request){
        $format=$request->input('format');
        if($format ==null) $format='html';
        
        //verifica el año que es para mostrar la tabla
        $year=$request->input('year');
        if($year == null)$year=date('Y');
        $maxChars=30;
        $concepts=[
            [
                'concepto' => 'Curso de laravel 9',
                'precio' =>  20,
                'currency'=> 'USD',
                'taxed'     =>10,
                'discount'  =>0
            ],
            [
                'concepto' => 'Curso de laravel 9 avanado nivel III /2020 nuevo',
                'precio' =>  20,
                'currency'=> 'USD',
                'taxed'     =>10,
                'discount'  =>0
            ],
            [
                'concepto' => 'Licencia Sublime Editor',
                'precio' =>  70,
                'currency'=> 'USD',
                'taxed'     =>21,
                'discount'  =>5
            ],
            [
                'concepto' => 'Ordenador Macbook Pro',
                'precio' =>  4300,
                'currency'=> 'USD',
                'taxed'     =>21,
                'discount'  =>0
            ]
        ];  

        //mandamos json
        $jsonConcepts=json_encode($concepts);

        //Log::debug("Estas accediendo a la vista de intrpduccion");


        switch($format){
            case 'json':
                return response($jsonConcepts)->header('Content-Type','application/json');
                break;
            default:
            return view("introduccion",[
                'maxChars'  =>$maxChars,
                'concepts'  =>$concepts,
                'year'      =>$year,
                'jsonConcepts' =>$jsonConcepts
            ]);
            break;
        }
      
        
    }
}
