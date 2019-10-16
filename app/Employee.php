<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['fullname', 'cui', 'number_phone', 'description', 'is_active', 'busy_time', 'deleted'];

    public function receipts()
    {
        return $this->hasMany('App\Employee');
    }
}
