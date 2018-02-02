@extends('app')

@section('title')
profile
@endsection

@section('content')
@include('includes.header')
    <div class="row">
        <div class="col-xs-12">
            <div class="front">
        <img  src="/SystemImages/{{Auth::user()->profileCover}}" alt="">
        <div class="glass">
        <div class="dropdown">
            <span class="glyphicon glyphicon-camera" style="color: white;" 
            id="camera1" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="true"></span>
            
                 <ul class="dropdown-menu" aria-labelledby="camera1">
                 <li><a href="" title=""><label for="newimageCover">Upload Image</label></a></li>
                 <li><a href="">Remove</a></li>
                 <li><a href="">Cancel</a></li>
             </ul>
             </form>
        </div>
        <p>Change your profile photo</p>
    </div>
    </div>
    <div>
     <img src="/SystemImages/{{Auth::user()->profileImage}}" alt="" id="profileImage"> 
   <div class="no-glass">
       <div class="dropdown">
            <span class="glyphicon glyphicon-camera" id="camera" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="true"></span>
             <ul class="dropdown-menu" aria-labelledby="camera">
                 <li><a href="" title=""><label for="newimage">Upload Image</label></a>
                 </li>
                 <li><a href="">Remove</a></li>
                 <li><a href="">Cancel</a></li>
             </ul>
       </div>
        <p>Change your profile photo</p>
    </div>
     </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1  col-md-4 col-md-offset-4">
             @include('../includes.errorbag')
           <form action="{{ route('user.edit') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                <label class="control-label" for="">Name</label>
                
                <input class="form-control" type="text" name="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label class="control-label" for="">Username</label>
                
                <input class="form-control" type="text" name="username" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label class="control-label" for="">Tell us something about you</label>
                <textarea class="form-control" name="description" rows="5" placeholder="Enter Something about yourself"></textarea>
            </div>
            <div class="form-group">
                <label class="control-label" for="">Country</label>
                <input class="form-control" type="text" name="country" placeholder="Enter country">
            </div>
            <div class="form-group">
                <input id="newimage" type="file" class="form-control hidden" name="profileImage">
            </div>
            <div class="form-group">
                <input id="newimageCover" type="file" class="form-control hidden" value="Profile Photo" 
                name="profileCover">
            </div>
            <button id="cancel" type="reset" class="btn btn-primary btn-block">Cancel</button>
            <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
            {{ csrf_field() }}
           </form>

        </div>
    </div>
@endsection
 