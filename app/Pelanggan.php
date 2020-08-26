<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table="pelanggan";

    protected $guarded = [];

    public function respon() {
        return $this->belongsTo('App\Respon');
    }

    public function booking(){
        return $this->hasMany('App\Booking');
    }

}
