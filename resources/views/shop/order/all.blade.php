@extends('layouts.app')

@section('content')
    <div class="section section-buttons">
        <div class="container">
            <div class="title">
                  <a href="{{ route('order.create') }}"> <button class="btn btn-primary pull-right">Add New Order</button></a>
                <h2>Latest orders</h2>
                @if(request()->has('search') && request()->get('search') != '')
                    <p style="margin-top: 10px">
                        you are search on  <b>{{ request()->get('search') }}</b> |  <a href="{{ route('home') }}"> Reset </a>
                    </p>
                @endif
            </div>
            <div class="row">
                @foreach($orders as $order)
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">
                                    Order Number : <b>{{$order->id}}</b>
                                    <br>
                                     Order Name : <b>{{$order->name}}</b>

                               </p>
                                <small><h3>Customer Name : {{ $order->customer->fullname }}</h3></small>
                                <small><h3>Total Price : {{ $order->totalprice }}</h3></small>
                                <br>
                                <small>Date : {{ $order->created_at }}</small>
                                <br>
                                <a href="{{ route('order.show', $order->id) }}"> <button class="btn btn-primary pull-right">Show</button></a>
                            </div>
                        </div>
                            
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
