<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    public $table= 'contact_us';
    protected  $guarded = ['id','created_at','updated_at'];

}
