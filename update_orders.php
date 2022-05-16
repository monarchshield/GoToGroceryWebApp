<?php
    $user = 'root';
    $pass = '';
    $db = 'gtg';
    $connect = mysqli_connect('localhost', $user, $pass, $db) or die("Unable to connect");
    if (isset($_POST["submit"])) {
        if (!empty($_POST["memberid"]) && !empty($_POST["info"])) {
           
			$orderid = $_POST["orderID"];
			$memberid = $_POST["memberid"];
            $info= $_POST["info"];
            $time = date("Y-m-d");

            //Write SQL query
			
            $update_query = 
			"UPDATE orders 
			SET MemberID = $memberid, 
			OrderTime = $time, 
			OrderStatus = '$status', 
			Info = '$info' 
			WHERE OrderID = $orderid";
			
			
			
			
			$updateorderitems = 
			"SELECT ProductID, Quantity 
			FROM orderitems 
			WHERE OrderID = $orderid";
			
			
			
			$result = $connect->query($updateorderitems) or die("Failed");
			
				while($row = $result->fetch_assoc())
				{
					
					$productid = $row['ProductID'];
					$productidqty = $_POST[$productid];
					
					
					$update_productitem = "UPDATE orderitems SET Quantity = $productidqty WHERE OrderID = $orderid AND ProductID = $productid";
					$orderitemresult = $connect->query($update_productitem) or die("Failed: " . $update_productitem);
				
				}
			
			
			
			$result = mysqli_query($connect, $query) or die(mysqli_error($result));
            if ($result) {
                echo "Successfully edited product";
				header('Location: Products.php');
			
            } else {
                echo "Form unsuccessfully submitted";
            }

        } else {
            echo "All fields required";
			echo $_POST["memberid"];
        }
    }
?>