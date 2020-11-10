<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportProduct extends Model
{
    protected $table = 'report_products';
    protected $fillable = ['name', 'phone_number', 'product_name', 'product_dealer', 'reason', 'product_image'];
}
