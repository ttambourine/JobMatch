@extends('layout')

@section('pageTitle', 'Create Job')
@section('content')
	<form method="POST" action="{{ route('createjob') }}">
		{{ csrf_field() }}
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
							<p>Location</p>	
							<input type="text" name="address" id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" required>
						</div>
						<div class="form-group">
							<p>Price</p>	
							<input type="number" name="price" id="price" required />
						</div>
						<div class="form-group">
							<p>Deadline</p>	
							<input type="text" name="deadline" id="datepicker" required />
						</div>
					</div>

					<div class="rightcontact">	
						<div class="form-group">
							<p>Expertise 1/3</p>	
							<select id="tags1">
			                    <option value="" disabled="disabled" selected="selected">Please select an option</option>
			                </select>
						</div>
						<div class="form-group">
							<p>Expertise 2/3</p>	
							<select id="tags2">
			                    <option value="" disabled="disabled" selected="selected">Please select an option</option>
			                </select>
						</div>
						<div class="form-group">
							<p>Expertise 3/3</p>	
							<select id="tags3">
			                    <option value="" disabled="disabled" selected="selected">Please select an option</option>
			                </select>
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

		<input class="field" type="hidden" id="formatted_address" name="formatted_address">
	</form>

	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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

    		$( "#datepicker" ).datepicker();
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