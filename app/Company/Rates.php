<?php

namespace App\Company;

use Illuminate\Database\Eloquent\Model;

class Rates extends Model
{
    public $table = 'ratelist';

    protected $guarded = ['id','created_at','updated_at'];
}
