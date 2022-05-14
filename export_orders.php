<?php
if (isset($_POST["export_orders"])) 
{
    $user = 'root';
    $pass = '';
    $db = 'gtg';
    $connect = mysqli_connect('localhost', $user, $pass, $db) or die("Unable to connect");
    header("Content-Type: text/csv; charset=utf-8");
    header("Content-Disposition: attachment; filename=orders.csv");
    $output = fopen("php://output", "w");
    fputcsv($output, array("OrderID", "MemberID", "OrderTime", "OrderStatus", "Info", "Active"));
    $query = "SELECT * FROM orders";
    $result = mysqli_query($connect, $query);
    while ($row =  mysqli_fetch_assoc($result)) {
        fputcsv($output, $row);

    }
    fclose($output);
}

?>