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
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>


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
        .panel:hover{
            box-shadow: 0 30px 16px 10px lightgray;
            opacity: .9;

            transition: .3s;
        }
    </style>
</head>
<body>
<?php include 'navbar.php'?>

<aside class="col-md-2" style="padding: 0;margin: 0 ;">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Categories</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar1">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    $sql = "select * from category";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            if($row['category_id']==$_GET['category_id'])
                                echo '<li class="side-li"><a style="text-decoration: none;color: #5bc0de" href="category.php?category_id='.$row['category_id'].'">'.$row['category_name'].'</a></li>';
                            else
                                echo '<li class="side-li"><a style="text-decoration: none" href="category.php?category_id='.$row['category_id'].'">'.$row['category_name'].'</a></li>';
                        }
                    }
                    ?>

                </ul>
            </div>
        </div>
    </nav>
</aside>
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



<div class="col-md-9" >
    <div class="container-fluid">
        <h3 class="text-center">FASHION CLOTHES</h3>
        <br>
        <div class="row" >
            <?php
            $sql = "select * from product where category_id = $_GET[category_id]";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while( $row = mysqli_fetch_assoc($result)) {
                    $discount = $row['product_discount'];
                    $price = $row['product_price'];
                    $amount = $price - $price * $discount/100;
                    echo '<a href="product.php?id='.$row['product_id'].'">
                <div class="col-md-3" >
                    <div class="panel panel-success" style="">

                        <div class="panel-body">
                            <img class="img-responsive card-class" src="'.$row['product_image'].'">
                        </div>
                        <div class="panel-footer">
                            <h4 class="text-center">'.$row['product_name'].'</h4>
                            <div class="text-center">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="badge">3.2</span>
                            </div>

                            <div>
                                <a href="#">311 Ratings</a>
                                <a href="#" style="margin-left: 10px">50 Reviews</a>
                            </div>
                            <h5 style="color: grey">MRP <span style="text-decoration: line-through">Rs. '.$price.'</span> (Inclusive of all taxes)</h5>
                            <h4 class="text-left" style="color: red;">Rs. '.$amount.'<span style="border: solid;color: gainsboro ">'.$discount.'% OFF</span></h4>

                        </div>

                    </div>
                </div>
            </a>';
                }
            }

            ?>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>