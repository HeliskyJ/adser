<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'price', 'description', 'is_active', 'done'];

    public function details(){
        return $this->hasMany('App\ReceiptDetail');
    }
}
