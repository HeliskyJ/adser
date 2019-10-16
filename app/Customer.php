<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['fullname', 'cui', 'number_phone', 'description', 'deleted'];

    public function receipts()
    {
        return $this->hasMany('App\Receipts');
     }
}
