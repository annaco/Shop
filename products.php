<?php 
include "header.php";
?>

<div id="wrapper">
	<?php

	$products = simplexml_load_file('products.xml');

	foreach ($products->product as $product){
		echo "<div class='product'><img src=". $product->path . "><br>";
		echo $product->caption."<br>";
		echo $product->price. " kr <br></div>";
	}

	?>

</div>


<?php
include 'footer.php';
?>
