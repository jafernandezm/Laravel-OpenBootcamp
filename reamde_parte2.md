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