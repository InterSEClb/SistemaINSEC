<script type="text/javascript"> var device = navigator.userAgent
 
if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/iPhone|iPad|iPod/i))
 	{ 
		window.location = "https://goo.gl/bzeZ7d"; //URL del APP Store
	}
else { 
	if (device.match(/Android/i))		
	{ 	
		window.location = "dashboard/index.php"; //URL del Play Store
	}
	else
	{ 
		window.location = "descarga.php"; //En el caso que el cliente este visitando desde un computador, lo enviamos a la web. 
	}
}

</script>