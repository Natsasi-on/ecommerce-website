<?php include("./common/header.php");
require_once 'includes/db.php'; ?>
<link rel="stylesheet" href="./common/styles/indexd.css">

<section class="carousel">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <!-- indicator below the image -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active indicators-shape" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <!-- carousel box -->
        <div class="carousel-inner">
            <div class="carousel-item active carousel-box">
                <img src="./common/images/school2.jpg" class="d-block w-100 image-carousel" alt="...">
                <div class="overlay">
                    <h1>Welcome <br> Back to School</h1>
                    <h5>Free Shipping. Free Returns. All the time.</h5>
                    <a href="">Shop Now &rarr;</a>
                </div>
            </div>
            <div class="carousel-item carousel-box">
                <img src="./common/images/cloth.jpg" class="d-block w-100 image-carousel image2-carousel" alt="...">
                <div class="overlay right-overlay">
                    <h1>WINTER <br> Collections</h1>
                    <h5>Meet endless collections of winter jackets, coats, <br> and other
                        winter outfit pieces that look amazing.</h5>
                    <a href="">Shop Now &rarr;</a>
                </div>
            </div>
            <div class="carousel-item carousel-box">
                <img src="./common/images/beauty4.jpg" class="d-block w-100 image-carousel .image3-carousel" alt="...">
                <div class="overlay">
                    <h1> Beauty <br>Time</h1>
                    <h5>Free delivery</h5>
                    <a href="">Shop Now &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="link-all-products">
        <a href="./product.php">See More &rarr;</a>
    </div>
    <div class="highlight flex-row-box">
        <?php
        // show promotion products in databases
        $query = "SELECT * FROM products WHERE promotion ='1';";
        $connect = mysqli_query($conn, $query);
        while ($data = mysqli_fetch_assoc($connect)) {
            echo '<a href="">
            <div class="highlight-container">
                <div class="flex-highlight">
                    <h6>' . $data["products_name"] . '</h6>
                    <h5>Extra <span class="emphasize">30% Off</span> All Sale Product</h5>
                </div>
                <img src="' . $data["images"] . '"alt="highligt-earphones">
            </div>
        </a>';
        }
        ?>
    </div>
</section>
<section class="services flex-row-box">
    <div class="service-container flex-row-box">
        <?php include("./common/svg/payment-secured.php"); ?>
        <p>100% Payment <br> Secured</p>
    </div>
    <div class="service-container flex-row-box">
        <?php include("./common/svg/lotspayment.php"); ?>
        <p>Support Lots<br>of Payments</p>
    </div>
    <div class="service-container flex-row-box">
        <?php include("./common/svg/24-7.php"); ?>
        <p>24/7 <br>Support</p>
    </div>
    <div class="service-container flex-row-box">
        <?php include("./common/svg/delivery.php"); ?>
        <p>Free Delivery <br>with $100</p>
    </div>
    <div class="service-container flex-row-box">
        <?php include("./common/svg/bestprice.php"); ?>
        <p>Best Price <br>Guarantee</p>
    </div>
</section>


<section class="bestsell">
    <h1>Best Selling</h1>
    <div class="link-all-products link-all">
        <a href="./product.php">See More &rarr;</a>
    </div>
    <div class="flex-row-box product-box">
        <?php
        // show products that have high sell_amount
        $query = "SELECT * FROM products WHERE sell_amount >0;";
        $connect = mysqli_query($conn, $query);

        while ($data = mysqli_fetch_assoc($connect)) {
            echo '<a href="./product-detail.php" class="product-group">
                    <form class="cart-waitlist">
                        <button class="float-heart">';
            include("./common/svg/heart.php");
            echo '</button>';
            echo '<img src="' . $data["images"] . '">
                    <div class="flex-row-box rate">';

            //show star rate
            if ($data["star_rate"] > 0) {
                for ($i = 0; $i < $data["star_rate"]; $i++) {
                    include("./common/svg/star-filled.php");
                }
            };
            $star = $data["star_rate"];

            switch ($star) {
                case 0:
                    for ($i = 0; $i < 5; $i++) {
                        include("./common/svg/star.php");
                    }
                    break;
                case 1:
                    for ($i = 0; $i < 4; $i++) {
                        include("./common/svg/star.php");
                    }
                    break;
                case 2:
                    for ($i = 0; $i < 3; $i++) {
                        include("./common/svg/star.php");
                    }
                    break;
                case 3:
                    for ($i = 0; $i < 2; $i++) {
                        include("./common/svg/star.php");
                    }
                    break;
                case 4:
                    for ($i = 0; $i < 1; $i++) {
                        include("./common/svg/star.php");
                    }
                    break;
                case 5:
                    break;
                default:
                    echo "Error, unrecognized action: $star";
            }
            echo '</div>';
            echo '<h6>' . $data["products_name"] . '</h6>
                    <div class="flex-row-box price-cart">
                    <p>$' . $data["price"] . '</p>
                    <button class="cart-btn">';
            include("./common/svg/cart.php");
            echo '</button></div>
            </form>
            </a>';
        }
        ?>
    </div>
</section>
<section class="bestsell">
    <h1>Best Review</h1>
    <div class="link-all-products link-all">
        <a href="./product.php">See More &rarr;</a>
    </div>
    <div class="flex-row-box product-box">
        <?php
        // show product with 5 star review
        $query = "SELECT * FROM products WHERE star_rate =5;";
        $connect = mysqli_query($conn, $query);

        while ($data = mysqli_fetch_assoc($connect)) {
            echo '<a href="./product-detail.php" class="product-group">
                    <form class="cart-waitlist">
                        <button class="float-heart">';
            include("./common/svg/heart.php");
            echo '</button>';
            echo '<img src="' . $data["images"] . '">
                    <div class="flex-row-box rate">';

            //show star rate
            if ($data["star_rate"] > 0) {
                for ($i = 0; $i < $data["star_rate"]; $i++) {
                    include("./common/svg/star-filled.php");
                }
            };
            $star = $data["star_rate"];

            switch ($star) {
                case 0:
                    for ($i = 0; $i < 5; $i++) {
                        include("./common/svg/star.php");
                    }
                    break;
                case 1:
                    for ($i = 0; $i < 4; $i++) {
                        include("./common/svg/star.php");
                    }
                    break;
                case 2:
                    for ($i = 0; $i < 3; $i++) {
                        include("./common/svg/star.php");
                    }
                    break;
                case 3:
                    for ($i = 0; $i < 2; $i++) {
                        include("./common/svg/star.php");
                    }
                    break;
                case 4:
                    for ($i = 0; $i < 1; $i++) {
                        include("./common/svg/star.php");
                    }
                    break;
                case 5:
                    break;
                default:
                    echo "Error, unrecognized action: $star";
            }
            echo '</div>';
            echo '<h6>' . $data["products_name"] . '</h6>
                    <div class="flex-row-box price-cart">
                    <p>$' . $data["price"] . '</p>
                    <button class="cart-btn">';
            include("./common/svg/cart.php");
            echo '</button></div>
            </form>
            </a>';
        }
        ?>
    </div>
</section>
<?php include("./common/Footer.php"); ?>