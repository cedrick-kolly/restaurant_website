<?php

include "db.php";
    if (isset($_POST['name'])){ //isset checks if the information has been submitted before action is per
     $name = $_POST["customer_name"];//Post tells the browser to send it to the database
     $phone =$_POST["phone"];//$_Post is the global array that stores data
     $email = $_POST["email"];
     $address = $_POST["address"];
     $order = $_POST["order_details"];
     $instructions = $_POST["special_instructions"];
     $date = $_POST["date"];

     $sql ="INSERT INTO orders(customer_name, phone, email, address, order_details, special_instructions, date) VALUES ('$name', '$phone', '$email', '$address', '$order', '$instructions', '$date')";
     $result = mysqli_query($conn, $sql);

    if($result){
        echo "Order added successfully";
    }
    else{
        echo "error" . mysqli_error($conn);
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    *{  margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Times New Roman', Times, serif}

body{
  background:#1f6f5c8d;
  display:flex;
  min-height:100vh;
  justify-content:center;
  align-items:center;
}
.container{
  background:#fff;
  width:380px;
  padding:32px;
  border-radius:12px;
  box-shadow:0 4px 20px rgba(0,0,0,0.08);
  margin: 20px 0;
}

h1,
label{
  text-align:center; 
  margin-bottom:24px;
  font-size:22px;
  color:#144D04;
}

input{
  width:100%;
  padding:12px;
  margin-bottom:14px;
  font-size:15px;
  border:1px solid #B8944D;
  border-radius:6px;
  outline:none;
}
textarea{
  width:100%;
  padding:12px;
  margin-bottom:14px;
  font-size:15px;
  border:1px solid #B8944D;
  border-radius:6px;
  outline:none;
}
button{
  width:100%;
  padding:12px;
  background:#1F6F5C;
  color:#fff;
  border:none;
  font-size:16px;
  font-weight:600;
  cursor:pointer;
  border-radius:6px;
  transition: 0.2s;
}

button:hover{background: #144d40;}
</style>
<body>
    <section class="header">
    <div class="container">
        <h1>LORVIE RESTAURANT</h1>
            <h1>Please Fill The Form Below To Place Your Order</h1>
<form action="order.php" method="POST">

    <label for="customer_name">Name:</label>
    <input type="text" id="customer_name" name="customer_name" placeholder="Enter your name" required>

    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Enter your email">

    <label for="address">Delivery Address:</label>
    <textarea id="address" name="address" placeholder="Enter your delivery address" required></textarea>

    <label for="order_details">Your Order:</label>
    <textarea id="order_details" name="order_details" placeholder="Enter your order details" required></textarea>

    <label for="special_instructions">Special Instructions:</label>
    <textarea id="special_instructions" name="special_instructions" placeholder="Enter any special instructions"></textarea>
    
    <label for="order_date">Date of the Order</label>
    <input type="date" name="date" placeholder="Please what is the date of order?">

    <button type="submit" name="submit">Place Order</button>

</form>
    </div>
    </section>
</body>
</html>
