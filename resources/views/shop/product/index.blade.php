@extends('layouts.app')

@section('title' , $product->name)

@section('content')
    <div class="section section-buttons">
        <div class="container">
            <div class="title">
                <h1>{{ $product->name}}</h1>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <img class="card-img-top" src="{{ url('uploads/'.$product->image) }}" alt="{{ $product->name }}">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <p>
                        <span style="margin-right: 20px">
                            <i class="nc-icon nc-calendar-60"></i> :  {{ $product->created_at }}
                        </span>
                    </p>
                    <p><b>Description: </b>
                        {{ $product->description }}
                    </p>
                    <br>
                    <p>Price: {{$product->price}}</p>
                    <p>Full Quantity: {{$product->fullquantity}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
