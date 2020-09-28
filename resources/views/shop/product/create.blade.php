@extends('layouts.app')
@section('content')


<div class="container card card-body col-md-8" style="margin-top: 120px">
<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="row">
   <div class="col-md-6">
            <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Product Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                @error("name")
                <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
    </div>
    <div class="col-md-12">
            <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Product Description</label>
                <textarea name="description"  cols="30" rows="5" class="form-control @error('description') is-invalid @enderror"></textarea>
                @error("description")
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                 </span>
                @enderror
            </div>
    </div>
        <div class="col-md-12">
            <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Quantity</label>
                <input type="text" name="fullquantity" class="form-control @error('fullquantity') is-invalid @enderror">
                @error("fullquantity")
                <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
    </div>
    <div class="col-md-12">
            <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Price</label>
                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror">
                @error("price")
                <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
    </div>
    <br>
    <div class="col-md-6">
            <div >
                <label >image</label>
                <input type="file" name="image">
                @error("image")
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                 </span>
                @enderror
            </div>
    </div>
</div>

<button type="submit" class="btn btn-primary pull-right">Add</button>
<div class="clearfix"></div>
</form>
</div>


@stop