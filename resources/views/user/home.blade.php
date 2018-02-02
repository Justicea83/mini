@extends('app')

@section('title')
dashboard
@endsection

@section('content')
@include('includes.header')


<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-3">               
 <a href="{{ route('user.profile') }}"><img  src="/SystemImages/{{Auth::user()->profileCover}}" width="270" class="cover" height="100"  alt="Profile"></a>
 <a href="{{ route('user.profile') }}"> <img  src="/SystemImages/{{Auth::user()->profileImage}}" width="100" class="profile" height="100" alt="Profile">
</a>
<div style="position: relative; top: -100px; left: 135px;">
    <a href=""><h4><?php $x = $user; $y = explode(" ",$x); echo $y[0]; ?></h4></a>
   <a href=""> <p>@<?php echo $username; ?></p></a>
</div>
<ul  class="list-inline handle-inline">
    <li>TWEETS</li>
    <li>FOLLOWING</li>
    <li>FOLLOWERS</li>
    <br>
    <li style="margin:5px 20px 0 20px ">10</li>
    <li style="margin:5px 20px 0 30px ">0</li>
    <li style="margin:5px 20px 0 50px ">0</li>
</ul>
        </div>
        <div class="col-xs-12 col-md-4">
            <div class="well well-lg" style="width: 500px; height: 200px;"> 
                <img  src="/images/defaultprofileimage.png" style="border-radius: 4px;" width="60" height="50" alt="">
                <div id="input">
                    <form action="">
                    <div class="form-group">
                     <textarea class="form-control" name="tweet"    rows="3" placeholder="Type something here"></textarea>
 </div>             <span class="glyphicon glyphicon-camera"></span>
                    <ul class="list-inline" style="float: right;">

                        <li><p>140</p></li>
                        <li><button type="submit" class="btn btn-success"> tweet</button></li>

                    </ul>
                </form>
                </div>
            </div>
            
        </div>
        <div class="col-xs-12 col-md-3">
            
        </div>
    </div>
</div>


@endsection
