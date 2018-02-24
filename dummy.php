

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

<style>
    /* navbar */
    .navbar-default {
        background-color: #101010;
        border-color: #101010;
    }
    /* Title */
    .navbar-default .navbar-brand {
        color: #c7254e;
    }
    .navbar-default .navbar-brand:hover,
    .navbar-default .navbar-brand:focus {
        color: #2aabd2;
    }
    /* Link */
    .navbar-default .navbar-nav > li > a {
        color: #c7254e;
    }
    .navbar-default .navbar-nav > li > a:hover,
    .navbar-default .navbar-nav > li > a:focus {
        color: #2aabd2;
    }
    .navbar-default .navbar-nav > .active > a,
    .navbar-default .navbar-nav > .active > a:hover,
    .navbar-default .navbar-nav > .active > a:focus {
        color: #555;
        background-color: #E7E7E7;
    }
    .navbar-default .navbar-nav > .open > a,
    .navbar-default .navbar-nav > .open > a:hover,
    .navbar-default .navbar-nav > .open > a:focus {
        color: #555;
        background-color: #D5D5D5;
    }
    /* Caret */
    .navbar-default .navbar-nav > .dropdown > a .caret {
        border-top-color: #777;
        border-bottom-color: #777;
    }
    .navbar-default .navbar-nav > .dropdown > a:hover .caret,
    .navbar-default .navbar-nav > .dropdown > a:focus .caret {
        border-top-color: #333;
        border-bottom-color: #333;
    }
    .navbar-default .navbar-nav > .open > a .caret,
    .navbar-default .navbar-nav > .open > a:hover .caret,
    .navbar-default .navbar-nav > .open > a:focus .caret {
        border-top-color: #555;
        border-bottom-color: #555;
    }
    /* Mobile version */
    .navbar-default .navbar-toggle {
        border-color: #DDD;
    }
    .navbar-default .navbar-toggle:hover,
    .navbar-default .navbar-toggle:focus {
        background-color: #DDD;
    }
    .navbar-default .navbar-toggle .icon-bar {
        background-color: #CCC;
    }
    @media (max-width: 767px) {
        .navbar-default .navbar-nav .open .dropdown-menu > li > a {
            color: #777;
        }
        .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
        .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
            color: #333;
        }
    }
</style>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Shopper Stop</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <form class="navbar-form navbar-left" action="">
                <div class="input-group" style="width: 800px;padding-left:150px; ">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" data-toggle="modal" data-target="#register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<div style="margin-top: 50px;"></div>
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
                    <li class="side-li"><a style="text-decoration: none" href="category.php?category_id=1">Electronics</a></li><li class="side-li"><a style="text-decoration: none" href="category.php?category_id=2">Fashion</a></li><li class="side-li"><a style="text-decoration: none" href="category.php?category_id=3">Footware</a></li><li class="side-li"><a style="text-decoration: none" href="category.php?category_id=4">Bags</a></li>
                </ul>
            </div>
        </div>
    </nav>
</aside>
<header class="col-md-10">
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
                <img src="img/c1.png" alt="Los Angeles" style="width:100%;">
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



<div class="col-md-9" >
    <div class="container-fluid">
        <h3 class="text-center">FASHION CLOTHES</h3>
        <br>
        <div class="row" >
            <a href="product.php?id=5">
                <div class="col-md-3" >
                    <div class="panel panel-success" style="">

                        <div class="panel-body">
                            <img class="img-responsive card-class" src="uploads/Highlander-Blue-Denim-Slim-Fit-Casual-Shirt.jpg">
                        </div>
                        <div class="panel-footer">
                            <h4 class="text-center">Slim Fit Casual Shirt</h4>
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
                            <h5 style="color: grey">MRP <span style="text-decoration: line-through">Rs. 400</span> (Inclusive of all taxes)</h5>
                            <h4 class="text-left" style="color: red;">Rs. 320<span style="border: solid;color: gainsboro ">20% OFF</span></h4>

                        </div>

                    </div>
                </div>
            </a><a href="product.php?id=6">
                <div class="col-md-3" >
                    <div class="panel panel-success" style="">

                        <div class="panel-body">
                            <img class="img-responsive card-class" src="uploads/Roadster-Men-Black-Regular-Fit-Solid-Casual-Shirt.jpg">
                        </div>
                        <div class="panel-footer">
                            <h4 class="text-center">Fit Solid Casual Shirt</h4>
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
                            <h5 style="color: grey">MRP <span style="text-decoration: line-through">Rs. 500</span> (Inclusive of all taxes)</h5>
                            <h4 class="text-left" style="color: red;">Rs. 350<span style="border: solid;color: gainsboro ">30% OFF</span></h4>

                        </div>

                    </div>
                </div>
            </a><a href="product.php?id=7">
                <div class="col-md-3" >
                    <div class="panel panel-success" style="">

                        <div class="panel-body">
                            <img class="img-responsive card-class" src="uploads/HIGHLANDER-Men-Blue-Slim-Fit-Mid-Rise-Clean-Look-Stretchable-Jeans.jpg">
                        </div>
                        <div class="panel-footer">
                            <h4 class="text-center">Men Slim Fit Jeans</h4>
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
                            <h5 style="color: grey">MRP <span style="text-decoration: line-through">Rs. 1000</span> (Inclusive of all taxes)</h5>
                            <h4 class="text-left" style="color: red;">Rs. 900<span style="border: solid;color: gainsboro ">10% OFF</span></h4>

                        </div>

                    </div>
                </div>
            </a><a href="product.php?id=9">
                <div class="col-md-3" >
                    <div class="panel panel-success" style="">

                        <div class="panel-body">
                            <img class="img-responsive card-class" src="uploads/HERENOW-Women-Jeans.jpg">
                        </div>
                        <div class="panel-footer">
                            <h4 class="text-center">Women Jeans</h4>
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
                            <h5 style="color: grey">MRP <span style="text-decoration: line-through">Rs. 1300</span> (Inclusive of all taxes)</h5>
                            <h4 class="text-left" style="color: red;">Rs. 975<span style="border: solid;color: gainsboro ">25% OFF</span></h4>

                        </div>

                    </div>
                </div>
            </a>        </div>
    </div>
