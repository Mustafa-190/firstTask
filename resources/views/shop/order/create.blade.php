@extends('layouts.app')
@section('content')
<div class="container card card-body col-md-8" style="margin-top: 120px">
<form action="{{ route('order.store') }}" method="POST" >
  {{ csrf_field() }}
    <div class="row">
        <div class="col-md-6">
                  <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Name Order</label>
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                      @error("name")
                      <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>
         </div>
        <div class="col-md-6">
          <label for="exampleFormControlSelect1">Choose Customer</label>
          <select class="form-control @error('customer_id') is-invalid @enderror" id="exampleFormControlSelect1" name="customer_id">
            @foreach($customers as $customer)
              <option value="{{$customer->id}}" >{{$customer->fullname}}</option>
            @endforeach
          </select>
          @error("customer_id")
            <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
             </span>
            @enderror
        </div>
        <div class="col-md-6">
          <label for="exampleFormControlSelect2">Choose Products</label>
          <select class="form-control @error('products[]') is-invalid @enderror" id="exampleFormControlSelect2" name="products[]" multiple>
            @foreach($products as $product)
              <option value="{{$product->id}}" >{{$product->name}}</option>
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
                      <label class="bmd-label-floating">Quantity</label>
                      <input type="text" name="quantity" class="form-control @error('quantity') is-invalid @enderror">
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
                      <input type="text" name="totalprice" class="form-control @error('totalprice') is-invalid @enderror">
                      @error("totalprice")
                      <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>
         </div>

      </div>
      <button type="submit" class="btn btn-primary pull-right">Add</button>
  </form>

</div>
@stop