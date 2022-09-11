<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    public function form(){
        return view('login');
    }
    public function login(Request $resquest){
      
        $input=$resquest->only('email', 'password');
        $access=$this->_creckCredentials($input);
        if(!$access){
            Session()->flash('error','Credenciales invalidos');
            return redirect()->back();
        }
        
        Session()->put('user',$access);
        return redirect()->route('home');
    }

    public function logout(){
        Session()->forget('user');
        return redirect()->route('home');
    }

    private function _creckCredentials($input){
        $credentials=[
            'email'=>"root",
            'password'=>"root",
        ];
        if(!isset($input['email']) || !isset($input['password']) )
            return false;

        //$acces=$this->_creckUserAndPaswword($input['email'], $input['password']);
        $access=$credentials['email'] == $input['email'] && $credentials['password']==$input['password'];
        return $access;
    }

}