</div>







<div class="container">
    <div class="row">
        <div class="col-xs-12">

            <div id="imageCarousel" class="carousel slide" data-interval=""
                 data-ride="carousel" data-pause="hover" data-wrap="true">

                <ol class="carousel-indicators">
                    <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#imageCarousel" data-slide-to="1"></li>
                    <li data-target="#imageCarousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">


                    <div class="item active">
                        <div class="row"><div class="col-xs-3">
                                <a href="product.php?id=5">
                                    <div class="panel panel-success" style="">

                                        <div class="panel-body">
                                            <img class="img-responsive card-class" src="uploads/Highlander-Blue-Denim-Slim-Fit-Casual-Shirt.jpg">
                                        </div>
                                        <div class="panel-footer">
                                            <h4 class="text-center">Slim Fit Casual Shirt</h4>
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
                                            <h5 style="color: grey">MRP <span style="text-decoration: line-through">Rs. 400</span> (Inclusive of all taxes)</h5>
                                            <h4 class="text-left" style="color: red;">Rs. 320<span style="border: solid;color: gainsboro ">20% OFF</span></h4>

                                        </div>
                                    </div>


                                </a></div><div class="col-xs-3">
                                <a href="product.php?id=6">
                                    <div class="panel panel-success" style="">

                                        <div class="panel-body">
                                            <img class="img-responsive card-class" src="uploads/Roadster-Men-Black-Regular-Fit-Solid-Casual-Shirt.jpg">
                                        </div>
                                        <div class="panel-footer">
                                            <h4 class="text-center">Fit Solid Casual Shirt</h4>
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
                                            <h5 style="color: grey">MRP <span style="text-decoration: line-through">Rs. 500</span> (Inclusive of all taxes)</h5>
                                            <h4 class="text-left" style="color: red;">Rs. 350<span style="border: solid;color: gainsboro ">30% OFF</span></h4>

                                        </div>
                                    </div>


                                </a></div><div class="col-xs-3">
                                <a href="product.php?id=7">
                                    <div class="panel panel-success" style="">

                                        <div class="panel-body">
                                            <img class="img-responsive card-class" src="uploads/HIGHLANDER-Men-Blue-Slim-Fit-Mid-Rise-Clean-Look-Stretchable-Jeans.jpg">
                                        </div>
                                        <div class="panel-footer">
                                            <h4 class="text-center">Men Slim Fit Jeans</h4>
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
                                            <h5 style="color: grey">MRP <span style="text-decoration: line-through">Rs. 1000</span> (Inclusive of all taxes)</h5>
                                            <h4 class="text-left" style="color: red;">Rs. 900<span style="border: solid;color: gainsboro ">10% OFF</span></h4>

                                        </div>
                                    </div>


                                </a></div><div class="col-xs-3">
                                <a href="product.php?id=9">
                                    <div class="panel panel-success" style="">

                                        <div class="panel-body">
                                            <img class="img-responsive card-class" src="uploads/HERENOW-Women-Jeans.jpg">
                                        </div>
                                        <div class="panel-footer">
                                            <h4 class="text-center">Women Jeans</h4>
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
                                            <h5 style="color: grey">MRP <span style="text-decoration: line-through">Rs. 1300</span> (Inclusive of all taxes)</h5>
                                            <h4 class="text-left" style="color: red;">Rs. 975<span style="border: solid;color: gainsboro ">25% OFF</span></h4>

                                        </div>
                                    </div>


                                </a></div></div>
                    </div><div class="item">
                        <div class="row"><div class="col-xs-3">
                                <a href="product.php?id=10">
                                    <div class="panel panel-success" style="">

                                        <div class="panel-body">
                                            <img class="img-responsive card-class" src="uploads/Rain-Rainbow-Women-Dresses.jpg">
                                        </div>
                                        <div class="panel-footer">
                                            <h4 class="text-center">Rainbow Women Suit</h4>
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
                                            <h5 style="color: grey">MRP <span style="text-decoration: line-through">Rs. 2000</span> (Inclusive of all taxes)</h5>
                                            <h4 class="text-left" style="color: red;">Rs. 1400<span style="border: solid;color: gainsboro ">30% OFF</span></h4>

                                        </div>
                                    </div>


                                </a></div><div class="col-xs-3">
                                <a href="product.php?id=11">
                                    <div class="panel panel-success" style="">

                                        <div class="panel-body">
                                            <img class="img-responsive card-class" src="uploads/Athena-Women-Dresses.jpg">
                                        </div>
                                        <div class="panel-footer">
                                            <h4 class="text-center">Athena Dress</h4>
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
                                            <h5 style="color: grey">MRP <span style="text-decoration: line-through">Rs. 1500</span> (Inclusive of all taxes)</h5>
                                            <h4 class="text-left" style="color: red;">Rs. 1125<span style="border: solid;color: gainsboro ">25% OFF</span></h4>

                                        </div>
                                    </div>


                                </a></div>

                        </div>

                        <a href="#imageCarousel" class="carousel-control left" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a href="#imageCarousel" class="carousel-control right" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
























        <div class="col-md-12" >
            <div class="container-fluid">
                <h3 class="text-center">ELECTRONICS</h3>
                <br>
                <div class="row" >
                    <a href="product.php?id=23">
                        <div class="col-md-3" >
                            <div class="panel panel-success" style="">

                                <div class="panel-body">
                                    <img class="img-responsive card-class" src="uploads/Kipling-Girls-Trolley-Bag.jpg" style="height: 300px;width: 100%;">
                                </div>
                                <div class="panel-footer">
                                    <h4 class="text-center">Kipling Trolly</h4>
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
                                    <h5 style="color: grey">MRP <span style="text-decoration: line-through">Rs. 5000</span> (Inclusive of all taxes)</h5>
                                    <h4 class="text-left" style="color: red;">Rs. 4000<span style="border: solid;color: gainsboro ">20% OFF</span></h4>

                                </div>

                            </div>
                        </div>
                    </a><a href="product.php?id=24">
                        <div class="col-md-3" >
                            <div class="panel panel-success" style="">

                                <div class="panel-body">
                                    <img class="img-responsive card-class" src="uploads/Cath-Kidston-Girls-Pink--Green-Floral-Print-Cabin-Trolley-Bag.jpg" style="height: 300px;width: 100%;">
                                </div>
                                <div class="panel-footer">
                                    <h4 class="text-center">Kidson Bag</h4>
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
                                    <h5 style="color: grey">MRP <span style="text-decoration: line-through">Rs. 4400</span> (Inclusive of all taxes)</h5>
                                    <h4 class="text-left" style="color: red;">Rs. 3520<span style="border: solid;color: gainsboro ">20% OFF</span></h4>

                                </div>

                            </div>
                        </div>
                    </a><a href="product.php?id=25">
                        <div class="col-md-3" >
                            <div class="panel panel-success" style="">

                                <div class="panel-body">
                                    <img class="img-responsive card-class" src="uploads/Kipling-Girls-Trolley-Bag1.jpg" style="height: 300px;width: 100%;">
                                </div>
                                <div class="panel-footer">
                                    <h4 class="text-center">Bag Girls</h4>
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
                                    <h5 style="color: grey">MRP <span style="text-decoration: line-through">Rs. 6000</span> (Inclusive of all taxes)</h5>
                                    <h4 class="text-left" style="color: red;">Rs. 4500<span style="border: solid;color: gainsboro ">25% OFF</span></h4>

                                </div>

                            </div>
                        </div>
                    </a><a href="product.php?id=26">
                        <div class="col-md-3" >
                            <div class="panel panel-success" style="">

                                <div class="panel-body">
                                    <img class="img-responsive card-class" src="uploads/Fastrack-Men-Backpacks.jpg" style="height: 300px;width: 100%;">
                                </div>
                                <div class="panel-footer">
                                    <h4 class="text-center">Fastrack Bagpack</h4>
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
                                    <h5 style="color: grey">MRP <span style="text-decoration: line-through">Rs. 1200</span> (Inclusive of all taxes)</h5>
                                    <h4 class="text-left" style="color: red;">Rs. 1056<span style="border: solid;color: gainsboro ">12% OFF</span></h4>

                                </div>

                            </div>
                        </div>
                    </a>        </div>
            </div>
        </div>

        <div class="col-md-12" >
            <div class="container-fluid">
                <h3 class="text-center">FOOTWARES</h3>
                <br>
                <div class="row" >
                    <a href="product.php?id=17">
                        <div class="col-md-3" >
                            <div class="panel panel-success" style="">

                                <div class="panel-body">
                                    <img class="img-responsive card-class" src="uploads/11471499895066-Roadster-Men-Brown-Solid-Regular-Sneakers-3411471499894853-1.jpg" style="height: 300px;width: 100%;">
                                </div>
                                <div class="panel-footer">
                                    <h4 class="text-center">Roadster Footware</h4>
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
                                    <h5 style="color: grey">MRP <span style="text-decoration: line-through">Rs. 1100</span> (Inclusive of all taxes)</h5>
                                    <h4 class="text-left" style="color: red;">Rs. 935<span style="border: solid;color: gainsboro ">15% OFF</span></h4>

                                </div>

                            </div>
                        </div>
                    </a><a href="product.php?id=18">
                        <div class="col-md-3" >
                            <div class="panel panel-success" style="">

                                <div class="panel-body">
                                    <img class="img-responsive card-class" src="uploads/11484571208657-Roadster-Men-Casual-Shoes-8271484571208373-1.jpg" style="height: 300px;width: 100%;">
                                </div>
                                <div class="panel-footer">
                                    <h4 class="text-center">Men Footware</h4>
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
                                    <h5 style="color: grey">MRP <span style="text-decoration: line-through">Rs. 1300</span> (Inclusive of all taxes)</h5>
                                    <h4 class="text-left" style="color: red;">Rs. 1040<span style="border: solid;color: gainsboro ">20% OFF</span></h4>

                                </div>

                            </div>
                        </div>
                    </a><a href="product.php?id=19">
                        <div class="col-md-3" >
                            <div class="panel panel-success" style="">

                                <div class="panel-body">
                                    <img class="img-responsive card-class" src="uploads/11485339496816-DressBerry-Women-Beige-Solid-Pumps-3531485339496691-1.jpg" style="height: 300px;width: 100%;">
                                </div>
                                <div class="panel-footer">
                                    <h4 class="text-center">Girls Sandal</h4>
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
                                    <h5 style="color: grey">MRP <span style="text-decoration: line-through">Rs. 2100</span> (Inclusive of all taxes)</h5>
                                    <h4 class="text-left" style="color: red;">Rs. 1575<span style="border: solid;color: gainsboro ">25% OFF</span></h4>

                                </div>

                            </div>
                        </div>
                    </a><a href="product.php?id=20">
                        <div class="col-md-3" >
                            <div class="panel panel-success" style="">

                                <div class="panel-body">
                                    <img class="img-responsive card-class" src="uploads/11501059774655-Nike-Men-Casual-Shoes-6801501059774545-3.jpg" style="height: 300px;width: 100%;">
                                </div>
                                <div class="panel-footer">
                                    <h4 class="text-center">Nike Casuals</h4>
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
                                    <h5 style="color: grey">MRP <span style="text-decoration: line-through">Rs. 5000</span> (Inclusive of all taxes)</h5>
                                    <h4 class="text-left" style="color: red;">Rs. 4000<span style="border: solid;color: gainsboro ">20% OFF</span></h4>

                                </div>

                            </div>
                        </div>
                    </a>        </div>
            </div>
        </div>


        <div style="clear: both;"></div>

        <footer style="background-color: black;padding-top: 20px;margin-top: 30px">
            <div style="background-color: black" class="col-md-6 text-center">
                <ul style="list-style: none">
                    <li><b style="color: white">Online Shopping</b></li>
                    <li><a href="category.php?category_id=1">Electronics</a></li><li><a href="category.php?category_id=2">Fashion</a></li><li><a href="category.php?category_id=3">Footware</a></li><li><a href="category.php?category_id=4">Bags</a></li>        </ul>
            </div>
            <div style="background-color: black" class="col-md-6 text-center">
                <ul style="list-style: none">
                    <li><b style="color: white">Usefull Links</b></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">T&C</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">Terms Of Use</a></li>
                    <li><a href="">Blog</a></li>
                </ul>
            </div>
            <div class="text-center">
                <ul style="list-style: none">
                    <li><b style="color: white">&copy;2018 www.shopperstop.com. All rights reserved.</b></li>
                </ul>
            </div>
        </footer></body>
</html>