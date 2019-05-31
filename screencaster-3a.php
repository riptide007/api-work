
<!DOCTYPE html>
<html>
<head>
	<title>Api-Work</title>
</head>
<body>
	<form action="screencaster-3a.php" method="post">
		<input type="text" name="inputs"><br>
		<input type="submit" name="">
	</form>
	
	<?php
	
	//$s_input1 = strtolower($s_input);
	//echo ucfirst($s_input1);
	
	function output()
	{
		$s_input =$_POST["inputs"];
		$array = explode(",", $s_input);
		//print_r($array);
		$cou=count($array);
		for ($i=0; $i <$cou ; $i++) { 
			$part[$i]=$array[$i];
			//echo "element $i is $part[$i]";
		}
		$epart0=strtolower($part0);
		echo ucfirst($epart0);

		
	}
	output();
?>

</body>
</html>