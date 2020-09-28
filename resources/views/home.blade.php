@extends('layouts.app')

@section('content')
    <div class="section section-buttons">
        <div class="container">
            <div class="title">
                 <a href="{{ route('create.customer') }}"> <button style="margin-left: 20px;" class="btn btn-primary pull-right">Add New Customer</button></a>
                  <a href="{{ route('order.create') }}"> <button class="btn btn-primary pull-right">Add New Order</button></a>
                <h2>Latest products</h2>
                @if(request()->has('search') && request()->get('search') != '')
                    <p style="margin-top: 10px">
                        you are search on  <b>{{ request()->get('search') }}</b> |  <a href="{{ route('home') }}"> Reset </a>
                    </p>
                @endif
            </div>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-lg-4">
                        <div class="card" style="width: 20rem;">
                            <a href="{{ route('product.show' , ['id' => $product->id]) }}" title="{{ $product->name }}">
                                <img class="card-img-top" src="{{ url('uploads/'.$product->image) }}" alt="{{ $product->name }}" style="max-height: 160px">
                            </a>
                            <div class="card-body">
                                <p class="card-text">
                                    <a href="{{ route('product.show' , ['id' => $product->id]) }}" title="{{ $product->name }}">
                                        {{ $product->name }}
                                    </a>
                                </p>
                                <small>{{ $product->created_at }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ $products->links() }}
                </div>
               <a href="{{ route('product.create') }}"> <button class="btn btn-primary pull-right">Add New Product</button></a>
            </div>
        </div>
    </div>
@endsection
