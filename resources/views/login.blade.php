@extends('layout')

@section('pageTitle', 'Login')
@section('content')
	<div class="contentformBox">
		<div id="login">   
			<h1>Welcome Back!</h1>
      
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
							<input type="text" name="password" id="password" required />
						</div>
						<br>
						<input type="submit" value="Get Matching" class="submitLogForm">
		                <input type="submit" value="Sign Up Now" onclick="location.href='http://ec2-13-54-159-102.ap-southeast-2.compute.amazonaws.com/register';" class="submitLogForm">
					</div>
				</div>
			</form>
      </div>
	</div> 
@stop