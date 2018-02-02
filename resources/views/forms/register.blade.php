<div class="col-md-8 col-md-offset-2">

	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="text-center">Sign Up</h4>
		</div>
		<div class="panel-body">
			<form action="{{ route('register.user') }}" method="post">
				<div class="form-group">
			
			    <input type="text" class="form-control" name="name" placeholder="Enter Name">
		       </div>

		<div class="form-group">
			
			<input type="text" class="form-control" name="email" placeholder="Enter E-mail">
		</div>
		<div class="form-group">
			
			<input type="password" class="form-control" name="password" placeholder="Enter password">
		</div>
		<div class="form-group">
			
			<input type="password" class="form-control" name="password_confirmation" placeholder="Re-enter password">
		</div>
		
			<button type="submit"  class="btn btn-primary changePosition">signup</button>
		
		{{csrf_field()}}
	</form>
		</div>
	</div>
	
</div>