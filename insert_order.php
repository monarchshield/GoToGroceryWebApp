<?php
    $user = 'root';
    $pass = '';
    $db = 'gtg';
    $connect = mysqli_connect('localhost', $user, $pass, $db) or die("Unable to connect". $connect->connect_error);

    if (isset($_POST["submit"])) 
    {
        if (!empty($_POST["memberid"]) && !empty($_POST["info"])) 
        {
            $memberid = $_POST["memberid"];
            // $address = $_POST["address"];
            $info= $_POST["info"];
            $time = date("Y-m-d H:i:s");
            $status = 'PENDING';
        
            //Write SQL query
           
			$update_query = "UPDATE Orders SET MemberID = $memberid, OrderTime = $time, OrderStatus = $status, Info = $info WHERE Orders = $orderid";
			
            $result = mysqli_query($connect, $update_query) or die("Unable to add order's record into Orders table");
            if ($result) {
                $connect->commit();
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