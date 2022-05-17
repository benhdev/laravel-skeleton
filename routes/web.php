<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'index');

/*
|--------------------------------------------------------------------------
| Dynamic Custom Styles
|--------------------------------------------------------------------------
|
| Using the StyleMap helper class you can easily build dynamic styles
| for the page based on saved configurations. This could be used
| to create custom user themes or light/dark mode
|
*/

// use App\Models\User;
//
// Route::get('/{user:email}', function (User $user) {
//     return view('index', [
//         'vueRootStyle' => Skeleton\Helpers\StyleMap::create([
//             'background-color' => '#aaa'
//         ])
//     ]);
// });

/*
|--------------------------------------------------------------------------
| Vue Router
|--------------------------------------------------------------------------
|
| The Route below will send all GET requests back to the Vue application
| so that you can handle the routing with vue-router. If you wish to
| include routes in here utilizing different functionality
| please define them above.
|
*/

Route::view('{any?}', 'index')->where('any', '.*');
