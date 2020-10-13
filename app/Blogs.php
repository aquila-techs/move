<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function picture()
    {
        return $this->hasOne(\App\BlogsMedia::class,'blog_id');
    }

    public function author()
    {
        return $this->belongsTo(\App\User::class,'user_id');
    }

    public function comments()
    {
        return $this->hasMany(BlogComments::class);
    }


}
