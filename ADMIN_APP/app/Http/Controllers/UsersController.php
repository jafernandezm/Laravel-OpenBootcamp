<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class UsersController extends Controller
{
    public function index(){
        $users=[
            ['id'=> 1,
            'name' =>'jose',
            'email' =>'jose@example.com',
            'create_at' =>'2022-03-11 16:57:00',
            'update_at' =>'2022-03-11 16:57:00',
            ],
            ['id'=> 2,
            'name' =>'juan',
            'email' =>'juan@example.com',
            'create_at' =>'2022-03-11 16:57:00',
            'update_at' =>'2022-03-11 16:57:00',
            ],
            ['id'=> 3,
            'name' =>'maria',
            'email' =>'maria@example.com',
            'create_at' =>'2022-03-11 16:57:00',
            'update_at' =>'2022-03-11 16:57:00',
            ],
        ];
        
        return view('panel.users.index',[
            'users' => $users,
        ]);
    }
    public function create(){

        return view('panel.users.form',[
           'id'=>null,
           'record'=>null, 
        ]);
    }
    public function edit($id){
        // recuperar los tipos
        $record=[
            'id'=> 1,
            'name' =>'jose',
            'email' =>'jose@example.com',
            'create_at' =>'2022-03-11 16:57:00',
            'update_at' =>'2022-03-11 16:57:00',
        ];
        return view('panel.users.form',[
            'id'=>$id,
            'record'=>$record, 
         ]);
    }
    public function save(Request $request, $id= null){
        if( ($request->isMethod('POST') && $id != null) || (($request->isMethod('PUT') || $request->isMethod('PATCH')) && $id ==null)){
            abort(403);
        };
        if($request->isMethod('POST'))
            Session()->flash('message','El usuario se ha creado correctamente');
        if($request->isMethod('PUT'))
            Session()->flash('message','El usuario se ha actualizado correctamente');
        $input=$request->input();
    
        return redirect()->route('users.index');
    }
    public function delete($id){
        Session()->flash('message','El usuario se ha eliminado correctamente');
        return redirect()->route('users.index');
    }
}
