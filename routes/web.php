<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhamad Aryasatya Bagaskara",
        "email" => "aryaasatya2205@gmail.com"
    ]);

});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhamad Aryasatya Bagaskara",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime fugit labore quasi. Laudantium tempore, expedita similique molestiae quos nam exercitationem non! Velit quisquam ab maiores sint ex delectus quidem officiis."
        
        ],
        
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Bagas",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime fugit labore quasi. Laudantium tempore, expedita similique molestiae quos nam exercitationem non! Velit quisquam ab maiores sint ex delectus quidem officiis."
        
        ],
        
        
        
        ];
    return view('posts', [

        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    return view('post', [
        "title" => "Single Post"
    ]);

});

Route::resource('blog', 'BlogController');

Route::get('/login', [LoginController::class, '\index']);