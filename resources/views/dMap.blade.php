<div id='gmap_canvas' class="text-center" style='height:300px;width:320px;margin-left:auto; margin-right:auto;'></div>




<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyB0zl8YQ4p1y6Ufh6VXSSSqgPN0cZaGLC8"></script>

<script type='text/javascript'>
function init_map()
{
	var myOptions = {zoom:16,center:new google.maps.LatLng(35.689720,51.424454),mapTypeId: google.maps.MapTypeId.ROADMAP};
	map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
	marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(35.689600,51.424422)});
	infowindow = new google.maps.InfoWindow({content:'<br><strong>Kabir Sale Department</strong>'});
	google.maps.event.addListener(marker, 'click', function()
	{
		infowindow.open(map,marker);
	});
	infowindow.open(map,marker);
}
google.maps.event.addDomListener(window, 'load', init_map);

</script>