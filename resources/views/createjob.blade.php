@extends('layout')

@section('pageTitle', 'Create Job')
@section('content')
	<form action="/" method="post">
	    <div class="contentformBox">	    
		<div class="contentform">
		<h1>Create a Job</h1>	    
		<div class="contentform">
			<div class="leftcontact">
				<div class="form-group">
					<p>Title</p>	
					<input type="text" name="title" id="title" required />
				</div>
				<div class="form-group">
					<p>Expertise</p>	
					<input type="text" name="expertise" id="expertise" required />
				</div>
			</div>

			<div class="rightcontact">	
				<div class="form-group">
					<p>Location</p>	
					<input type="text" name="location" id="location" required />
				</div>
				<div class="form-group">
					<p>Price</p>	
					<input type="number" name="price" id="price" required />
				</div>
				<div class="form-group">
					<p>Deadline</p>	
					<input type="text" name="deadline" id="deadline" required />
				</div>
			</div>
		</div>
				<div class="centreAccount">
			<div class="form-group">
				<p>About the Job<span>    250 characters or less</span></p>
                <textarea type="text" name="about" id="about" maxlength="250" placeholder="Specifics about the job"></textarea>
			</div>
		<br>
		<input type="submit" value="Save Information" class="submitAccForm">
		<br>
		<br>
		</div>
		</div>
		</div>
	</form>
@stop