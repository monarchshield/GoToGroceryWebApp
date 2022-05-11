<?php
$servername = "localhost";
$username = "user";
$password = "pass";
$dbname = "gtg";

$connect = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if($connect === false){
    die("Connection failed " . $connect->connect_error);
}
 $neworder = $_GET["OrderID"]; 
// Attempt delete query execution
$sql = "UPDATE order SET Active = 0 WHERE OrderID = $neworder";

    if($connect->query($sql) === true){
        echo "Record deleted successfully";
        header('Location: Order.php');
    } else{
        echo "ERROR: Could not able to execute $sql. " . $connect->error;
    }

 
// Close connection
$connect->close();

?>