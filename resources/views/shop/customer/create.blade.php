@extends('layouts.app')
@section('content')


<div class="container card card-body col-md-8" style="margin-top: 120px">   
    <h1 style="margin-bottom: 20px;">Add Customer</h1>
<form action="{{ route('store.customer') }}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="row">
   <div class="col-md-6">
            <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">FullName</label>
                <input type="text" name="fullname" class="form-control @error('fullname') is-invalid @enderror">
                @error("fullname")
                <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
    </div>
    <div class="col-md-6">
            <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Phone</label>
                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror">
                @error("phone")
                <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
    </div>
    <div class="col-md-6">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Address</label>
                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror">
                    @error("address")
                    <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
        </div>
    <br>
</div>

<button type="submit" class="btn btn-primary pull-right">Add</button>
<div class="clearfix"></div>
</form>
</div>


@stop