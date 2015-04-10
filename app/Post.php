<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    protected $fillable =
        [
            'title',
            'author',
            'content',
            'status',
            'category_id',
            'published_at',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag','tag_post');
    }

}
