<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;
use App\Models\Order;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
	public function all()
	{
		$products = Product::orderBy('id' , 'desc');
       /* if(request()->has('search') && request()->get('search') != ''){
            $videos = $videos->where('name' , 'like' , "%".request()->get('search')."%");
        } */
        $products = $products->paginate(8);
        return view('home' , compact('products'));
	}

	public function show($id){
        $product = Product::findOrFail($id);
        $quantity = Order::select('id','quantity')->get();
        return view('shop.product.index' , compact('product','quantity'));
    }

    public function create()
    {
        return view('shop.product.create');
    }

    public function store(StoreRequest $request){

        $fileName = $this->uploadImage($request);
        $requestArray =  ['image' => $fileName] + $request->all();
        $product = Product::create($requestArray);

        return redirect()->route('home');
    }

    protected function uploadImage($request){
        $file = $request->file('image');
        $fileName = time().str_random('10').'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads') , $fileName);
        return $fileName; 

    }
}
