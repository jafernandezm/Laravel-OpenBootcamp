<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTable extends Model
{
    use HasFactory; 

    protected $table ='model_table';

    protected $primaryKey = 'uid';

    public $incrementing = false;

    protected $keyType='string';

    protected $fillable=[
        'name' 
    ];
    /*protected $hidden=[
        'name'
    ];
    */
    //protected $dateFormat='U';

    //const CREATE_AT='creation_date';
    //const UPDATE_AT='updated_date';

    //otra base de datos
    //protected $connection='pgsql';



    public function __construct()
    {
        $this->uid=md5(time());
    }

}
