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

/**/
Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/', function () {
     return '<h1>Hello, world!</h1>';
});*/

// Route::get('/', static function () {
//     $res = 2 + 3;
//     $name = 'John';
//     return view('home', compact('res', 'name'));
// //    return view('home', ['res' => $res, 'name' => $name]);
// })->name('home');
//
// Route::get('/about', static function () {
//     return '<h1>About Page</h1>';
// });
//
// /*Route::get('/contact', function () {
//     return view('contact');
// });
//
// Route::post('/send-email', function () {
//     if(!empty($_POST)){
//         dump($_POST);
//     }
//     return 'Send Email';
// });*/
//
// /*Route::match(['post', 'get'], '/contact', function () {
//     if(!empty($_POST)){
//         dump($_POST);
//     }
//     return view('contact');
// });*/
//
// Route::match(['post', 'get', 'put'], '/contact', static function () {
//     if(!empty($_POST)){
//         dump($_POST);
//     }
//     return view('contact');
// })->name('contact');
//
// Route::view('/test', 'test', ['test' => 'Test data']);
//
// //Route::redirect('/about', '/contact');
// //Route::redirect('/about', '/contact', 301);
// Route::permanentRedirect('about', 'contact');
//
// /*Route::get('/post/{id}', function ($id) {
//     return "Post $id";
// });*/
//
// /*Route::get('/post/{id}/{slug}', function ($id, $slug) {
//     return "Post $id | $slug";
// })->where(['id' => '[0-9]+', 'slug' => '[A-Za-z0-9-]+']);*/
//
// Route::get('/post/{id}/{slug?}', static function ($id, $slug = null) {
//     return "Post $id | $slug";
// })->name('post');
//
// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::get('/posts', static function () {
//         return 'Posts List';
//     });
//
//     Route::get('/post/create', static function () {
//         return 'Post Create';
//     });
//
//     Route::get('/post/{id}/edit', static function ($id) {
//         return "Edit Post $id";
//     })->name('post');
// });
//
// Route::fallback(static function () {
// //    return redirect()->route('home');
//     abort(404, 'Oops! Page not found...');
// });


Auth::routes();

Route::get('/home', [\App\Http\Controllers\Person\StoreController::class, 'index'])->name('home');

Route::get('/cadre', 'CadreController')->name('cadre');
