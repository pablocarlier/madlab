<!DOCTYPE html>
<html>
<head>
	<title>DC Madlab Site</title>
	<link rel="stylesheet" type="text/css" href="style.css" />	
</head>
<body>
	
	<div id="page-wrap">

		<img style="logo" width=80 height=42 src="images/cisco_bridge.png" alt="Cisco Logo" />
		<h1>Madrid Data Center Laboratory</h1>
		
		<p>DC Spain Resource Site</p>
		
		<p>ESTE SERVIDOR TIENE LA IP: 
		
		<?php 
			$host= gethostname();
			$ip = gethostbyname($host);
			echo $ip;
		?>
		</p>
		
		<a href="http://10.50.0.206/LabCalendar/Lab_Calendar.htm">Reserva tu slot en el Laboratorio</a>
		
		<p>ID:</p>
	
		<div id="form">
			
			<form method="post" action="processing.php">
				<label for="username">Name:</label>
				<input type="text" name="username" id="username" />
				
				<label for="email">Email:</label>
				<input type="email" name="email" id="email" value="username@cisco.com"/>

				<input type="submit" name="submit" value="Register" class="submit-button" />
			</form>
			
	
		</div>
		</div>
	
	<div id="footer">
			
			<p style="footer">Copyright -  <a href="mailto:pcarlier@cisco.com">Pablo Carlier</a> -  Cisco Systems, Inc. 2016.</p>
	
	</div>
	
</body>
</html>
