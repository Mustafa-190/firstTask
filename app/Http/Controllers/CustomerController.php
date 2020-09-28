<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Customer\StoreRequest;
use App\Models\Customer;

class CustomerController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	
    public function create()
    {
        return view('shop.customer.create');
    }
    
     public function store(StoreRequest $request)
     {

        Customer::create($request->all());

        return redirect()->route('home');
    }
}
