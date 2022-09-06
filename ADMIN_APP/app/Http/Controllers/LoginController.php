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
      
        $input=$resquest->only('user', 'password');
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
            'user'=>"root",
            'password'=>"root",
        ];
        if(!isset($input['user']) || !isset($input['password']) )
            return false;
        $access=$credentials['user'] == $input['user'] && $credentials['password']==$input['password'];
        return $access;
    }

}
