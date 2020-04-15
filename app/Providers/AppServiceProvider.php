<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
        //Enable https in remote environment (update .env file)
        if (app()->environment('remote')) {
            URL::forceScheme('https');
        }

        // Validation rule for only allowing unicode letters and spaces
        Validator::extend('alpha_spaces', function($attribute, $value)
        {
            return preg_match('/^[\pL\s]+$/u', $value);
        });

        // Validation rule for only allowing unicode letters, numbers, and spaces
        Validator::extend('alpha_num_spaces', function($attribute, $value)
        {
            return preg_match('/^[\pN\pL\s]+$/u', $value);
        });
    }
}
