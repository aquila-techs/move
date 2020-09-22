<?php

namespace App\Company;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $table = 'company_profile';
    protected $guarded = ['id','created_at','deleted_at'];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function services()
    {
        return $this->hasMany(Services::class)->with('rates');
    }

}
