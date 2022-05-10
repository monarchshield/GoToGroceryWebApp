<?php


  
	$product_id = $_POST['productid'];
	$order_id = $_POST['orderid'];
	
	
	
	
	if(!empty($_POST['productid']) && !empty($_POST['orderid']))
	{
		$conn = new mysqli('localhost:4000', 'root', '', 'gtg');
		$query = "INSERT INTO orderitems(OrderID, ProductID, Quantity) values('$order_id', '$product_id', '0')";
		$order_result = mysqli_query($conn, $query);
		
		echo $query;
		
		
		$productinfo = mysqli_query($conn, "SELECT ProductName, Price FROM products where ProductID = $product_id");
		$row = $productinfo->fetch_assoc();
		
		
		
		
		
		
		echo "<tr>
				<td>".$product_id."</td><td>".$row["ProductName"]."</td><td>".$row["Price"]."</td>
				<td>
					 <button type='button' class='btn btn-dark ButtonNegative'> - </button>
					 <span style='padding: 0px 5px;'>0</span>
                     <button type='button' class='btn btn-dark ButtonPositive'> + </button>
                  </td>
                  <td> <button class='btn btn-warning'> <i class='fa fa-trash-o fa-lg'></i></button></td>
                </tr>";
		
		

		
	}
	
	
?>