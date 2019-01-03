<?php header('Access-Control-Allow-Origin: *'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>YAMAHA Registration</title>
</head>
<body>

<p>Welcome</p>

</body>
<script rel="javascript" type="text/javascript" src="js/jquery.min.js"></script>
<script>
	

	$.ajax({
	  url: 'submit.php',
	  crossDomain: true,
	  data : { userId : "SC19000001", password : "SC00KO" },
	  type: 'POST',
	  success: function(responseData, textStatus, jqXHR) {
		var value = responseData.StatusMessage;
		console.log(responseData);
	  },
	  error: function (responseData, textStatus, errorThrown) {
		alert('POST failed.');
	  }
	});
	
	
	
</script
</html>
