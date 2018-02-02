@extends('../app')

@section('title')
Username
@endsection

@section('content')

<div class="row">
  <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
    <div class="chooseUsername">
      @include('../includes.errorbag')
      <h3 class="text-center">Choose a Username</h3>
      <p>Don't worry you can always change it later</p>
      
      <form method="post" action="{{ route('user.redirect',['id'=>$user]) }}">
      
        <div class="form-group">
          <input class="form-control" type="text" name="username" placeholder="Username">
        </div>
        <button class="btn btn-info btn-block" type="submit">Next</button>
        {{ csrf_field() }}
      </form>
    </div>
  </div>
</div>

@endsection
