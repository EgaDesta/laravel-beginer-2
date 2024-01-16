<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class post extends Model
// {
//     use HasFactory;

//     // protected $fillable = ['title','excerpt','body'];
//     protected $guarded = ['id'];
//     public function category(){
//         return $this->belongsTo(Category::class);

//     }

// }


namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(user::class, 'user_id');
    }
}
