<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$products = array(
		"Electronics"=>array("SmartPhones"=>array("Apple"=>array("Iphone 13","Iphone SE"),"Samsung"=>array("Galaxy 21","Galaxy Note 20")),
			"Laptops"=>array("Dell"=>array("XPS","Inspiration"),"HP"=>array("HP sepctre"=>array("HP pavilion"=>array("Pavalion 15","Pavalion Gaming"))))));

	//print_r($products);

	function printProduct($arr)
	{
		foreach ($arr as $key => $value) {
			if (is_array($value)) {
				echo "<ul>";
				echo "<li> $key</li>";
				echo "<ul>";
				printProduct($value);
				echo "</ul>";
				echo "</ul>";
			} else {	
				echo "<li> $value</li>";
			}
		}

	}
	printProduct($products);
	
?>
</body>
</html>