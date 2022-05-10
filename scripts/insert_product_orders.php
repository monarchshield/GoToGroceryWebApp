<?php


  
	$product_id = $_POST['productid'];
	$order_id = $_POST['orderid'];
	
	
	
	
	if(!empty($_POST['productid']) && !empty($_POST['orderid']))
	{
		$conn = new mysqli('localhost:4000', 'root', '', 'gtg');
		//$query = "INSERT INTO orderitems(OrderID, ProductID, Quantity) values('$order_id', '$product_id', '0')";
		$query ="INSERT INTO orderitems(OrderID, ProductID, Quantity) values('5' ,'2','0')";
		$order_result = mysqli_query($conn, $query)
		
		if($order_result)
		{
			echo "Successfully added";
		}
	}
	
	
?>