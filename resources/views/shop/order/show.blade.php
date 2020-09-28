@extends('layouts.app')
@section('content')

<div class="container" style="margin-top: 120px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-lg-6">
                        <div class="card-body">
                          <p class="card-text">
                            <small>  Order Number : #<b>{{$order->id}}</b> </small>
                            <h3>  Order Name : <b>{{$order->name}}</b> </h3>

                          </p>
                          <small><h3>Customer Name: {{ $customername }}</h3></span>
                           <h3>  Products : <b>
                           @foreach($order->products as $product)
                          <ul>{{ $product->name }}</ul>
                          @endforeach
                            </b> </h3> 
                          
                          <small><h3>Full Quantity : {{ $order->quantity }}</h3></small>
                          <small><h3>Total Price : {{ $order->totalprice }}</h3></small>
                          <br>
                          <small>Date : {{ $order->created_at }}</small>
                          <br>
                          <br>
                          <small><a href="{{ route('order.edit', $order->id) }}"><button class="btn btn-success">Edit</button></a></small>
                          <form action="{{ route('order.destroy', $order->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <br>
                            <small><button class="btn btn-danger btn-flat btn-sm remove-user" data-id="{{ $order->id }}" data-action="{{ route('order.destroy',$order->id) }}">Delete</button></small>  
                             </form>
                          <br><br> 
                          <a href="{{ route('order.export') }}"> <button class="btn btn-primary pull-right">Print To Excel File</button></a>
                        </div>
                            
                    </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop