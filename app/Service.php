<?php

namespace App;
use App\ReceiptDetail;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['code','name', 'price', 'description', 'is_active'];

    public function details(){
        return $this->hasMany('App\ReceiptDetail');
    }

    public function findByName($q){
        return $this->where('name', 'like', '%' . $q . '%')->get();
    }
}
