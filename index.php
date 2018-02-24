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
    <link rel="stylesheet" href="jqueryui/jquery-ui.css">
    <!-- Latest compiled and minified JavaScript -->
    <!--<script src="js/jquery.min.js"></script>-->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="jqueryui/jquery-ui.js"></script>
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


<header class="col-md-12" style="">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-left: 10px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/c1.PNG" alt="Los Angeles" style="width:100%;">
            </div>

            <div class="item">
                <img src="img/c2.png" alt="Chicago" style="width:100%;">
            </div>

            <div class="item">
                <img src="img/c3.png" alt="New york" style="width:100%;">
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</header>

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



<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h3 class="text-center">Fashion</h3>
            <div id="imageCarousel_fashion" class="carousel slide" data-interval=""
                 data-ride="carousel" data-pause="hover" data-wrap="true">

                <ol class="carousel-indicators">
                    <li data-target="#imageCarousel_fashion" data-slide-to="0" class="active"></li>
                    <li data-target="#imageCarousel_fashion" data-slide-to="1"></li>
                    <li data-target="#imageCarousel_fashion" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">


                    <?php
                    $sql = "select * from product where category_id = 2";
                    $result = mysqli_query($conn, $sql);
                    $i=1;
                    $num_rows =mysqli_num_rows($result);
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $discount = $row['product_discount'];
                            $price = $row['product_price'];
                            $amount = $price - $price * $discount/100;
                            if($i==1){
                                echo '<div class="item active">
                                                      <div class="row">';
                            }
                            if(($i%5==0 || ($i%4==0 && $i>5)) && $i!=1){

                                echo '<div class="item">
                                                    <div class="row">';
                            }
                            echo '<div class="col-xs-3">
                                                  <a href="product.php?id='.$row['product_id'].'">
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
                                               
                                                
                                            </a></div>';


                            if($i%4==0 &&  $i!=1 || $num_rows==$i){

                                echo '</div>
                                                      </div>';
                            }
                            $i++;
                        }
                    }

                    ?>


                </div>

                <a href="#imageCarousel_fashion" class="carousel-control left" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a href="#imageCarousel_fashion" class="carousel-control right" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
</div>




<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h3 class="text-center">Bags</h3>
            <div id="imageCarousel_bags" class="carousel slide" data-interval=""
                 data-ride="carousel" data-pause="hover" data-wrap="true">

                <ol class="carousel-indicators">
                    <li data-target="#imageCarousel_bags" data-slide-to="0" class="active"></li>
                    <li data-target="#imageCarousel_bags" data-slide-to="1"></li>
                    <li data-target="#imageCarousel_bags" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">


                    <?php
                    $sql = "select * from product where category_id = 4";
                    $result = mysqli_query($conn, $sql);
                    $i=1;
                    $num_rows =mysqli_num_rows($result);
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $discount = $row['product_discount'];
                            $price = $row['product_price'];
                            $amount = $price - $price * $discount/100;
                            if($i==1){
                                echo '<div class="item active">
                                                      <div class="row">';
                            }
                            if(($i%5==0 || ($i%4==0 && $i>5)) && $i!=1){

                                echo '<div class="item">
                                                    <div class="row">';
                            }
                            echo '<div class="col-xs-3">
                                                  <a href="product.php?id='.$row['product_id'].'">
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
                                               
                                                
                                            </a></div>';


                            if($i%4==0 &&  $i!=1 || $num_rows==$i){

                                echo '</div>
                                                      </div>';
                            }
                            $i++;
                        }
                    }

                    ?>


                </div>

                <a href="#imageCarousel_bags" class="carousel-control left" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a href="#imageCarousel_bags" class="carousel-control right" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h3 class="text-center">Footware</h3>
            <div id="imageCarousel_footware" class="carousel slide" data-interval=""
                 data-ride="carousel" data-pause="hover" data-wrap="true">

                <ol class="carousel-indicators">
                    <li data-target="#imageCarousel_footware" data-slide-to="0" class="active"></li>
                    <li data-target="#imageCarousel_footware" data-slide-to="1"></li>
                    <li data-target="#imageCarousel_footware" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">


                    <?php
                    $sql = "select * from product where category_id = 3";
                    $result = mysqli_query($conn, $sql);
                    $i=1;
                    $num_rows =mysqli_num_rows($result);
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $discount = $row['product_discount'];
                            $price = $row['product_price'];
                            $amount = $price - $price * $discount/100;
                            if($i==1){
                                echo '<div class="item active">
                                                      <div class="row">';
                            }
                            if(($i%5==0 || ($i%4==0 && $i>5)) && $i!=1){

                                echo '<div class="item">
                                                    <div class="row">';
                            }
                            echo '<div class="col-xs-3">
                                                  <a href="product.php?id='.$row['product_id'].'">
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
                                               
                                                
                                            </a></div>';


                            if($i%4==0 &&  $i!=1 || $num_rows==$i){

                                echo '</div>
                                                      </div>';
                            }
                            $i++;
                        }
                    }

                    ?>


                </div>

                <a href="#imageCarousel_footware" class="carousel-control left" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a href="#imageCarousel_footware" class="carousel-control right" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>
</body>
</html>
