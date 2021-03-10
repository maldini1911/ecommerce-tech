<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{

    protected $table = 'laptops';
    protected $primary_key = 'id';
    protected $fillable = [
        'name',
        'desc', 
        'price',
        'cpu',
        'ram', 
        'battry',
        'wifi',
        'screen_size', 
        'hard_drive',
        'laptop_image',
        'parent_lap',
        'os_type',
        'processor_type',
        'sale',
        'offer_type'
    ];

    public function parent_lap(){

        return $this->hasMany('App\Model\Department', 'id', 'parent_lap');
    }
}
