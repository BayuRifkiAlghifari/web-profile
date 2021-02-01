<section class="ftco-section contact-section">
	<div class="container">
		<div class="row d-flex mb-5 contact-info">
  			<div class="col-md-12 mb-4">
    			<h2 class="h4 font-weight-bold">Contact Information</h2>
  			</div>
  			<div class="w-100"></div>
  			<div class="col-md-3">
    			<p><span>Address:</span> Cimahi, Indonesia</p>
  			</div>
  			<div class="col-md-3">
    			<p><span>Phone:</span> <a href="#">+62 819 0986 6787</a></p>
  			</div>
  			<div class="col-md-3">
    			<p><span>Email:</span> <a href="mailto:bayurifkialgh@gmail.com?subject=Hy" target="_blank">bayurifkialgh@gmail.com</a></p>
  			</div>
  			<div class="col-md-3">
    			<p><span>Website</span> <a href="https://infinit.id/" target="_blank">https://infinit.id/</a></p>
  			</div>
		</div>
		<div class="row block-9">
  			<div class="col-md-6 order-md-last pr-md-5">
    			<form action="<?= base_url ?>send_message">
      				<div class="form-group">
        				<input type="text" name="name" class="form-control" placeholder="Your Name">
			      	</div>
			      	<div class="form-group">
			        	<input type="text" name="email" class="form-control" placeholder="Your Email">
			      	</div>
			      	<div class="form-group">
			        	<input type="text" name="subject" class="form-control" placeholder="Subject">
			      	</div>
			      	<div class="form-group">
			        	<textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
			      	</div>
			      	<div class="form-group">
			        	<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
			      	</div>
				</form>
  			</div>
            <div class="col-md-6">
                <div id="map"></div>
            </div>
		</div>
	</div>
</section>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Xd4GJtDxGPUI7nlMV-I99x5EQqYqhGc&sensor=false"></script>
<script type="text/javascript">
    var google

    function init() {
        var myLatlng = new google.maps.LatLng(-6.8474984, 107.5167597)
        // 39.399872
        // -8.224454
        
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 15,

            // The latitude and longitude to center the map (always required)
            center: myLatlng,

            // How you would like to style the map. 
            scrollwheel: false,
            styles: [
                {
                    "featureType": "administrative.country",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        },
                        {
                            "hue": "#ff0000"
                        }
                    ]
                }
            ]
        }

        

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map')

        // Create the Google Map using out element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions)
        
        var addresses = ['Cimahi']

        // for (var x = 0; x < addresses.length; x++) {
        //     $.getJSON('https://maps.googleapis.com/maps/api/geocode/json?address='+addresses[x]+'&key=AIzaSyB2Xd4GJtDxGPUI7nlMV-I99x5EQqYqhGc&sensor=false', null, function (data) {

        //         var p = data.results[0].geometry.location
                var latlng = new google.maps.LatLng(-6.8481458, 107.5179533)
                new google.maps.Marker({
                    position: latlng,
                    map: map,
                })
        //     })
        // }
        
    }
    google.maps.event.addDomListener(window, 'load', init)
</script>