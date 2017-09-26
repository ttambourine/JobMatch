<div class='navBar'>
	<div class='box'>
		<a href='/' class='JobMatch'><h1> JobMatch </h1></a>
	</div>
	<div class='leftLinks'>
		<a href='/selectjob' class='mainLink'>Browse Jobs</a>
		<div class='gap'></div>
		<a href='/createjob' class='mainLink'>Submit a Job</a>
	</div>
	<div class='rightLinks'>
		<a href='/about' class='secondLink'>Help</a>
		<div class='gap'></div>
		@if (Auth::guest())
			<a href='/register' class='secondLink'>Sign Up</a>
			<div class='gap'></div>
			<a href='/login' class='secondLink'>Login</a>
		@else
			<a href='/logout' class='secondLink'>Log out</a>
		@endif
	</div>
</div>