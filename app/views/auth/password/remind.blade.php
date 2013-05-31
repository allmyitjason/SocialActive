@extends('template.public')

@section('content')

<div class="login-box">
						
	@if(Session::has('error'))
		<div class="alert alert-error">{{ trans(Session::get('reason')) }}</div>
	@endif

	@if(Session::has('message'))
		<div class="alert alert-success">{{ Session::get('message') }}</div>
	@endif
		
	<h2>Send password reminder</h2>
	<form class="form-horizontal" action="/password/remind" method="post">
		<fieldset>

			<div class="input-prepend" title="Username">
				<span class="add-on"><i class="icon-user"></i></span>
				<input class="input-large span10" name="email" id="email" type="text" placeholder="email"/>
			</div>
			<div class="clearfix"></div>

			<div class="btn-group button-login">	
				<input type="submit" class="btn btn-primary" value="Send Password Reminder">
			</div>

			<div class="clearfix"></div>
	</form>
	<hr>
	<p>
		{{ link_to_route('login','Back to Login') }}
	</p>	

</div><!--/span-->
@stop