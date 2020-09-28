<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;
use App\Http\Requests\Order\StoreRequest;
use App\Exports\OrderExport;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{

  /*  public function __construct()
    {
        $this->middleware('auth')->only([
             'allordersapi'
        ]);
    } */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allordersapi()
    {
        $orders = Order::get();

        return response()->json($orders);
        //return view('shop.order.all' , compact('orders'));
    }

    public function all()
    {
        $orders = Order::orderBy('id' , 'desc');
       /* if(request()->has('search') && request()->get('search') != ''){
            $videos = $videos->where('name' , 'like' , "%".request()->get('search')."%");
        } */
        $orders = $orders->paginate(8);

        
        return view('shop.order.all' , compact('orders'));
    }

    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shop.order.create')->with('customers',Customer::all())->with('products',Product::all()); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $order = Order::create($request->all());
        $order->products()->attach($request->products); 
        return redirect()->route('order.all'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::with('products' , 'customer')->findOrFail($id);
        $customername = $order->customer->fullname; 
        return view('shop.order.show',compact('order','customername')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::with('products' , 'customer')->findOrFail($id);
        return view('shop.order.edit',compact('order')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::FindOrFail($id);
        $order->products()->sync($request->products);
        $order->update($request->all());
        return redirect()->route('order.show', $order->id); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::FindOrFail($id)->delete();
        session()->flash('success','Order deleted successfully');
        return redirect()->route('order.all'); 
    }
    public function export() 
    {
      //  return Excel::download(new OrderExport, 'order.csv');
        return Excel::download(new OrderExport, 'order.xlsx');
       /*/ return [
        (new OrderExport)->withHeadings(),
    ]; */
    }
}
