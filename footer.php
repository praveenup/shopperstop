<div style="clear: both;"></div>

<footer style="background-color: black;padding-top: 20px;margin-top: 30px">
    <div style="background-color: " class="col-md-6 text-center">
        <ul style="list-style: none">
            <li><b style="color: white">Online Shopping</b></li>
            <?php
            $sql = "select * from category";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<li><a href="category.php?category_id='.$row['category_id'].'">'.$row['category_name'].'</a></li>';
                }
            }
            ?>
        </ul>
    </div>
    <div style="background-color: " class="col-md-6 text-center">
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
</footer>