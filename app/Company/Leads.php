<?php

namespace App\Company;

use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function service()
    {
        return $this->belongsTo(Services::class, 'service_id')->with('category')->with('company');
    }


}
