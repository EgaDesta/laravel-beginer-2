<?php
 
use App\Models\Category;
use Clockwork\Request\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginControler;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/login', [LoginControler::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginControler::class,'authenticate']);
Route::post('/logout', [LoginControler::class,'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
//
// Route::post('/dashboard/posts', 'DashboardPostController@store')->name('posts.store');
