<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReceiptDetail extends Model
{
    protected $fillable = ['flat', 'price', 'total', 'address', 'date_service', 'service_time', 'description'];

    public function receipt()
    {
        return $this->belongsTo('App\Receipt');
    }

    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}
