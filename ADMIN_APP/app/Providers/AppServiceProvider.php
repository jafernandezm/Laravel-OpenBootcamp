<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Money\Money;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('rigthnow',function(){
            echo "ahora mismo la hora unix es :". time();
        });

        Blade::if('mailer',function($input){
            $configdMailer= config('mail.default');
            return $input === $configdMailer;
        });


        Blade::stringable('money',function(){
            
        });
    }
}
