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