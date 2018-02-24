<?php

include "db.php";
session_start();
$sql = "delete from cart where user_id=$_SESSION[user_id] and product_id=$_GET[product_id]";
$result = mysqli_query($conn, $sql);
header("location:cart.php?user_id=$_SESSION[user_id]");
?>