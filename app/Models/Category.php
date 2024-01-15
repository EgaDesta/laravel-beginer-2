<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Category extends Model
// {
//     use HasFactory;
//     protected $guarded = ['id'];
//     public function posts()
//     {
//         return $this->hasMany(post::class);
//     }
// }


namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;


class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}