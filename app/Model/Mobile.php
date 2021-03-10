<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    protected $table = 'mobiles';
    protected $primary_key = 'id';
    protected $fillable = [
        'name',
        'desc', 
        'price',
        'cpu',
        'ram', 
        'camera',
        'memory',
        'screen_size', 
        'mobile_image',
        'parent_mob',
        'sale',
        'offer_type'
    ];

    public function parent_mob(){

        return $this->hasMany('App\Model\Department', 'id', 'parent_mob');
    }
}
