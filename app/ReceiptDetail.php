<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReceiptDetail extends Model
{
    protected $fillable = ['duration', 'price', 'total'];

    public function receipt()
    {
        return $this->belongsTo('App\Receipt');
    }

    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}
