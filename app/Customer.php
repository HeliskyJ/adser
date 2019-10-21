<?php

namespace App;
use App\Receipt;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['fullname', 'cui', 'number_phone', 'address', 'description', 'deleted'];

    public function receipts()
    {
        return $this->hasMany('App\Receipt');
     }
}
