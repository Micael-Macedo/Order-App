<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order APP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/71290ec34f.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <main>
        <header>
            <div>
                <ul class="userOptions">
                    <li><i class="fa-solid fa-list"></i></li>
                    <li><img src="images/user.png" alt="" srcset=""></li>
                </ul>
            </div>
            <div>
                <ul class="userFilter">
                    <li class="inputSearch"><i class="fa-solid fa-magnifying-glass"></i><input type="text" placeholder="Find for food"></li>
                    <li><i class="fa-sharp fa-solid fa-sliders fa-2xl" style="color: #FE724C;"></i></li>
                </ul>
            </div>
        </header>
        <section>
            <div class="banner">
                <p>Up to</p>
                <h2><b>60% OFF</b></h2>
                <h3>with free delivery</h3>
                <button>get discount <i class="fa-solid fa-arrow-down"></i> </button>
            </div>
        </section>
        <section>
            <div class="title">
                <h2>What are you craving for?</h2>
            </div>
            <div class="foodOptions">
                <div>
                    <i class="fa-solid fa-drumstick-bite fa-2xl"></i>
                    <p>Meat</p>
                </div>
                <div>
                    <i class="fa-sharp fa-solid fa-bowl-food fa-2xl"></i>
                    <p>Rice</p>
                </div>
                <div>
                    <i class="fa-solid fa-wine-bottle fa-2xl"></i>
                    <p>Drink</p>
                </div>
                <div>
                    <i class="fa-sharp fa-solid fa-comment-dots fa-2xl"></i>
                    <p>Salad</p>
                </div>
                <div>
                    <i class="fa-sharp fa-solid fa-comment-dots fa-2xl"></i>
                    <p>Other</p>
                </div>
            </div>
        </section>
        <section>
            <div class="title">
                <h2>Featured Foods</h2>
                <button class="viewAll">View All <i class="fa-solid fa-chevron-right"></i></button>
            </div>
            <div class="foodCards">
                <div class="foodCard">
                    <a href="product.php">
                        <img src="images/Mask Group.png" alt="">
                        <h3>Product name</h3>
                        <div class="placeDelivery">
                            <i class="fa-solid fa-moped"></i>
                            <p>Free delivery</p>
                            <i class="fa-sharp fa-solid fa-timer"></i>
                            <p>10-15 mins</p>
                            <b>$9.5</b>
                        </div>
                        <div class="category">
                            <p>Salad</p>
                        </div>
                    </a>
                </div>
                <div class="foodCard">
                    <a href="product.php">
                        <img src="images/Mask Group.png" alt="">
                        <h3>Product name</h3>
                        <div class="placeDelivery">
                            <i class="fa-solid fa-moped"></i>
                            <p>Free delivery</p>
                            <i class="fa-sharp fa-solid fa-timer"></i>
                            <p>10-15 mins</p>
                            <b>$9.5</b>
                        </div>
                        <div class="category">
                            <p>Salad</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section>
            <h2>Popular items</h2>
        </section>
    </main>
    <nav>
        <ul>
            <li><i class="fa-solid fa-house"></i>
                <p>Home</p>
            </li>
            <li><i class="fa-solid fa-light fa-heart"></i></li>
            <li><i class="fa-solid fa-bag-shopping"></i></li>
            <li><i class="fa-solid fa-comment-dots"></i></li>
            <li><i class="fa-regular fa-user"></i></li>
        </ul>
    </nav>
</body>

</html>