<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ordar extends Model
{
    protected $table = 'ordars';
    protected $primary_key = 'id';

    protected $fillable = [
        'id_user',
        'id_laptop',
        'id_tablet',
        'id_mobile',
        'count_shop',
        'order_state',
        'buy_state', 
        'finsh'
    ];

    //----> With Id User 
    public function users(){
        return $this->hasOne('App\Model\User', 'id', 'id_user');
    }

    //----> With Id Laptop 
    public function laptops(){
        return $this->hasOne('App\Model\Laptop', 'id', 'id_laptop');
    }

    //----> With Id Tablet
    public function tablets(){
        return $this->hasOne('App\Model\Tablet', 'id', 'id_tablet');
    }

    //----> With Id Mobile
    public function mobiles(){
        return $this->hasOne('App\Model\Mobile', 'id', 'id_mobile');
    }

}