<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <div class="title">
                <a href="index.php"><i class="fa-solid fa-circle-chevron-left" title="retornar para o menu"></i></a>
                <p>Product detail</p>
            </div>
        </header>
        <section>
            <div class="foodContent">
                <div class="foodInfo">
                    <img src="images/Mask Group.png" alt="">
                    <h2>Product Name</h2>
                    <div class="foodAvaliation">
                        <i class="fa-solid fa-star" style="color: #ffea00;"></i>
                        <h3>4.5</h3>
                        <p>30+</p>
                        <a href="">See Review</a>
                    </div>
                    <div class="foodPrice">
                        <div>
                            <p>$9.50</p>
                        </div>
                        <div class="qtdFood">
                            <button onclick="editQtd('minus')"><i class="fa-solid fa-circle-minus fa-2xl" style="color: #FE724C;"></i></button>
                            <p class="value">01</p>
                            <button onclick="editQtd('plus')"><i class="fa-solid fa-circle-plus fa-2xl" style="color: #FE724C"></i></button>
                        </div>
                    </div>
                </div>
                <div>
                    <h2>Description</h2>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old.</p>
                </div>
            </div>
        </section>
        <section>
            <div class="optionalComplements">
                <div class="complement">
                    <h3>Pepper Julienned</h3>
                    <div>
                        <p>+$2.30</p>
                        <input type="checkbox" name="" id="" class="checkmarker">
                    </div>
                </div>
                <div class="complement">
                    <h3>Baby Spinach</h3>
                    <div>
                        <p>+$4.70</p>
                        <input type="checkbox" name="" id="" class="checkmarker">
                    </div>
                </div>
                <div class="complement">
                    <h3>Masroom</h3>
                    <div>
                        <p>+$2.50</p>
                        <input type="checkbox" name="" id="" class="checkmarker">
                    </div>
                </div>
            </div>
            <div class="cartButton">
                <button class="cart"><i class="fa-solid fa-cart-shopping"></i>Add to cart</button>
            </div>
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
    <script src="script.js"></script>
</body>

</html>