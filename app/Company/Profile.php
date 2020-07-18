<?php

namespace App\Company;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $table = 'company_profile';
    protected $guarded = ['id','created_at','deleted_at'];

    public function category()
    {
        return $this->belongsTo(App\Company\Categories::class);
    }

}
