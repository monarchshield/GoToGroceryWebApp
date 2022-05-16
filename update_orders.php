<?php
    $user = 'root';
    $pass = '';
    $db = 'gtg';
    $connect = mysqli_connect('localhost', $user, $pass, $db) or die("Unable to connect");
    if (isset($_POST["submit"])) {
        if (!empty($_POST["memberid"])) {
           
			$id = $_POST["orderID"];
			$o_memberid = $_POST["memberid"];

            //Write SQL query
            $query = "UPDATE products SET MemberID='$o_memberid' WHERE OrderID = '$id'";
           
			
			echo $query;
			
			
			
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