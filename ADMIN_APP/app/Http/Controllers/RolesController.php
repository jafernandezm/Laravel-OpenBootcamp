<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class RolesController extends Controller
{
    public function index(){
        $roles=[
            ['id'=> 1,
            'label' =>'Normal',
            'create_at' =>'2022-03-11 16:57:00',
            'update_at' =>'2022-03-11 16:57:00',
            ],
            ['id'=> 2,
            'label' =>'Admin',
            'create_at' =>'2022-03-11 16:57:00',
            'update_at' =>'2022-03-11 16:57:00',
            ],
            ['id'=> 3,
            'label' =>'SuperAdmin',
            'create_at' =>'2022-03-11 16:57:00',
            'update_at' =>'2022-03-11 16:57:00',
            ],
        ];
        
        return view('panel.roles.index',[
            'roles' => $roles,
        ]);
    }

    public function get(Request $request){
        $roles=[
            ['id'=> 1,
            'label' =>'Normal',
            'create_at' =>'2022-03-11 16:57:00',
            'update_at' =>'2022-03-11 16:57:00',
            ],
            ['id'=> 2,
            'label' =>'Admin',
            'create_at' =>'2022-03-11 16:57:00',
            'update_at' =>'2022-03-11 16:57:00',
            ],
            ['id'=> 3,
            'label' =>'SuperAdmin',
            'create_at' =>'2022-03-11 16:57:00',
            'update_at' =>'2022-03-11 16:57:00',
            ],
        ];
        $body = json_decode($request->getContent(),true);
        
        if(isset($body['type'])  && $body['type'] == 'Admin'){
            $roles=   [   
                ['label' =>'Admin',
                'create_at' =>'2022-03-11 16:57:00',
                'update_at' =>'2022-03-11 16:57:00',
                ],
            ];
        }
        return response()->json($roles);
    }




    public function create(){

        return view('panel.roles.form',[
           'id'=>null,
           'record'=>null, 
        ]);
    }
    public function edit($id){
        // recuperar los roles
        $record=[
        'id'=> 1,
        'label' =>'Normal',
        'create_at' =>'2022-03-11 16:57:00',
        'update_at' =>'2022-03-11 16:57:00',
        ];
        return view('panel.roles.form',[
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
    
        return redirect()->route('roles.index');
    }
    public function delete($id){
       
        Session()->flash('message','El usuario se ha eliminado correctamente');
        return redirect()->route('roles.index');
        print_r($id);
    }

}
