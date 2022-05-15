<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://user-images.githubusercontent.com/30080152/168447278-1a2ac5dd-3bb5-4f5c-ad44-1749bc388fb4.svg" width="300"></a></p>

## Laravel Skeleton

Laravel Skeleton provides a barebones version of Laravel with some added features for extra customizability.

[Artisan commands](#artisan-commands)  
[Creating a custom Authentication Guard](#creating-a-custom-authentication-guard)  
[Using a StyleMap](#using-a-stylemap)  

##### Artisan commands
```shell
php artisan make:guard
php artisan make:helper
php artisan make:trait
```

##### Creating a custom Authentication Guard
1. Create the guard class
```shell
php artisan make:guard ExampleGuard
```
You may use the `--example` option to specify that the created guard class should contain some example functionality
```shell
php artisan make:guard ExampleGuard --example
```

2. Add an entry into the `guards` property within `config/auth.php`
```php
'guards' => [
    // ...
    'custom' => [
        'driver' => 'example',
        'provider' => 'users'
    ]
]
```
3. Add an entry into the `$guards` property of `App\Providers\AuthServiceProvider`
```php
protected $guards = [
    'example' => 'App\Guards\ExampleGuard',
];
```
4. Create a route using the new authentication guard
```php
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

Route::middleware('auth:custom')->get('/user', function () {
    return Response::json(Auth::user());
});
```

##### Using a StyleMap

The StyleMap helper class can be useful in generating styles based on user settings

```php
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Helpers\StyleMap;

Route::middleware('auth:api')->get('/user', function () {
    return view('index', [
        'vueRootStyle' => StyleMap::create([
            'background-color' => Auth::user()->custom_background_color,
            'color' => Auth::user()->custom_text_color
        ])
    ]);
});
```
## Laravel

Laravel has the most extensive and thorough [documentation]() and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## VueJS

[Vue](https://vuejs.org/guide/introduction.html) (pronounced /vjuː/, like view) is a JavaScript framework for building user interfaces. It builds on top of standard HTML, CSS and JavaScript, and provides a declarative and component-based programming model that helps you efficiently develop user interfaces, be it simple or complex.

Laravel Skeleton also includes [vue-router](https://router.vuejs.org/), [vue-cookies](https://www.npmjs.com/package/vue-cookies), [bootstrap](https://getbootstrap.com/) and [sass](https://sass-lang.com/)

## License

The Laravel Skeleton framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
