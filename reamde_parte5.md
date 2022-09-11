

nos crea un modelo y una migracion
```php
php artisan make:model Post -m
```

```php
 `ocultamos las columnas con hidden`
     protected $hidden= [
        'user_id',
    ];
    `tambien con  makeHidden('columna')`
    $response=$lastesPost->makeHidden('title')->toJson();
    `Para hacer Visible`
    ->makeVisible(['user_id'])

```