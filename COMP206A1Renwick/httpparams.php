<?php print( '<?xml version = "1.0" encoding = "utf-8"?>' ) ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
   
   <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		
	<title>
	 HTTP variables
	</title>
	</head>
	<body>
	<table border="1" cellpadding="5">
	<thead>
		<tr>
			<th>Index</th>
			<th>Name</th>
			<th>Value</th>
		</tr>
	</thead>
	<tbody>	
	<?php
		if ($_POST != null)
		$VARS = $_POST;
		else $VARS=$_GET;
		$index = 1;
		foreach ($VARS as $key => $val)
		{
			echo "<h2>	",$val,"</h2>";
			if (is_array($val))
				echo "<tr><td>$index</td><td>$key</td><td><pre>", print_r($val,true	), "</pre></td></tr>";	
			else{
			echo "<tr>";
			echo  ("<td>$index</td><td>$key</td><td>$val</td>");
			echo "</tr>";
			}
			$index++;		
		} 	

    	?>
	</tbody>	
	</body>     
   </html>