var Contact = function () {

    return {
        
        //Map
        initMap: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				lat: 26.509343,
				lng: 80.234511
			  });
			   var marker = map.addMarker({
		            lat: 26.509343,
				    lng: 80.234511,
		            title: 'SPO, IIT Kanpur'
		        });
			});
        }

    };
}();