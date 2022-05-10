<?php


  
	$product_id = $_POST['productid'];
	$order_id = $_POST['orderid'];
	
	
	
	
	if(!empty($_POST['productid']) && !empty($_POST['orderid']))
	{
		$conn = new mysqli('localhost:4000', 'root', '', 'gtg');
		$query ="INSERT INTO orderitems(OrderID, ProductID, Quantity) values($product_id ,$order_id,'0')";
		$order_result = mysqli_query($conn, $query);
		
		echo "Successfully added Order Item; ProductID: " . $product_id . "OrderID: " . $order_id; 
		
	}
	
	
?>