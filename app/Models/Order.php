<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    protected $fillable = ['customer_id','name','quantity','totalprice','created_at'];

    use SoftDeletes;

	public function products()
	{
	    return $this->belongsToMany(Product::class,'products_orders');
	}

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}

	public function hasProduct($ProductId)
	{
		return in_array($ProductId,$this->products->pluck('id')->toArray());
	}
}

