<div id='gmap_canvas2' class="text-center" style='height:300px;width:320px;margin-left:auto; margin-right:auto;'></div>


<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyB0zl8YQ4p1y6Ufh6VXSSSqgPN0cZaGLC8"></script>

<script type='text/javascript'>

function init_map2()
{
	var myOptions = {zoom:15,center:new google.maps.LatLng(35.611094, 51.400786),mapTypeId: google.maps.MapTypeId.ROADMAP};
	map = new google.maps.Map(document.getElementById('gmap_canvas2'), myOptions);
	marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(35.611094, 51.400786)});
	infowindow = new google.maps.InfoWindow({content:'<br><strong>Kabir Production Department</strong>'});
	google.maps.event.addListener(marker, 'click', function()
	{
		infowindow.open(map,marker);
	});
	infowindow.open(map,marker);
}
google.maps.event.addDomListener(window, 'load', init_map2);

</script>