@extends('layout')

@section('pageTitle', 'Select Job')
@section('content')
	<form action="/" method="post">
	    <div class="contentformBox">	    
		<div class="contentform">
		<h1>Select a Job</h1>	    
		<div class="contentform">
			<div class="leftcontact">
				<div class="form-group">
					<p>Seeker</p>	
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png" style="width:100px;height:100px;">
				</div>
				<div class="form-group">
					<p>Expertise</p>	
					<input type="text" name="expertise" id="expertise" required />
				</div>
                <div class="form-group">
                    <p>Location</p>
                    <input type="text" name="expertise" id="expertise" required />
                </div>
			</div>

			<div class="rightcontact">	
                <br>
                <br>
				<div class="form-group">
					<p>Price</p>	
					<input type="text" name="location" id="location" required />
				</div>
				<div class="form-group">
					<p>Deadline</p>	
					<input type="number" name="price" id="price" required />
				</div>
				<div class="form-group">
					<p>About The Job</p>	
					<input type="text" name="deadline" id="deadline" required />
				</div>
			</div>
		</div>
				<div class="centreAccount">
			<div class="form-group">
			</div>
		<br>
		<input type="submit" value="Job Matched!" class="submitAccForm" style="float: none">
		<br>
		<br>
		</div>
		</div>
		</div>
	</form>	
@stop