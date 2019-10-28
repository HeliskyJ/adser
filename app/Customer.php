<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['fullname', 'cui', 'number_phone', 'address', 'description', 'deleted'];

    public function receipts()
    {
        return $this->hasMany('App\Receipt');
     }

     public function findByName($q){
         return $this->where('fullname', 'like', '%' . $q . '%')->get();
     }
}
