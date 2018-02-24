<?php
include "db.php";
$time = time();
$sql = "update cart set purchased = true  where user_id=$_GET[user_id]";
//$result = mysqli_query($conn, $sql);
//header("location:cart.php?user_id=$_GET[user_id]");
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Order is Successfully Placed.'); window.location = 'orders.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>