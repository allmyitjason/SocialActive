@extends('template.base')

@section('content')
 <div class="container">
      <div class="row">
        <div class="span6 offset3">
			
			<div class="login-box well">

				@if(Session::has('error'))
				<div class="alert alert-error">{{ Session::get('error') }}</div>
				@endif

				<h2>Login to your account</h2>
				<form class="form-horizontal" action="/login" method="post">
					<fieldset>
						<div class="input-prepend" title="Username">
							<span class="add-on"><i class="icon-user"></i></span>
							<input class="input-large span10" name="email" id="email" type="text" placeholder="email"/>
						</div>
						<div class="clearfix"></div>

						<div class="input-prepend" title="Password">
							<span class="add-on"><i class="icon-lock"></i></span>
							<input class="input-large span10" name="password" id="password" type="password" placeholder="password"/>
						</div>

						<div class="clearfix"></div>


						<div class="btn-group button-login">	
							<button id="login" type="submit" class="btn btn-primary">Login</button>
						</div>
					<div class="clearfix"></div>
				</form>
				<hr>
				<a href='{{$facebookLogin}}'>Login with facebook</a>

				<h3>Forgot your password?</h3>
				<p>
					No problem, <a href="/password/remind">click here</a> to get a new password.
				</p>	
			</div><!--/login-box-->
		</div>
	</div>
</div>
@stop


