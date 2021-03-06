<?php

namespace App\Company;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    public $table = 'services';

    protected $guarded = ['id','created_at','updated_at'];

    public function rates()
    {
        return $this->hasOne(\App\Company\Rates::class,'service_id');
    }

    public function category()
    {
        return $this->belongsTo(\App\Company\Categories::class);
    }

    public function company()
    {
        return $this->belongsTo(Profile::class,'profile_id');
    }

    public function leads()
    {
        return $this->hasMany( Leads::class, 'service_id' );
    }

}
