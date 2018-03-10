<!doctype html >  
<!-- Julie's Balloons -->
<html lang = "en">
<head>
	<title>Twisted Balloons</title>
	<link rel="stylesheet" type = "text/css" href = "./css/balloons.css" />
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<meta charset = "UTF-8"> 
</head>
<body>
	<h1>Twisted Balloons</h1>
	<h2>by Julie</h2>

	<div class = "firstfloat">
		<ul>
			<li><a href = "Home.php"><img src = ./imgs/Home.png height = "131" width = "126" alt = "Home"/></a></li>
			<li><a href = "Photos.php"><img src = ./imgs/Photos.png height = "131" width = "126" alt = "Home"/></a></li>
			<li class = "selected"><a href = "Costs.php"><img src = ./imgs/Costs.png height = "131" width = "126" alt = "Costs"/></a></li>
			<li><a href = "Contact.php"><img src = ./imgs/Contact.png height = "131" width = "126" alt = "Contact"/></a></li>
		</ul>
	</div>

	<div class = "secondfloat">
		<p>I charge $70 / hour</p>
		<p>** extra charges may apply if there are over 60 kids or over 20km away</p>
		<p>Free Delivery of balloons prices range between $4-$7 each</p>
		<p>Lessons available</p>
		<p>Estimates given for balloon structures and arches</p>
		

		<fieldset><legend>Cost Estimate Calculator</legend>
			<label>Number of hours: </label>
				<input type="number" id="hours"><br>
			
			<label>Is there over 60 children?</label>
				<input type="checkbox" id="manyKids"><br>
				
			<label>Is it over 20km away from Kingston?</label>
				<input type="checkbox" id="farAway"><br><br>
				
			<label id="total">Total Cost: </label><br>
									
			<button>Calculate</button>
		</fieldset>
		
		
		<script type="text/javascript">
			$("button").click
			(
				//function not complete
				function()
				{
					var hours = $("#hours").val();
					var manyKids = $("#manyKids:checked");
					var farAway = $("#farAway:checked");
					
					var totalCost = hours*70;
										
					if(manyKids)
						totalCost+=20*hours;
					
					if(farAway)
						totalCost+=50;
					
					$("#total").append(" $", totalCost);
					//alert(farAway);
				}
			);
		
		</script>
			
			
		
		
		
		

	</div>

	<div class = "bottom">
		<footer> 
			<a href = "https://www.instagram.com/juler102/">   <img src = ./imgs/instagram.png height = "50" width = "50" alt = "Instagram"/></a>
			<a href = "https://www.facebook.com/Twistedjulie/"><img src = ./imgs/fb.png        height = "50" width = "50" alt = "Facebook"/></a>
		</footer>
	</div>

</body>
</html>