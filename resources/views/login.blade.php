@extends('layout')

@section('pageTitle', 'Login')
@section('content')
	<div class="contentformBox">
		<div id="login">   
			<h1>Welcome Back!</h1>
			<p>Not a user? <a href='/register'>Register here</a></p>
      
			<form method="POST" action="{{ route('login') }}">
				{{ csrf_field() }}
				<div class="logRegDes">
					<div class="middleForm">
						<div class="form-group">
							<br>
							<p> Email Address </p>
							<input type="email" name="email" id="email" required />
						</div>
						<div class="form-group">
							<br>
							<p> Password <a class="forgotA" href="#">Forgot Password?</a></p>
							<input type="password" name="password" id="password" required />
						</div>
						<br>
						<input type="submit" value="Get Matching" class="submitLogForm">
					</div>
				</div>
			</form>
      </div>
	</div> 
@stop