<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\User;

class UsersController extends Controller
{
    public function index(){
        $users=User::get()->toArray();
        /*$users=[
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
        ];*/
        
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
        /*$record=[
            'id'=> 1,
            'name' =>'jose',
            'email' =>'jose@example.com',
            'create_at' =>'2022-03-11 16:57:00',
            'update_at' =>'2022-03-11 16:57:00',
        ];*/
        $record= User::find($id)->toArray();
        return view('panel.users.form',[
            'id'=>$id,
            'record'=>$record, 
         ]);
    }
    public function save(Request $request, $id= null){
        if( ($request->isMethod('POST') && $id != null) || (($request->isMethod('PUT') || $request->isMethod('PATCH')) && $id ==null)){
            abort(403);
        };

        $input = $request->except('_token');

        if($request->isMethod('POST'))
            Session()->flash('message','El usuario se ha creado correctamente');
        if($request->isMethod('PUT'))
            Session()->flash('message','El usuario se ha actualizado correctamente');
        $input=$request->input();
        if(!isset($input['password']))
            $input['password']= 'root';
        User::updateOrCreate([
            'id' => $id,
        ],$input);


        return redirect()->route('users.index');
    }
    public function delete($id){
        Session()->flash('message','El usuario se ha eliminado correctamente');
        $user= User::where('id',$id)->firstOrFail();
        $user->delete();
        return redirect()->route('users.index');
    }
}
