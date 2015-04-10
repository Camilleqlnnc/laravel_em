<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Student extends Model {

	protected $fillable = 
    [
        'firstname',
        'name',
        'note',
        'status',
        'bio',
        'link_thumbnail',
        'published_at',
        'type',
    ];

    public function setFirstNameAttribute($value)
    {
        $this->attributes['firstname'] = ucfirst(strtolower($value));
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst(strtolower($value));
    }

    public function scopeCurrent($query)
    {
      // return $query->where('published_at','<', Carbon::now()->format('Y-m-d'));
       return $query->where('status','=', 'publish')
                    ->where('published_at','<=', Carbon::now()->format('Y-m-d'));

    }

    /*public function scopeCurrent($query)
    {
        return $query->where('firstname','like', '%c%');
    }*/
}
