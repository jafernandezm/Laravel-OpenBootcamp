<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Exception;
use App\Exceptions\MySecondCustomException;

use Illuminate\Contracts\Session\Session;

class MySecondController extends Controller
{
 


    public function index($index = null){
        Session::get('myvar');












        try{
          //1/0;
          $this->_generateException();
        }
        catch(MySecondCustomException $e){
            echo "Excepcion general 1";
            echo $e->getMessage();
            print_r($e->getData());
        }
        catch(Exception $e){
            echo "Excepcion general";
            echo $e->getMessage();
        }finally{
            echo "Esto se ejecuta el 100% de las veces";
        }


    }


    private function _generateException(){
        throw new MySecondCustomException("Se ha generado una exception personalizada",[
            'name' =>'jose'
        ]);
    }
}
