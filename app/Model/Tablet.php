<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tablet extends Model
{
    protected $table = 'tablets';
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
        'parent_tap',
        'tablet_image',
        'sale',
        'offer_type',
    ];

    public function parent_tap(){

        return $this->hasMany('App\Model\Department', 'id', 'parent_tap');
    }
}
