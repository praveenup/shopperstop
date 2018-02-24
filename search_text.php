<?php

include 'db.php';

if (isset($_GET['search_text'])) {

    $sql = "select * from product where product_name like  '%$_GET[search_text]%'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $array = array();
        while( $row = mysqli_fetch_assoc($result)) {
            $array[] = array( 'label' => $row['product_name'] , 'value' => $row['product_id'] );
        }
        echo '<script>alert("dsad");console.log("dasdasa");</script>';
        echo json_encode ($array);
    }
}

?>