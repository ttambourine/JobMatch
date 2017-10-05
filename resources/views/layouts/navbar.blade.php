<div class='navBar'>
	<div class='box'>
		<a href='/' class='JobMatch'><h1> JobMatch </h1></a>
	</div>
	<div class='leftLinks'>
		<a href='/browse' class='mainLink'>Browse Jobs</a>
		<div class='gap'></div>
		<a href='/createjob' class='mainLink'>Submit a Job</a>
	</div>
	<div class='rightLinks'>
		@if (Auth::guest())
			<a href='/register' class='secondLink'>Sign Up</a>
			<div class='gap'></div>
			<a href='/login' class='secondLink'>Login</a>
		@else
			<a href='/profile' class='secondLink'>Profile</a>
			<div class='gap'></div>
			<a href='/preferences' class='secondLink'>Preferences</a>
			<div class='gap'></div>
			<a href='/logout' class='secondLink'>Log out</a>
		@endif
	</div>
</div>