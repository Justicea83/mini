@extends('app')

@section('title')
dashboard
@endsection

@section('content')
@include('includes.header')


<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">               
 <a href="{{ route('user.profile') }}"><img  src="/SystemImages/{{Auth::user()->profileCover}}" width="270" class="cover" height="100"  alt="Profile"></a>
 <a href="{{ route('user.profile') }}"> <img  src="/SystemImages/{{Auth::user()->profileImage}}" width="100" class="profile" height="100" alt="Profile">
</a>
<div style="position: relative; top: -100px; left: 135px;">
    <a href=""><h4><?php $x = $user; $y = explode(" ",$x); echo $y[0]; ?></h4></a>
   <a href=""> <p>@<?php echo $username; ?></p></a>
</div>
<div class="well">
    <ul class="settingsList">
        <li ><a href="" id="LoadAccount">Account </a> <span class="fa fa-angle-right" ></span></li>
        <hr/>
        <li><a href="" id="LoadAccountP">Password</a> <span class="fa fa-angle-right" ></span></li>

    </ul>
</div>

        </div>
        <div  class="col-xs-12 col-md-4">
          <div class="loadJ">
              
          </div>
            
        </div>
        <div class="col-xs-12 col-md-3">
            
        </div>
    </div>
</div>


@endsection
