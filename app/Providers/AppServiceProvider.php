<?php

namespace App\Providers;


use Torann\GeoIP\Facades\GeoIP;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

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
        //slo =104.132.218.0
        //pak =180.178.170.93
        //ind ="1.10.10.255
       // $ip = "1.187.255.255";
        $ip = \Request::ip();
        $geo = GeoIP::getLocation($ip);
        //dd($geo);
        //Get visitors country name
        $country = $geo['country'];
        $languages = [
            'Pakistan' => 'en',
            //'Slovakia' => 'sl',
            'Czechia' => 'cz',
        ];
        if (array_key_exists($country, $languages)) {
            $lang = $languages[$country];

            App::setLocale($lang);
        } else {

            $lang = 'en';
            App::setLocale("en");
        }

        view()->composer('partials.language_switcher', function ($view) {
            $view->with('current_locale', app()->getLocale());
            $view->with('available_locales', config('app.available_locales'));
        });
    }
}
