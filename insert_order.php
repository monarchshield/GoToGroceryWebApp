<?php
    $user = 'root';
    $pass = '';
    $db = 'GoToGro';
    $connect = mysqli_connect('localhost', $user, $pass, $db) or die("Unable to connect". $connect->connect_error);

    if (isset($_POST["submit"])) 
    {
        if (!empty($_POST["memberid"]) && !empty($_POST["address"]) && !empty($_POST["info"])) 
        {
            $memberid = $_POST["memberid"];
            $address = $_POST["address"];
            $info= $_POST["info"];
            $time = date("Y-m-d H:i:s");
            $status = 'PENDING';
        
            //Write SQL query
            $query = "INSERT INTO Orders(MemberID, OrderTime, OrderStatus, Info) values('$memberid', '$time', '$status', '$info')";



            $result = mysqli_query($connect, $query) or die("Unable to add order's record into Orders table");
            if ($result) {
                echo "Successfully add order's details into Orders Table";
				header('Location: orders.php');
			
            } else {
                echo "Form unsuccessfully submitted";
            }

        } else {
            echo $_POST['address'];
            echo "All fields required";
        }
    }
    else{
        echo "form not submitted correctly";
    }
?>