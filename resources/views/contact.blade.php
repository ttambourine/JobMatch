@extends('layout')

@section('pageTitle', 'Contact Us')
@section('content')
	<div class="thinBanner">
		<img src="http://i.imgur.com/JKdd1ns.jpg" class="thinBan">
	</div>
	<div class="stretch">
		<h1> Have a Question or Comment?  </h1>
	</div>
	<div class="container">
		<form action="/action_page.php">

			<label for="fname">First Name</label><br>
			<input type="text" id="fname" name="firstname" placeholder="Your name.." required><br>

			<label for="lname">Last Name</label><br>
			<input type="text" id="lname" name="lastname" placeholder="Your last name.." required><br>

			<label for="lname">E-Mail</label><br>
			<input type="email" id="email" name="eMail" placeholder="username@website.etc" required><br>
			<br>
			<label for="subject">Subject</label><br>
			<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea><br>

			<input type="submit" value="Submit">

		</form>
	</div>
	
			
	<div class="stretch">
		<div class="aboutButtonBox">
			<a href="/about" class="mainLink">About</a>
			<div class="gap"></div>
			|
			<div class="gap"></div>
			<a href="/faq" class="mainLink">FAQ</a>
			<div class="gap"></div>
			|
			<div class="gap"></div>
			<a href="/contact" class="mainLink">Contact Us</a>
		</div>
	</div>
	
	<br>
	<br>
@stop