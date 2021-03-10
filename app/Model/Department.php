<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Department extends Model
{
    protected $table = "departments";
    protected $fillable = [
        'deb_name_ar',
        'deb_name_en',
        'icon',
        'description',
        'keyword',
        'parent',
        'width',
        'height',
    ];

    public function parent(){

        return $this->hasMany('App\Model\Department', 'id', 'parent');
    }
}

