<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;

class MyFirstController extends Controller
{

   public function myControllerFunction($id = null){
      echo "hola". $id;

   }
   public function conactPage(){
        return view('contact');
   }

   public function processConact(Request $request){
      $input=$request->input();
      return view('success',$input);
   }

   public function processConactPut(){
      echo "Formulario con PUT";
      return new Response("Hola mundo");
   }




   public function index($example){
      
   }
}
