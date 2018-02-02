
<div class="col-md-8 col-md-offset-2">

	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="text-center">Login</h4>
		</div>
		<div class="panel-body">
			<form action="{{ route('login.user') }}" method="post">
		<div class="form-group">
			
			<input type="text" class="form-control" name="email" placeholder="Enter E-mail">
		</div>
		<div class="form-group">
			
			<input type="password" class="form-control" name="password" placeholder="Enter password">
		</div>
		<div class="checkbox">
			<label for=""><input type="checkbox" name="remember" id="">Remember me</label>
			<button type="submit"  class="btn btn-primary changePosition">Login</button>
		</div>
		{{ csrf_field() }}
	</form>
		</div>
	</div>
	
</div>