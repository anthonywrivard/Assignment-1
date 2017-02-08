<?php
	$input = array("I yam what I yam and tha's all what I yam.- Popeye", "Somewhere, something incredible is waiting to be known. - Carl Sagan", "If I have seen further than others, it is by standing upon the shoulders of giants. - Issac Newton");
	$randKey = array_rand($input);
?>

<!doctype html>
<!--
Anthony Rivard
CSCI E-15 Assignment #1
-->
<html>
	<head>
		<meta charset="utf-8">
		<title>CSCI E-15 Rivard-1</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<div class="container">

			<h1>Anthony Rivard</h1>

			<img src="images/tony.jpg" alt="Anthony Rivard"/>

			<p> Hello my name is Anthony Rivard and this is my second class at Harvard Extension School. I live in Michigan and work at The Dow Chemical Company. I work in IT asset management mainly tracking Microsoft assets throughout the company. I have my undergrad in Information Management and an MBA from Northwood University. I also have a Master’s in Business Analytics from Michigan State. I enjoy taking out my telescope and doing astrophotography. I also like to golf, play softball, and go to rock concerts. </p>
			
			<h2>Random Quote</h2>
			<blockquote><?php echo $input[$randKey];?></blockquote>
		</div>
	</body>
</html>