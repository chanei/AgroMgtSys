<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';
    protected $fillable = ['name', 'contact', 'address', 'registration_no', 'trading_license'];

    public function products()
    {
        return $this->hasMany('App\Product', 'supplier_id');
    }

}
