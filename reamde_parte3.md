` utilizamos el blade como uso particular `

```php
        Blade::directive('rigthnow',function(){
            echo "ahora mismo la hora unix es :". time();
        });

        Blade::if('mailer',function($input){
            $configdMailer= config('mail.default');
            return $input === $configdMailer;
        });


        Blade::stringable('money',function(){
            //transforma tipos de datos
        });
    `y se llama a la funcion con`
    @mailer('smtp')
    Se esta usando SMTP    
    @else
    no esta usando SMTP    
    @endif
```
Empezamos con base de datos
```php
    Schema::drop();
    Schema::table();


```
comandos 
```php
    php artisan make:migration user_types --create=user_types
    //para migrar las base de datos construida
    php artisan migrate
    //para desacer la base de datos que teniamos
    php arisan migrate:rollback
    para actualizar una tabla
    php artisan make:migration fix_user_role
    para resetear es 
    php artisan migrate:reset


    para crear en database en seeders los datos y usuarios
    php artisan make:seeder ProductsSeeder

    para subir productos rando se hace en database se comfigura el
    DatabaseDeeder
    
        $this->call([
            ProductsSeeder::class
        ]);

    despues se crea clses
    php artisan make:seeder ProductsSeeder
    se llena la tabla
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Str;
        public function run()
    {
        for($i=0; $i<10;$i++){
            DB::table('product')->insert([
                'category_id'=>rand(1,10),
                'name' => Str::random(),
                'description' => Str::random(100), 
                'price' =>rand(0,1000),
                'tax_percent' =>rand(0,100),
                'quantity'=>rand(1,20),
            ]);
        }
    }
    y el comando 
    ``php artisan db:seed``
```


tipos de tablas
```php
    Schema::create('user_types', function (Blueprint $table) {
        $table->id();
        $table->string('label',100);
        

        $table->timestamps();
        $table->softDeletes();

    });
    podemos buscar mas en database migrations
```
comandos
importante para xammp se anade a la base .env para no tener el error 
Illuminate\Database\QueryException 
SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' 
```
DB_SOCKET=/Applications/MAMP/tmp/mysql/mysql.sock
```


