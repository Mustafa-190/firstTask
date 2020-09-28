@extends('layouts.app')
@section('content')
<div class="container card card-body col-md-8" style="margin-top: 120px">
<form action="{{ route('order.update', $order->id) }}" method="POST" >
  {{ method_field('put') }}
  {{ csrf_field() }}
    <div class="row">
        <div class="col-md-6">
                  <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Name Order</label>
                      <input type="text" name="name" value="{{$order->name}}" class="form-control @error('name') is-invalid @enderror">
                      @error("name")
                      <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>
         </div>
        <div class="col-md-6">
          <label for="exampleFormControlSelect1">Customer Name</label>
          <br>
          <label class="bmd-label-floating"><h5>{{$order->customer->fullname}}</h5></label>
        </div>
        <div class="col-md-6">
          <label for="exampleFormControlSelect2">Edit Products</label>
          <select class="form-control @error('products[]') is-invalid @enderror" id="exampleFormControlSelect2" name="products[]" multiple>
            @foreach($order->products as $product)
              <option value="{{$product->id}}" @if($order->hasProduct($product->id)) selected @endif>{{$product->name}}</option>
            @endforeach
          </select>
          @error("products[]")
            <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
             </span>
            @enderror
        </div>
        <div class="col-md-6">
                  <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Full Quantity</label>
                      <input type="text" name="quantity" value="{{$order->quantity}}" class="form-control @error('quantity') is-invalid @enderror">
                      @error("quantity")
                      <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>
         </div>
         <div class="col-md-6">
                  <div class="form-group bmd-form-group" >
                      <label class="bmd-label-floating">Total Price</label>
                      <input type="text" name="totalprice" value="{{$order->totalprice}}" class="form-control @error('totalprice') is-invalid @enderror">
                      @error("totalprice")
                      <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>
         </div>

      </div>
      <button type="submit" class="btn btn-primary pull-right">Update</button>
  </form>

</div>
@stop