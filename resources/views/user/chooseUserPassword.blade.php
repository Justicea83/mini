<div class="panel panel-default">
  <div class="panel-heading">
    <h3>Account Settings</h3>
    <p class="lead">Change basic account settings</p>
  </div>
  <div class="panel-body">
      @include('../includes.errorbag')
    <form action="{{ route('user.savepass') }}" method="post" >
  <div class="form-group">
  <label class="control-label">Current Password</label>
  <input type="password" class="form-control" name="current" placeholder="Enter current password">
</div>
 <div class="form-group">
  <label class="control-label">New Password</label>
  <input type="password" class="form-control" name="password" placeholder="Enter new password">
</div>
 <div class="form-group">
  <label class="control-label">Confirm Password</label>
  <input type="password" class="form-control" name="password_confirmation" placeholder="confirm password">
</div>
<button type="reset" class="btn btn-info btn-block">Discard</button>
<button type="submit" class="btn btn-info btn-block">Save?</button>
{{csrf_field()}}
</form>
  </div>
</div>