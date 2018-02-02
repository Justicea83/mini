@extends('app')

@section('title')
profile
@endsection

@section('content')
@include('includes.header')
    <div class="row">
        <div class="col-xs-12">
            <div class="front" >
        <img  style="height: 100%;" src="/SystemImages/{{Auth::user()->profileCover}}" alt="">
        
    </div>
     <img style="top: 70px;" src="/SystemImages/{{Auth::user()->profileImage}}" alt="" id="profileImage"> 
    
        </div>
    </div>
@endsection
 