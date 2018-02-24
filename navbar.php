
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
            <form class="navbar-form navbar-left" action="search.php">
                <div class="input-group" style="width: 650px;padding-left:150px; ">
                    <input type="text" class="form-control" placeholder="Search Product Here..." name="search_text" id="search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <?php if(!isset($_SESSION['user_id'])){ ?>
                    <li><a href="#" data-toggle="modal" data-target="#register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php } else { ?>
                    <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                    <li><a href="cart.php?user_id=<?= $_SESSION['user_id'] ?>"><span class="glyphicon glyphicon-object-align-bottom"></span>Cart</a></li>
                    <li><a href="orders.php"><span class="glyphicon glyphicon-book"></span>Orders</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                <?php }
                if(isset($_SESSION['user_id'])) {
                    $sql = "select * from user where user_id=$_SESSION[user_id]";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    $row = mysqli_fetch_assoc($result);
                    echo '<li class=""><a href="#" style="color: #2aabd2"><span class="glyphicon glyphicon-user"></span> Hello ' . $row['user_name'] . '</a></li>';
                    }
                }?>
            </ul>
            <div style="margin: 50px"></div>
            <ul class="nav navbar-nav">
                <?php
                $sql = "select * from category";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo '<li class="side-li"><a style="text-decoration: none" href="category.php?category_id='.$row['category_id'].'">'.$row['category_name'].'</a></li>';
                    }
                }
                ?>
            </ul>

        </div>
    </div>
</nav>
<div style="margin-top: 140px;"></div>
<script>
    $(document).ready(function(){
        $('#search').autocomplete({
            source : 'search_text.php',
            minLength : 1,
            autoFocus : true
        });
    });
</script>