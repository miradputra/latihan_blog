<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('frontend.blog.side', function ($view) {
            $kategori = \App\Kategori::all();
            $tag = \App\Tag::all();
            $recent = \App\Artikel::orderBy('created_at', 'desc')->take(4)->get();
            $view->with(compact('kategori','tag', 'recent'));
        });

        // view()->composer('frontend.blog.sidebar2', function ($view) {
        //     $author = \App\Artikel::first();
        //     $cat = \App\Kategori::all();
        //     $tags = \App\Tag::all();
        //     $recent = \App\Artikel::orderBy('created_at', 'desc')->take(4)->get();
        //     $view->with(compact('cat', 'recent','author', 'tags'));
        // });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
