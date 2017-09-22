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
						<p>First Name</p>
						<input type="text" name="fname" id="fname" required />
					</div>
		            
					<div class="form-group">
						<p>Last Name</p>
						<input type="text" name="lname" id="lname" required />
					</div>

					<div class="form-group">
						<p>Email</p>
		                <input type="email" name="email" id="email" disabled />
					</div>
					<div class="form-group">
						<p>Contact No.</p>	
						<input type="text" name="mobile" id="mobile" maxlength="10" required />
					</div>
		            <div class="form-group">
						<p>Location</p>	
						<input type="text" name="address" id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" required>
					</div>
				</div>

				<div class="rightcontact">	
					
					<div class="form-group">
						<p>Skills 1/3</p>
		                <select id="tags1" name="tag1">
		                    <option value="" disabled="disabled" selected="selected">Please select an option</option>
		                </select>
					</div>
					<div class="form-group">
						<p>Skills 2/3</p>
						<select id="tags2" name="tag2">
		                <option value="" disabled="disabled" selected="selected">Please select an option</option>
		            </select>
					</div>
					<div class="form-group">
						<p>Skills 3/3</p>
		                <select id="tags3" name="tag3">
		                    <option value="" disabled="disabled" selected="selected">Please select an option</option>
		                </select>
					</div>
		        </div>
			</div>
			<br>
	        <br>
	        
			<div class="centreAccount">
				<div class="imgSub">
					<p>Edit your Profile Picture</p>
					<input name="uploaded" type="file" />
				</div>
				<div class="form-group">
					<p>About You<span>250 characters or less</span></p>
	                <textarea type="text" name="about" id="about" maxlength="250" placeholder="Share your story!"></textarea>
				</div>
			<br>
			<input type="submit" value="Save Information" class="submitAccForm">
			<br>
			<br>
			</div>
		
		</div>
		
		<input class="field" type="hidden" id="formatted_address" name="formatted_address">
		<input class="field" type="hidden" id="lat" name="lat">
		<input class="field" type="hidden" id="lng" name="lng">
	</form>

	<script>
		$(document).ready(function(){
			$.getJSON( "api/list_tags", function( data ) {
			 	var listItems= "<option value='' disabled selected>Please select an option</option>";
				for (var i = 0; i < data.length; i++){
					listItems+= "<option value='" + data[i].id + "'>" + data[i].name + "</option>";
				}
				$("#tags1").html(listItems);
				$("#tags2").html(listItems);
				$("#tags3").html(listItems);
			});
	    });

      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      //var componentForm = {
      //  street_number: 'short_name',
      //  route: 'long_name',
      //  locality: 'long_name',
      //  administrative_area_level_1: 'short_name',
      //  country: 'long_name',
      //  postal_code: 'short_name'
      //};

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        //for (var component in componentForm) {
        //  document.getElementById(component).value = '';
        //  document.getElementById(component).disabled = false;
        //}

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        //for (var i = 0; i < place.address_components.length; i++) {
        //  var addressType = place.address_components[i].types[0];
        //  if (componentForm[addressType]) {
        //    var val = place.address_components[i][componentForm[addressType]];
        //    document.getElementById(addressType).value = val;
        //  }
        //}

        document.getElementById("formatted_address").value = place.formatted_address;
        document.getElementById("lat").value = place.geometry.location.lat();
        document.getElementById("lng").value = place.geometry.location.lng();
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBU_2uibz4yOZXAMK4wDsTLQ3yGKD2ErLE&libraries=places&callback=initAutocomplete"
        async defer></script>
@stop