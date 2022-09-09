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