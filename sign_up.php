<?php

include "db.php";
$sql = "SELECT * FROM user where email = '$_POST[email]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    $sql = "insert into user (user_name,email,password) VALUES ('$_POST[name]','$_POST[email]','$_POST[password]')";
    $result = mysqli_query($conn, $sql);
    echo "<script>alert('User Successfully Registered.'); window.location = 'index.php';</script>";
}else
    echo "<script>alert('User Already Exists.'); window.location = 'index.php';</script>";
?>