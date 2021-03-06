<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Product extends Model
{
    protected $fillable = ['name','description','image','price','fullquantity'];


	public function orders()
	{
	    return $this->belongsToMany(Order::class,'products_orders');
	}
    
}

