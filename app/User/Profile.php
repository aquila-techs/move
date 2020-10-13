<?php

namespace App\User;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $table = 'user_profile';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }

}
