``Extensiones se anaden`` <br>
```bash 
use Illuminate\Http\Response;"
php${
    Response("No tienes permisos para hacer eso");
}
```
```bash 
` Comandos ` <br>
Crear laravel
"composer create-project laravel/laravel example-app"
composer create-project laravel/laravel example-app

'Composer install'
Composer install

`Composer update`
Composer update

Composer dump-autoload

Eliminar caquetes
Composer remove
```

Para abrir en servidor local
```bash 
"php artisan serve"
```
`Crear un controlador`
```php
php artisan make:controller MyFirstController
'Para crear un controlador de recursos'
php artisan make:controller MyResourceController --resource
```
`Rederigir las cosas en controller`
```php
    


    return response("<user>Hola</user>")->header('contecnt-type','application/xml');

    return response("<h1>Hola</h1>")
    return redirect()->back();
    return redirect()->route(website.home);

    ejemplo Devuelve lo que le ponemos en 'response'
    
    public function index($index=null){
        $array=[
            'pepe',
            'marta',
            'juan'
        ];
        $html="";
        foreach($array as $l){
            $html.= "<p>" .$l ."</p>"
        }
        return response($html)
    }
```
paginas Blade se puede utilizar el php normal
```php
    @php
        $variable="hola";
        echo $variable;  
    @endphp
        {{$variable}}
    {!!$variable!!}
    {{-- esto es un comentario--}}
```
`Sentencias de blade`
```php
    'if'
    @if()  @elseif()
    @else  @endif
    'for'
    @for @endfor
    @foreach @endforeach
    'while'
    @while @endwhile
    'php'
    @php  @endphp
     @csrf
```
`Tenemos tambien la @method('') para rederigir`
``` 
    @method('PUT')
```










¿Cómo crear un Middleware?
```bash
$ php artisan make:middleware ExampleMiddleware
```
`Tipos de metodos Route`
```bash
Route::put('/contacto',[MyFirstController::class,'processConact']);
Route::patch('/contacto',[MyFirstController::class,'processConact']);
Route::delete('/contacto',[MyFirstController::class,'processConact']);
Route::head('/contacto',[MyFirstController::class,'processConact']);
Route::options('/contacto',[MyFirstController::class,'processConact']);
Route::match(['GET','POST'], '/url',[MyFirstController::class,'mathedFuncion']);
Route::any('/contacto',[MyFirstController::class,'anyFunction']);
Route::redirect('/route1','/route2');


Route::get('/ejemplo/{slug}',function($slug){
    $post=$this->recuperarMiPosMediantelug($slug);
    //---
});

Route::middleware('example.middleware:all')->group(function(){
    Route::middleware('example.middleware:all')->get('/login',function(){
        
    });
});

Route::get('/{cadena}', function($cadena="a"){
    echo $cadena;

})->where('cadena','[a-z]*');
//GRupos
Route::prefix('/post')->name('/post')->group(function(){
    Route::get('/my-second-laravel-9',function(){
        echo "hola";
    
    })->name('myindex');
    
    Route::view('/my-routename','routename');

});

Route::middleware('example.middleware')->prefix('/category')->name('category.')->group(function(){
    Route::get('/',function(){
        echo "hola como estas";
    })->name('show');


});
```
