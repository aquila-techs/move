<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogComments extends Model
{
    public $table = 'blog_comments';

    protected  $fillable = ['comment'];

    public function blog()
    {
        return $this->belongsTo(Blogs::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }


}
