<?php
 
use App\Models\Category;
use Clockwork\Request\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginControler;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;



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
    return view('Home', [
        'title' => 'Home'
    ]);
});
Route::get('/abaut', function () {
    return view('Abaut', [
        'title' => 'About',
        'nama' => 'vinxx',
        'email' => 'vincx@gmail.com',
        'gambar' => 'ryan_gosling(gweh_bgt).jpg'
    ]);
});


//jadi  variabel yang di gunakan bukan yang blog_post tapi hanya yang post karena blog_post belum terdeteksi sedangkan post sudah terdeteksi.
Route::get('/blog', [PostController::class, 'index']);


//halaman singgel post

Route::get('blog/{post:slug}', [PostController::class, 'show']);



route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginControler::class,'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);







// route::get('/blog', function () {
//     return view('Post', [
//         'title' => 'All Post',
//         'posts' => Post::all()
//     ]);
// });

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('post', [
//         'title' => "Post By Category :$category->name",
//         'posts' => $category->posts->load('category', 'author'),
//     ]);
// });

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('post', [
//         'title' => "Post By Author : $author->name",
//         'posts' => $author->posts->load('category', 'author'),
//     ]);
// });
