<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Account Settings</h3>
		<p class="lead">Change basic account settings</p>
	</div>
	<div class="panel-body">
		  @include('../includes.errorbag')
		<form action="{{ route('user.saveacc') }}" method="post" >
	<div class="form-group">
	<label class="control-label">Name</label>
	<input type="text" class="form-control" name="username" placeholder="Enter username">
</div>
<div class="form-group">
		<label class="control-label">E-mail</label>
	<input type="text" class="form-control" name="email" placeholder="Enter email">
</div>
<button type="reset" class="btn btn-info btn-block">Discard</button>
<button type="submit" class="btn btn-info btn-block">Save?</button>
{{ csrf_field() }}
</form>
	</div>
</div>