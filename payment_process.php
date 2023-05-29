<?php
include('connection.php');
if (isset($_POST['name'])&& isset($_POST['pid'])){
    // $amt = $_POST['amt'];
    $name = $_POST['name'];
    $pid = $_POST['pid'];
    $product_id = $_POST['productid'];

   mysqli_query($connection, "insert into payment(name,product_name) values('$name','$pid')");
   // mysqli_query($connection, "insert into payment(name,product_name,amount) values('dk','125','8000')");
   echo $product_id;
}