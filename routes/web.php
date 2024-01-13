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

Route::get('/', function () {
    return view('Home',[
        'title' => 'Home'
    ]);
});
Route::get('/abaut', function () {
    return view('Abaut',[
        'title'=>'About',
        'nama' => 'vinxx',
        'email'=> 'vincx@gmail.com',
        'gambar'=> 'ryan_gosling(gweh_bgt).jpg'
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            'judul' => 'Judul Post Pertama',
            'slug'  => 'judul-post-pertama',
            'penulis' => 'Vinxx',
            'tanggal' => '12 Desember 2021',
            'body'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam ab dolore sit ipsam nam tenetur similique fugit, laborum expedita pariatur, provident, nemo libero quidem placeat iure minus harum voluptatem 
            quia consequuntur? Dolores accusamus nobis, vero odit illum laborum reiciendis! Odit maiores dignissimos laborum eius cumque? Voluptatibus quae iusto corrupti necessitatibus, dignissimos,
             impedit commodi ad aliquid cumque totam facilis, quo facere officiis rem consequatur. Harum sunt officia, consectetur aut laboriosam ut similique reiciendis impedit illum modi blanditiis fugit rerum facilis dolor'
        ],
        [
            'judul' => 'Judul Post Kedua',
            'slug'  => 'judul-post-kedua',
            'penulis' => 'John Doe',
            'tanggal' => '10 Januari 2022',
            'body' => '
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ipsam nesciunt rem aperiam accusantium sequi expedita. Totam cupiditate vero velit architecto dicta. Similique voluptate sint dolor nemo consequuntur impedit
            tenetur perferendis architecto magni voluptates, vel repudiandae beatae eum quibusdam quidem, mollitia blanditiis delectus natus dicta illo pariatur alias veniam. Fuga debitis eius aliquam exercitationem adipisci, quia ratione.
            Officia deserunt in tempore fuga impedit. Iusto harum dolorem et. Itaque molestias alias quos voluptate dolore magnam recusandae. Quidem quis ullam cum inventore tenetur ab eligendi nulla sint qui molestiae ad, laborum dolorum!'
        ]
        ];
    return view('Post',[
        'title'=>'post',
        'post'=> $blog_posts//jadi  variabel yang di gunakan bukan yang blog_post tapi hanya yang post karena blog_post belum terdeteksi sedangkan post sudah terdeteksi.
    ]);
});



//halaman singgel post

Route::get('blog/{slug}', function($slug){
    $blog_posts = [
        [
            'judul' => 'Judul Post Pertama',
            'slug'  => 'judul-post-pertama',
            'penulis' => 'Vinxx',
            'tanggal' => '12 Desember 2021',
            'body'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam ab dolore sit ipsam nam tenetur similique fugit, laborum expedita pariatur, provident, nemo libero quidem placeat iure minus harum voluptatem 
            quia consequuntur? Dolores accusamus nobis, vero odit illum laborum reiciendis! Odit maiores dignissimos laborum eius cumque? Voluptatibus quae iusto corrupti necessitatibus, dignissimos,
             impedit commodi ad aliquid cumque totam facilis, quo facere officiis rem consequatur. Harum sunt officia, consectetur aut laboriosam ut similique reiciendis impedit illum modi blanditiis fugit rerum facilis dolor'
        ],
        [
            'judul' => 'Judul Post Kedua',
            'slug'  => 'judul-post-kedua',
            'penulis' => 'John Doe',
            'tanggal' => '10 Januari 2022',
            'body' => '
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ipsam nesciunt rem aperiam accusantium sequi expedita. Totam cupiditate vero velit architecto dicta. Similique voluptate sint dolor nemo consequuntur impedit
            tenetur perferendis architecto magni voluptates, vel repudiandae beatae eum quibusdam quidem, mollitia blanditiis delectus natus dicta illo pariatur alias veniam. Fuga debitis eius aliquam exercitationem adipisci, quia ratione.
            Officia deserunt in tempore fuga impedit. Iusto harum dolorem et. Itaque molestias alias quos voluptate dolore magnam recusandae. Quidem quis ullam cum inventore tenetur ab eligendi nulla sint qui molestiae ad, laborum dolorum!'
        ]
        ];

foreach($blog_posts as $post){
    if($post['slug']===$slug)
    $new_post = $post;
}

    return view('pst',[
        "title" => "Single Post",
        'pst'=> $blog_posts,
        'post' =>$new_post
    ]);

});