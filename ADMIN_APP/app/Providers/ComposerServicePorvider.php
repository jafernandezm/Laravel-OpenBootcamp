<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Session;
class ComposerServicePorvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('panel.generals.logout',function($view){
            $user=[];
            $user =Session()->get('user');
            return $view->with([
                'salutation' => 'no da',
            ]);
        });



    }
}
