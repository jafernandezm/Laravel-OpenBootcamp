CLase 15 Query y Bulder y Recuperar datos
Ejmplo de uso de tablas
```php
    use Illuminate\Support\Facades\DB;
    class DatabaseController extends Controller
{
    public function index(){
    $users=DB::table('users')->get(); //toda la tabla
    //where
    $users=DB::table('users')->where('id',1)->get();
    //orWhere 
    $users=DB::table('users')->where('id',1)->orWhere('id',2)->get();
    //select
    $users=DB::table('users')->select('id','email')->where('id',1)->get();

     $users=DB::table('users')->select('id','email')->where('id',1)->get();
    print_r($users);
    //orderBy asc   desc
     $users=DB::table('users')->select('id','email')->where('id',1)->orderBy('name','asc')->get();
       print_r($users->toJson());

    $users=DB::table('users')->whereBetween('email_verified_at',['2022-09-17','2022-09-20'])->whereIn('id',[1,2])->get();

    //para todos los nombres que no son vacios
    ->where('name', '<>' , null)
    //el nombre contenga una a
    ->where('name', 'like' , "%A%")
    //LOS ID 1 y 2
    ->whereIn('id',[1,2])
    //id 1
    ->where('id',1)
    //distintos
      ->where('id','<>',1)
    //dos fhecas 
    ->whereBetween('email_verified_at',['2022-09-17','2022-09-20'])
    ////nombre no 1
    ->whereNotNull('name')
    //para hacer cualquier consulta
    ->whereRaw("(id=1 or id=2)")
    //
      ->whereNull('deleted_at')
    //nomrebamos con otro nombre el nombre
    ->selectRaw('users.*, user_role.level as user_level')
    ->having('user_level',1)
    ```Para restrablecer la base ```
        User::whereNotNull('id')->restore();
        User::onlyTrashed()->get();
        `para BORRAR DE LA BASE DE DATOS COMPLETA CON BASE SUAVE`
        User::onlyTrashed()->forceDelete();
    //todos los metodos tienen el Raw
    DB::table('users')->selectRaw()->whereRaw()->havingRaw()->orderByRaw();
    //tambien podemos llamar dos tablas
    $users= BD::table('users')->select(DB::raw("name,email"))->get();

    para unir tablas tenemos
    ->join('user_role','users.role_id','=','user_role.id')
    ->leftJoin('user_role','users.role_id','=','user_role.id')
    ->rightJoin('user_role','users.role_id','=','user_role.id')
    ->crossJoin('user_role','users.role_id','=','user_role.id')

    segunda parte
    limit(1)// solo muestra 1
    skip(2) //salta 2
    $users= BD::table('users')->whereNull('email_verified_at')->limit(1)->skip(2)->get()
    para insertar
      DB::table('users')->insert([
        'name' =>'Nombre',
        'email' => 'correo@example.net',
        'password'=> 'ASFD',
    ]);

    //para actualizar un id dado
     DB::table('users')->where('id',11)->update([
        'name' =>'Jose',
        'email' => 'jose@example.net',
        'password'=> $password,
    ]);   

    //para actualizar o crear un id dado
     DB::table('users')->updateOrInsert([
        'id' => 12
     ],[
        'name' =>'Jose 2',
        'email' => 'jose2@example.net',
        'password'=> $password,
    ]);   

DB::table('users')->selectRaw()->whereRaw()->havingRaw()->orderByRaw();
    // tambien tenemos el increment o descrement
    ->incremet('role_id',5)
    ->decrement('role_id',5)
    `Para borrar todos los registro de una tabla se utiliza`    
    DB::table('users_')->truncate();
    DB::table('users')->whereIn('id',[11,12])->delete();

    "Par buscar en un ID con un model creado  php artisan make:model ModelTable"
        $modelTable =ModelTable::find('259f012f1a2362af3ea7821aeb17901b');
        $modelTable->name=' First Exmaple';

        $modelTable->save();
    }   

}
```
'tenemos los metodo en un models'
```php
    User::select()
    selectRaw()
    having
    havingRaw
    where
    whereRaw
    orderBy
    limit
    skip

    withTrashed
    restore
    forceDelete

    firsOrCreate
    updateOrCreate
    firsOrFail
    create

    getOriginal //refresh

    clone 
    fill

    join left rightJoin
    crossJoin

    with
    withCount
    withSum //peligroso
```

'Tenemos mas de un role para que puede funcionar'
```php
    public function role(){
        return $this->belongsTo(UserRole::class);
        return $this->belongsToMany(UserRole::class);
        return $this->hasOne(UserRole::class,  'id','role_id');
        return $this->hasMany(UserRole::class);

         return $this->hasMany(UserRole::class,'role_id','id');
    }
```






