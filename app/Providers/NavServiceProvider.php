<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class NavServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mainMenu();
        $this->footerMenu();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function mainMenu(){
        view()->composer('new.partials._nav','App\Http\Composers\FrontendComposer@whatWedo');
        view()->composer('new.partials._nav','App\Http\Composers\FrontendComposer@whereWego');
    }     
    private function footerMenu(){
        view()->composer('new.partials._footer','App\Http\Composers\FrontendComposer@footer');
        view()->composer('new.contact','App\Http\Composers\FrontendComposer@footer');      
        view()->composer('new.partials._footer','App\Http\Composers\FrontendComposer@getPage');
    }     
}
