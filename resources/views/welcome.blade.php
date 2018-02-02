@extends('app')

@section('title')
welcome
@endsection

@section('content')
@include('includes.header')
<div class="front-img">
    <img src="/images/background.jpg"></img>
</div>  

<div id="background">
    <div class="row " >
    <div class="container">
        <div class="col-md-6">
        <h2 class="font">
            Welcome to Tweety
        </h2>
        <p class="lead font">
           A place to connect with your friends — and Get updates from the people you love, And get the 
            updates from the world and things that interest you
        </p>
        
       </div>
       <div class="col-md-6">
           
            @include('../includes.errorbag')
                
            @include('forms.login')
            @include('forms.register')
       </div>
    </div>
</div>
</div>
@endsection
