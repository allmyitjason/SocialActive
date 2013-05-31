@extends('template.public')

@section('content')

<div class="login-box">
	
	@if(Session::has('error'))
		<div class="alert alert-error">{{ trans(Session::get('reason')) }}</div>
	@endif

	@if(Session::has('message'))
		<div class="alert alert-success">{{ Session::get('reason') }}</div>
	@endif
		
	<h2>Reset Password</h2>
	<form class="form-horizontal" action="/password/reset/{{$token}}" method="post">
		<fieldset>

			<input type="hidden" name="token" value="{{ $token }}">

			<div class="input-prepend" title="Username">
				<span class="add-on"><i class="icon-user"></i></span>
				<input class="input-large span10" name="email" id="email" type="text" placeholder="email" v/>
			</div>

			<div class="input-prepend" title="Password">
				<span class="add-on"><i class="icon-lock"></i></span>
				<input class="input-large span10" name="password" id="password" type="password" placeholder="password"/>
			</div>

			<div class="input-prepend" title="Password">
				<span class="add-on"><i class="icon-lock"></i></span>
				<input class="input-large span10" name="password_confirmation" id="password_confirmation" type="password" placeholder="confirm password"/>
			</div>

			<div class="clearfix"></div>

			<div class="btn-group button-login">	
				<button type="submit" class="btn btn-primary">Reset Password</button>
			</div>
		<div class="clearfix"></div>
	</form>
	<hr>
	<p>
		{{ link_to_route('login','Back to Login') }}
	</p>	

</div><!--/span-->
@stop