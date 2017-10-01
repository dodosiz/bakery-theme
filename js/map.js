function myMap() {
	
	var myLatLng = {lat: 40.993893, lng: 22.877025};
	
	var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 18,
        center: myLatLng
      });
	
	var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Here we are!'
      });
}

function loadScript()
{
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyBi4Ejs_szto9w05iYlR4e_7IFwEHDjLiA&callback=myMap";
    document.body.appendChild(script);
}

function decideTOLoad(){
	if(document.readyState==='complete'){
		loadScript();
	}else{
		window.onload = loadScript;
	}
}

decideTOLoad();