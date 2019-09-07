<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_vat extends Model
{
    protected $table = 'user_vats';

    public function vat()
    {
        return $this->belongsTo('App\Vat', 'vat_id');   //each user_vat belongs to exaclty one vat id
    }
}