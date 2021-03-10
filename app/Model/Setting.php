<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = "settings";
    protected $primary_Key = 'id';
    protected $fillable = [
         'sitename_ar',
         'sitename_en', 
         'logo',
         'icon',
         'main_lang',
         'description',
         'keywords',
         'status',
         'message_mainenance',
    ];
}
