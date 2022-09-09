<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class TypesController extends Controller
{

    public function index(){
        $types=[
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
        
        return view('panel.types.index',[
            'types' => $types,
        ]);
    }
    public function create(){

        return view('panel.types.form',[
           'id'=>null,
           'record'=>null, 
        ]);
    }
    public function edit($id){
        // recuperar los tipos
        $record=[
        'id'=> 1,
        'label' =>'Normal',
        'create_at' =>'2022-03-11 16:57:00',
        'update_at' =>'2022-03-11 16:57:00',
        ];
        return view('panel.types.form',[
            'id'=>$id,
            'record'=>$record, 
         ]);
    }
    public function save(Request $request, $id= null){
        if( ($request->isMethod('POST') && $id != null) || (($request->isMethod('PUT') || $request->isMethod('PATCH')) && $id ==null)){
            abort(403);
        };
        if($request->isMethod('POST'))
            Session()->flash('message','El tipo se ha creado correctamente');
        if($request->isMethod('PUT'))
            Session()->flash('message','El tipo se ha actualizado correctamente');
        $input=$request->input();
    
        return redirect()->route('types.index');
    }
    public function delete($id){
        Session()->flash('message','El tipo se ha eliminado correctamente');
        return redirect()->route('types.index');
    }


    
}
