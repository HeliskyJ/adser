<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $fillable = ['customer_id', 'employee_id', 'schedule_id','date_service', 'service_time', 'service_end', 'is_active'];

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function employee()
    {
        return $this->belognsTo('App\Employee');
    }

    public function details()
    {
        return $this->hasMany('App\ReceiptDetail');
    }
}
