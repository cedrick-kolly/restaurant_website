<?php
include "db.php";
$sql = "SELECT * FROM orders";
$result = mysqli_query($conn, $sql);

while($order = mysqli_fetch_assoc($result)){
    echo $order['customer_name'];
    echo "<br>";
    echo $order['phone'];
    echo "<br>";
    echo $order['email'];
    echo "<br>";
    echo $order['address'];
    echo "<br>";
    echo $order['order_details'];
    echo "<br>";
    echo $order['special_instructions'];
    echo "<br>";
    echo $order['date'];
    echo "<br>";
}    