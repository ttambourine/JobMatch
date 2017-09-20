@extends('layout')

@section('pageTitle', 'Register')
@section('content')
  <form method="POST" action="{{ route('register') }}">
	    {{ csrf_field() }}
    <div class="contentformBox">	    
    <div class="contentform">
		<h1>Account Details</h1>
    	<div class="leftcontact">

            
            <div class="form-group">
			<p>First Name<span>*</span></p>
				<input type="text" name="fname" id="fname" required />
			</div>
            
			<div class="form-group">
			<p>Last Name<span>*</span></p>
				<input type="text" name="lname" id="lname" required />
			</div>

			<div class="text-area">
			<p>Email<span>*</span></p>
                <input type="email" name="email" id="email" required />
			</div>
            <br>
			<div class="text-area">
			<p>Password<span>*</span></p>
                <input type="password" name="password" id="password" required />
			</div>
			<br>
			<div class="text-area">
			<p>Confirm Password<span>*</span></p>
                <input type="password" name="passwordConf" id="passwordConf" required />
			</div>
			</div>

		<div class="rightcontact">	

			<div class="form-group">
				<p>Contact No.<span>*</span></p>	
				<input type="text" name="phone" id="phone" maxlength="10" required />
			</div>
        
            <div class="form-group">
				<p>Location<span>*</span></p>	
				<input type="text" name="location" id="location" maxlength="20" required />
			</div>
			<div class="dropdown">
			<p>Skills<span>*</span></p>
                <select id="tags">
                    <option value="" disabled="disabled" selected="selected">Please select an option</option>
                </select>
			</div>
			<div class="dropdown">
            <br>
			<p>Skills<span>*</span></p>
				<select id="tags">
                <option value="" disabled="disabled" selected="selected">Please select an option</option>
            </select>
			<div class="dropdown">
			<p>Skills<span>*</span></p>
                <select id="tags">
                    <option value="" disabled="disabled" selected="selected">Please select an option</option>
                </select>
			</div>
        </div>
		</div>
		<br>
        <br>
        
		<div class="centreAccount">
			<div class="form-group">
				<p>About You<span>* 250 characters or less</span></p>
                <textarea type="text" name="about" id="about" maxlength="250" placeholder="Share your story!"></textarea>
			</div>
		<br>
		<input type="submit" value="Save Information" class="submitAccForm">
		<br>
		<br>
		</div>
	
	</div>
	</div>
	
	</form>

	<script>
		$(document).ready(function(){
			$.getJSON( "api/list_tags", function( data ) {
			 	var listItems= "<option value='' disabled selected>Please select an option</option>";
				for (var i = 0; i < data.length; i++){
					listItems+= "<option value='" + data[i].id + "'>" + data[i].name + "</option>";
				}
				$("#tags").html(listItems);
			});
	    }); 
	</script>
@stop