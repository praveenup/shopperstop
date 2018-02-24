<?php

include "db.php";
$sql = "SELECT * FROM user where email = '$_POST[email]' and password = '$_POST[password]'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['user_id'] = $row['user_id'];
    echo "<script>window.location.href = 'index.php';</script>";
}else
    echo "<script>alert('User not exists. Incorrect email or password.'); window.location = 'index.php';</script>";
?>