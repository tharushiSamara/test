<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vat extends Model
{
    protected $table = 'vats';

    public function assessmentRanges(){
        return $this->hasMany('App\Assessment_range','vat_id'); //one vat has many assesment ranges
    }
}