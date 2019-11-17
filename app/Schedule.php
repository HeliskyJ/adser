<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function receipts()
    {
        return $this->hasMany('App\Receipt');
    }
}
