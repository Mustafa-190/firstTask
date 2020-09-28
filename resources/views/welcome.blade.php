@extends('layouts.app')

@section('content')
<div class=" section flex-center position-ref full-height content" style="font-size: 84px; text-align: center;">
                <div class="title m-b-md">
                    Welcome to Shop
                </div>

                <div class="flex-center" style="font-size: 25px;">
                    <p>If you have account please <a href="{{ url('/login') }}">Log in</a> </p>
                    <hr> 
                    <p>If you dont have account please <a href="{{ url('/register') }}">Sign up</a> </p>
                </div>
</div>
@stop