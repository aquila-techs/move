<?php

namespace App\Company;

use Illuminate\Database\Eloquent\Model;


class Categories extends Model
{
    public $table = 'company_categories';
    protected $guarded = ['id','created_at','deleted_at'];

}
