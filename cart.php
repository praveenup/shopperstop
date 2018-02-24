<?php
include "db.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Shopping Cart</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
    <!--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <style>
        .carousal-class{
            height: 500px;
            width: 100%;
        }

        /*side li links*/
        .side-li{
            padding: 10px;
            border: black;
            list-style: none;
            font-family:"Century Gothic";
            font-size: 15px;

        }

        .checked{
            color: yellow;
        }
        .carousel-control.left, .carousel-control.right {
            background-image: none !important;
            filter: none !important;
        }
    </style>
</head>
<body>
<?php include 'navbar.php'?>





<!-- Modal -->
<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">User Login</h4>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form action="login.php" method="post">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email"
                                       name="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                                       name="password">
                            </div>
                            <!--<div class="checkbox">
                                <label><input type="checkbox" name="remember"> Remember me</label>
                            </div>-->
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="register" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form action="sign_up.php" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Register</h4>
                </div>
                <div class="modal-body">
                    <div class="container">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name"
                                       name="name" required>
                            </div>
                            <div class="form-group">
                                <label >Email:</label>
                                <input type="email" class="form-control"  placeholder="Enter email"
                                       name="email" required>
                            </div>
                            <div class="form-group">
                                <label >Password:</label>
                                <input type="password" class="form-control" placeholder="Enter password"
                                       name="password" required>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-block">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>




<?php
$sql = "select * from cart c,product p where c.product_id=p.product_id and user_id = $_GET[user_id] and purchased = FALSE order by place_time desc";
$result = mysqli_query($conn, $sql);
$total_price = 0;
$total_discount = 0;
if (mysqli_num_rows($result) > 0) {
    // output data of each row

?>
<div class="container-fluid">
        <div class="col-md-12" >
            <div style="height: 500px">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="text-center">Shopping Cart</h3>
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                    <?php
                    while($row = mysqli_fetch_assoc($result)) {
                        $total_price += $row['product_price'];

                        $discount = $row['product_discount'];
                        $price = $row['product_price'];
                        $amount = $price - $price * $discount / 100;
                        $total_discount += $price * $discount / 100;
                        echo '<div class="col-md-12 list-group-item list-group-item-success">
                                    
                                    <h3>'.$row['product_name'].'</h3>
                                    
                                    <div class="col-md-3">
                                        <img src="'.$row['product_image'].'" alt="Los Angeles" style="height:214px;width: 160px;">
                                    </div>
                                    <div class="col-md-7">
        
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="badge">3.2</span>
                                        <a href="#" style="margin: 10px">311 Ratings</a>
                                        <a href="#" style="margin: 10px">50 Reviews</a>
                                        <a href="#" style="margin: 10px">Have a question</a>
                                        <hr>
                                        <h4 style="color: grey">MRP <span style="text-decoration: line-through">Rs. '.$price.'</span> (Inclusive of all taxes)</h4>
                                        <br>
                                        <h2 class="text-left" style="color: red;">Rs. '.$amount.'<span style="border: solid;color: gainsboro ">'.$discount.'% OFF</span></h2>
                                        <h4 style="color: gainsboro ">Generally delivered by 5 days</h4>
                                        <!--<div class="col-md-offset-10 form-group">
                                            <label for="quan" >Quantity</label>
                                            <select id="quan" class="form-control" name="quantity">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>-->
                                    </div>
                                    <div class="form-group text-right">
                                        <a class="btn btn-danger" href="cart_item_remove.php?product_id='.$row['product_id'].'">Remove</a>
                                        <!--<input class="btn btn-primary " value="Save To Wishlist">-->
                                    </div>
                                </div>';
                    }
                    ?>
                        </div>
                        <div style="margin-top:50px;clear: both "></div>
                    <div class="panel-footer">
                        <!--<div class="text-center form-group form-inline">
                            <h4>Apply Coupon</h4>
                            <input class="form-control" type="text" placeholder="Enter Coupon Code">
                            <input class="btn btn-warning" value="Apply Code">
                        </div>-->
                        <div class="text-right form-group">
                            <h4> Bag Total  <span style="display:inline-block; width: 50px;"></span>       Rs. <?= $total_price ?></h4>
                            <h4> Bag Discount    <span style="display:inline-block; width: 50px;"></span>      -Rs. <?= $total_discount ?></h4>
                            <h4> Delivery        <span style="display:inline-block; width: 50px;"></span>       FREE</h4>
                            <hr>
                            <h3><b> Your Total Order:   <span style="display:inline-block; width: 50px;"></span>   Rs. <?= $total_price-$total_discount ?></b></h3>
                            <div class="form-group text-center">
                                <a class="btn btn-success text-right btn-block" href="place_order.php?user_id=<?= $_GET['user_id'] ?>">Place Order</a>
                            </div>
                        </div>

                    </div>
                        <?php
                    }else{
                            echo '<div class="container">
                                    <div class="row">
                                        <div class="text-center">
                                            <div class="">
                            
                                                <h3><strong>CART</strong></h3>
                                              
                                                <span class="fa fa-frown fa-7x"></span>
                                                <p>
                                                    <h3>Your Cart Is Empty. <br>To Continue Shopping <a href="index.php">Click Here</a></h3> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                        }
                    ?>

                    </div>
                </div>
            </div>
        </div>
</div>
<div style="margin-top: 300px;clear: both"></div>
<?php include 'footer.php'; ?>
</body>

</html>