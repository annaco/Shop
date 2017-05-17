<?php
session_start();

?>
<!doctype html>
<html>
<head>
	<title>Beställningsformulär</title>

</head>
<body>
	<script type="text/javascript" src="sricpt.js"></script>
</body>
</html>

<?php

$products = simplexml_load_file('products.xml');
echo ' Number of products: '.count($products);

foreach ($products->product as $product){
	echo $product->path;
	echo $product->caption;
	echo $product->price;
}

if(isset($_POST['add_to_cart'])){
	echo "Product: " . $_POST['procuct_id']. "<br>";
	$count = count($_SESSION['shopping_cart']);
	echo "Count: $count<br>";

	$SESSION['shopping_cart'][$count]['product_id'] = $_POST['product'];
	$SESSION['shopping_cart'][$count]['quantity'] = $_POST['quantity'];
}


if(isset($_GET['view_cart'])){
	echo "<h1>Din kundkorg</h1>";
	if(empty($_SESSION['shopping_cart'])){
		echo "Din kundkorg är tom";
	}
	else{
		foreach($_SESSION['shopping_cart'] as $id => $product){
			$product_id = $product['product_id'];
			echo $products[$product_id]['name']. "<br>";
		}
	}
}