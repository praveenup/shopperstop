<?php

include "db.php";

$sql = "insert into cart (user_id,product_id,purchased,quantity) VALUES ($_GET[user_id],$_GET[product_id],false,1)";
$result = mysqli_query($conn, $sql);
header("location:cart.php?user_id=$_GET[user_id]");
?>