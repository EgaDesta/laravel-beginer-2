<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory,  Sluggable;
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
       
        $query->when(isset($filters['search']), function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                         ->orWhere('body', 'like', '%' . $search . '%');
        });
    
        $query->when(isset($filters['category']), function($query, $category) {
            return $query->whereHas('category', function ($query) use ($category){
                $query->where('slug', $category);
            });
        });

        $query->when(isset($filters['author']), function ($query) use ($filters) {
            $query->whereHas('author', function ($query) use ($filters) {
                $query->where('username', $filters['author']);
            });
        });
        
   }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(user::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
