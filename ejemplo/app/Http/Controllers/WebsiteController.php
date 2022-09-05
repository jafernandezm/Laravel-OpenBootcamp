<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Contracts\Session\Session;
use Session;
class WebsiteController extends Controller
{
    public function section($section){
        $user=Session::get('name','Usuario');
        $date=[
            'user'=>$user,
            'section'=>$section
        ];
        switch($section){
            case 'home':
                $date['date']=date('d/m/Y');
                $date['time']=date('H:i');
                break;
            case 'who-we-are':
                $date['name'] ="JOSE";
                $date['profesion'] ="Developer";
                $date['age'] =10;
                break;
            case 'contacto':
                break;
            default:  
            break;
        }
        return view('website.'.$section, $date );
    }



 
    public function personalize(Request $request){
        $name=$request->input("name");
        Session::put('name',$name);
        return redirect()->back();
    }
  
    public function contacto(){
        return view('website.contacto');
    }
    public function sedcontacto(Request $request){
        $input=$request->only('name','message');
        if( !isset($input['name']) || !isset($input['message'])){
            Session::flash('error', 'Se han producido errores al procesar el formulario');

       
        }else{
            Session::flash('success', 'se ha procesado el formulario correctamente');
        }
        //return view('website.contacto-results.contacto-success') ;
        return redirect()->back();
        //return view('website.contacto-results.contacto-success') ;
    } 
    
    
}
