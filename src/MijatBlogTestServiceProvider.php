<?php

namespace Mijat\Blogtest;

use Illuminate\Support\ServiceProvider;

class MijatBlogTestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'blogtest');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/blogtest'),
        ],'blog-test');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Mijat\Blogtest\MijatBlogController');
    }
}
