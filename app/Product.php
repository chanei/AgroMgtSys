<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['product_category_id', 'name', 'description', 'usage', 'product_status', 'product_image'];

    public function productcategory()
    {
        return $this->belongsTo('App\ProductCategory', 'product_category_id');
    }

    public function productreviews()
    {
        return $this->hasMany('App\ProductReview', 'product_id');
    }
}
