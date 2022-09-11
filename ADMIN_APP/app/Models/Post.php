<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'user_id' ,
        'category_id' ,
        'title' ,
        'slug' ,
        'content' ,
    ];
    
    protected $hidden= [
        'user_id',
    ];

    //para crear Custom
    protected $appends= [
        'custom'
    ];

    public function category(){
        return $this->belongsTo(Category::class);        
    }
    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }

    //para crear un nueva categoria 
    public function getCustomAttribute(){
         return $this->user_id .'-'.$this->category_id;
    }
}