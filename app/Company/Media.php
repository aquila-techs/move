<?php

namespace App\Company;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public $table = 'company_media';
    public $guarded = ['id', 'created_at', 'updated_at'];


}
