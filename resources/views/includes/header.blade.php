<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
        <div class="navbar-brand">
           <a href=""> Swirlfeed</a>
          
        </div>
        </div>
        @if(Auth::check())
        <ul class="nav navbar-nav navbar-left">
             <li> <a href="{{ route('home') }}"><span class="glyphicon glyphicon-home"></span>Home</a></li>
            <li> <a href=""><span class="glyphicon glyphicon-bell"></span>Notifications</a></li>
             <li> <a href=""><span class="glyphicon glyphicon-envelope"></span>Messages</a></li>
        </ul>
         <ul class="nav navbar-nav navbar-left">
            <button class="btn btn-primary navbar-btn">Tweet</button>
         </ul>
         
       <div class="dropdown nav navbar-nav navbar-right">
            <img  src="/SystemImages/{{Auth::user()->profileImage}}" class="nav-image hidden-xs hidden-sm dropdown-toggle" width="50" height="50" alt="Profile" id="profile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <ul class="dropdown-menu" aria-labelledby="profile">
                <li><a href="" title="">{{Auth::user()->name}}</a></li>
                <li role="separator" class="divider"></li>
                 <li><a href="{{route('user.settings')}}" title="">Settings</a></li>
                 <li><a href="{{route('user.editprofile')}}" title="">Edit Profile</a></li>
                 <li role="separator" class="divider"></li>
                  <li><a href="{{ route('user.logout') }}">Logout</a></li>
            </ul>
       </div>

        <form action="" class="navbar-form navbar-right form-inline hidden-xs">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button class="btn btn-primary">Search</button>
        </form>
         @endif
    </div>
</nav>