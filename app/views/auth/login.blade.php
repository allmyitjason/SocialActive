@extends('template.base')

@section('content')

<!-- Page heading -->
  <!-- Give background color class on below line (bred, bgreen, borange, bviolet, blightblue, bblue) -->
  <div class="page-heading blightblue">
    <div class="container">
      <div class="row">
        <div class="span12">
          <h2 class="pull-left"><i class="icon-arrow-right title-icon"></i> Login</h2>
          <div class="pull-right heading-meta"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page heading ends -->
    <!-- Content starts -->
  <div class="content">
 <div class="container">
 	      <div class="register">
              <div class="row">



                <div class="span6 offset3 ">
                  <div id="login-box">

					<!-- start: Row -->
					<div class="row-fluid">

						<div id="login-form" class="span12">

							<div class="page-title-small">

								<h3>use your account</h3>

							</div>

							<a href="{{$facebookLogin}}" class="facebook_connect">
								<div class="img"><i class="icon-facebook"></i></div>
								<div class="text">Login with Facebook</div>
							</a>
							<a href="" class="twitter_connect">
								<div class="img"><i class="icon-twitter"></i></div>
								<div class="text">Login with Twitter</div>
							</a>



							<div class="page-title-small">

								<h3>or</h3>

							</div>
							@if(Session::has('error'))
								<div class="alert alert-error">{{ Session::get('error') }}</div>
							@endif
							<form action="/login" method="post">

								<div class="row-fluid">
									<input class="span12" name="email" id="email" type="text" placeholder="email"/>
									<input class="span12" id="pass" name="password" type="password" value="" placeholder="password"/>

								</div>

								<div class="row-fluid">

									<div class="remember">
										<input id="remember" name="remember" type="checkbox" value="1"/> Remember me!
									</div>

									<div class="forgot">
										<a href="/password/remind">Forgot password?</a>
									</div>

								</div>	

								<div class="actions">

									<button type="submit" class="btn btn-primary span12">Login!</button><br /><br />
									<a style='margin-left:0px' class="btn btn-warning span12" href='/register'>Create an new account</a>

								</div>

							</form>

						</div>

					</div>
					<!-- end: Row -->	

				</div>

                </div>
              </div>
            </div> 
</div>
</div>
@stop


