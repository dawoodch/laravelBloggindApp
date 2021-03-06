<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title', 'featured', 'content', 'category_id', 'slug'
    ];
    public function getFeaturedAttribute($featured){
        return asset($featured);
    }

    public function category(){
        return $this->belongTo('App\Category');
    }
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

}
