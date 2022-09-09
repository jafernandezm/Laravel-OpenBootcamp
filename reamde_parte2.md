`Use session`
```php 
    Session()->get('myvar' ); //obtener una ruta
    Session()->put('myvar',1); //guardar
    Session()->flash('myvar');//
    Session()->forget('myvar'); // borrar


    Session()->hast('myvar'); // borrar
```


uso corepto de peticiones HTTP
```php 
 Route::match(['POST','PUT','PAT'],'/{id?}',[TypesController::class,'save'])->name('save');

```
Hacemos que en nuetro formulario nos devuelva por el metodo PUT Y POST 
```php 
<form action="{{ route('types.save', ['id' => $id]) }}" method="POST">
@method('PUT')
//CODIGO
</form>
```

tranjando con json en restmen
headrs
contect-type

application/json


Errores de HTTP
```ERROR
200-> OK
201 -> OK CON INSERCION DE DATOS
204 OK, SIN RESPUESTA
300 -> Redireccion temporal
301 -> Redireccion permanente 

400 -> peticion mal hecha
401-> metodo HTTP mal utilizado
203 -> falta de permisos
404 ->Registro no encontrado

500 ->  Error en el servidor
```


`Incluir cosas con`
```php
ejemplo pasando un parametro
    @include('panel.roles._sections.row', [ 'row' => $r]) 
o
    @include('panel.roles._sections.row') 
```
TAMBIEN SE PUEDE PONER EL 
```php
    @includeWhen( $r['id'] ==1, 'panel.roles._sections.row', ['row'=>$r])

```

Tenemos para controlar por bases 
```php
    @section('header')
        @include('panel.generals.navigation')
    @show

    @yield('main')


    en la otra pagina 

        
    @section('header')


    @endsection

```

otros tipos de uso de blade

```php
    Comprueba si existe o no , pero igual funciona 
    @includeIf('panel.roles._sections.table',['rows' => $roles])

    @includeWhen( count($roles) >4 , 'ruta' , [parametro a pasar])

    @each('ruta' , $varible,'parametro')
```




`Inyeccion de dependencias o Service inyection`
```php

```