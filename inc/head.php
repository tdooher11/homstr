<head>
	
		<meta charset="utf-8">
		<meta name="description" content="Homstr is the online resource to find out details about a home or neighborhood that you wouldn't know without living there yourself. ">
		<meta property="og:image"content="img/timmyp-HD-transprent.png" />
		<meta name="author" content="HOMSTR.COM">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="genericons/genericons.css">
		<link rel="shortcut icon" href="img/ico/32.png" sizes="32x32" type="image/png"/>
		<link rel="apple-touch-icon-precomposed" href="img/ico/32.png" type="image/png"/>
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/32.png" type="image/png"/>
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="img/ico/32.png" type="image/png"/>
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="img/ico/32.png" type="image/png"/>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
<!--<iframe width="600" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/search?q=chitkarauniversity&key=AIzaSyB9nEVCTC5rzU98EcBqnbyic_c6WUDeNDI"></iframe>-->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <script type="text/javascript">var switchTo5x=true;</script>

		<![endif]-->
		
			<script>
            // This example displays an address form, using the autocomplete feature
            // of the Google Places API to help users fill in the information.

            var placeSearch, autocomplete;

            function initialize1() {
                // Create the autocomplete object, restricting the search
                // to geographical location types.
				autocomplete = new google.maps.places.Autocomplete(
                    /** @type {HTMLInputElement} */(document.getElementById('autocomplete3')),
                    { types: ['geocode'] });
                // When the user selects an address from the dropdown,
                // populate the address fields in the form.
                google.maps.event.addListener(autocomplete, 'place_changed', function() {
                    document.getElementById("searchform3").submit();
                });

                autocomplete = new google.maps.places.Autocomplete(
                    /** @type {HTMLInputElement} */(document.getElementById('autocomplete')),
                    { types: ['geocode'] });
                // When the user selects an address from the dropdown,
                // populate the address fields in the form.
                google.maps.event.addListener(autocomplete, 'place_changed', function() {
                    document.getElementById("searchform").submit();
                });

            }

            // [START region_geolocation]
            // Bias the autocomplete object to the user's geographical location,
            // as supplied by the browser's 'navigator.geolocation' object.
            function geolocate() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var geolocation = new google.maps.LatLng(
                            position.coords.latitude, position.coords.longitude);
                        autocomplete.setBounds(new google.maps.LatLngBounds(geolocation,
                            geolocation));
                    });
                }
            }
            // [END region_geolocation]
        </script>
	</head>