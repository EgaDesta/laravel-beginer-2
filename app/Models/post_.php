<?php

namespace App\Models;

class post 
{
    private static $blog_post = [
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
        ],
        [
            'judul' => 'Judul Post Ketiga',
            'slug'  => 'judul-post-ketiga',
            'penulis' => 'kevin mark',
            'tanggal' => '15 februari 2023',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, molestias? Cumque non architecto unde facilis quae corrupti distinctio fugit officiis odio nam totam, itaque minima tenetur illum magnam veniam ipsum dolor
             quod blanditiis suscipit iste. Culpa, eius beatae. Cumque consequuntur inventore provident. Ut accusantium nam suscipit quis dolore consectetur sint obcaecati neque cum quibusdam officiis itaque excepturi saepe iure odio culpa, quam
            reiciendis repudiandae labore error nobis doloribus consequuntur? Dolor commodi, sit, enim tenetur vel maxime voluptas earum sint consequuntur id obcaecati tempora, adipisci nihil esse illum veritatis!'
        ]
        ];

public static function all()
{
    return collect(self::$blog_post);
}

public static function find($slug)
{
    $posts = static::all();
   
    return $posts->firstWhere('slug',$slug);
}


}
