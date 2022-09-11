<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostsController extends Controller
{
    public function index(){
        $lastesPost= Post::with(['category','author'])->orderBy('created_at','desc')->limit(10)->get();



        return view('blog.index',[
            'posts' => $lastesPost,
        ]);
    }
    public function feed($format){
        $lastesPost= Post::with(['category','author'])->orderBy('created_at','desc')->limit(10)->get();
        $contentType=null;
        $response =null;
        switch($format){
            case 'json':
                $response=$lastesPost->makeHidden(['title'])->toJson();
                $contentType = 'application/json';
                break;
            default:
                $response=$lastesPost->toArray();
                $contentType = 'text/html';
                break;
        }

        return response($response)->header('content-type',$contentType);
    }

    public function find($url){

    }
    public function save(Request $request){

    }
    public function delete($id){

    }
  
}
