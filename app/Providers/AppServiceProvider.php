<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Content;
use App\Models\Testimonial;
use Illuminate\Support\Facades\View;
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
        $content = Content::find('1');
        View::share('content', $content);
        $contact = Contact::find('1');
        View::share('contact', $contact);
        $testimonials = Testimonial::all();
        View::share('testimonials', $testimonials);
        $categories = Category::all();
        View::share('categories', $categories);
    }
}
