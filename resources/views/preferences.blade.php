@extends('layout')

@section('pageTitle', 'Account Preferences')
@section('content')
	<form method="POST" action="update_acc">
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
				</div>

				<div class="rightcontact">	
					
					<div class="form-group">
						<p>Skills 1/3</p>
		                <select id="tags1" name="tag1" required="">
		                    <option value="" disabled="disabled" selected="selected">Please select an option</option>
		                </select>
					</div>
					<div class="form-group">
						<p>Skills 2/3</p>
						<select id="tags2" name="tag2">
			                <option value="" disabled="disabled" selected="selected">Please select an option</option>
			                <option value="0">Nothing at all</option>
			            </select>
					</div>
					<div class="form-group">
						<p>Skills 3/3</p>
		                <select id="tags3" name="tag3">
		                    <option value="" disabled="disabled" selected="selected">Please select an option</option>
		                    <option value="0">Nothing at all</option>
		                </select>
					</div>
                    <div class="form-group">
						<p>Location</p>	
						<input type="text" name="address" id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" required>
					</div>
		        </div>
			</div>
			<br>
	        <br>
	        
			<div class="centreAccount">
				<div class="imgSub">
					<p>Seeker</p>	
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png" style="width:100px;height:100px;">
				</div>
				<div class="form-group">
					<p>About You <span>250 characters or less</span></p>
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

      $("#tags1").change(function() {
      	if ($(this).val() != 0) {
	      	$("#tags2 option[value='"+$(this).val()+"']").remove();
	      	$("#tags3 option[value='"+$(this).val()+"']").remove();
	    }
      });

      $("#tags2").change(function() {
      	if ($(this).val() != 0) {
	      	$("#tags1 option[value='"+$(this).val()+"']").remove();
	      	$("#tags3 option[value='"+$(this).val()+"']").remove();
	    }
      });

      $("#tags3").change(function() {
      	if ($(this).val() != 0) {
	      	$("#tags1 option[value='"+$(this).val()+"']").remove();
	      	$("#tags2 option[value='"+$(this).val()+"']").remove();
	    }
      });

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);

        $.getJSON( "api/list_tags", function( data ) {
			 	var listItems= "<option value='' disabled selected>Please select an option</option><option value='0'>Nothing at all</option>";
				for (var i = 0; i < data.length; i++){
					listItems+= "<option value='" + data[i].id + "'>" + data[i].name + "</option>";
				}
				$("#tags1").html(listItems);
				$("#tags2").html(listItems);
				$("#tags3").html(listItems);
			});

			$.getJSON( "api/get_info", function( data ) {
				$("#fname").val(data.fname);
				$("#lname").val(data.lname);
				$("#email").val(data.email);
				$("#about").val(data.about);
				$("#mobile").val(data.mobile);
				$("#autocomplete").val(data.address);
				$("#lat").val(data.lat);
				$("#lng").val(data.lng);

				if (data.tag1 != 0) {
					$('#tags1').val(data.tag1);
					if (data.tag1 != 0) {
						$("#tags2 option[value='"+data.tag1+"']").remove();
	      				$("#tags3 option[value='"+data.tag1+"']").remove();
	      			}
				}

				if (data.tag2 != 0 && data.tag2 != null) {
					$('#tags2').val(data.tag2);
					if (data.tag2 != 0) {
						$("#tags1 option[value='"+data.tag2+"']").remove();
	      				$("#tags3 option[value='"+data.tag2+"']").remove();
	      			}
				}

				if (data.tag3 != 0 && data.tag3 != null) {
					$('#tags3').val(data.tag3);
					if (data.tag3 != 0) {
						$("#tags2 option[value='"+data.tag3+"']").remove();
	      				$("#tags1 option[value='"+data.tag3+"']").remove();
	      			}
				}
			});

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