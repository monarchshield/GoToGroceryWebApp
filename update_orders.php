<?php
    $user = 'root';
    $pass = '';
    $db = 'gtg';
    $connect = mysqli_connect('localhost', $user, $pass, $db) or die("Unable to connect". $connect->connect_error);

    if (isset($_POST["submit"]) && isset($_POST["status"])) 
    {
        if (!empty($_POST["memberid"])) 
        {
            $memberid = $_POST["memberid"];
            // $address = $_POST["address"];
            $info= $_POST["info"];
            $time = date("Y-m-d H:i:s");
            $status = $_POST["status"];
        
			$orderid = $_POST["orderID"];
		
            //Write SQL query
           
			$update_query = 
			"UPDATE orders 
			SET MemberID = $memberid, 
			OrderTime = '$time', 
			OrderStatus = '$status', 
			Info = '$info' 
			WHERE OrderID = $orderid";

            $result = mysqli_query($connect, $update_query) or die("Unable to add order's record into Orders table: " . $update_query);
            if ($result) {
               
				header('Location: orders.php');
			
            } 
			
			else 
			{
                echo "Form unsuccessfully submitted";	
            }

        } 
        echo "All fields required";
        
		
		
		header('Location: orders.php');
		
    }
?>