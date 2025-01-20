<?php 
    session_start();
    include("php/db-conn.php");
    include("php/function.php");
    $user_data = check_login($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="pictures/logo/fevicon-logo.png">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/home-page-logined.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/home-general.css">
    <link rel="stylesheet" href="css/about-page.css">
    <title>Home - The Gallery Café</title>
</head>

<body>
    <header class="header">
        <div class="left-section">
            <img class="cafe-logo" src="pictures/logo/logo-white-bg.png">
        </div>
        
        <div class="right-section">
            <div class="right-button">
                <a class="home-header" href="home-page-logined.php">Home</a>
            </div>
            
            <div class="right-button" id="reservation-header">
                <a class="reservation-header" href="table-reservation-page.php">Table Reservation</a>
            </div>
            <div class="right-button" id="preorder-cushine-header">
                <a class="preorder-cushine-header" href="preorder-cusine-page.php">Pre-Order Cuisine</a>
            </div>
            <div class="right-button" id="about-us">
                <a class="about-us" href="about-page-logined.php">About Us</a>  
            </div>
            <div class="profile">
                <a href="logout.php">
                    <button class="login-button">Logout</button>
                </a>
            </div>
        </div>
    </header>

    <main>
        <section>
        <div class="slideshow-container">
                <div class="mySlides fade">
                    <img class="slideshow-picture" src="pictures/slideshow/1.jpg">
                </div>

                <div class="mySlides fade">
                    <img class="slideshow-picture" src="pictures/slideshow/2.jpg">
                </div>

                <div class="mySlides fade">
                    <img class="slideshow-picture" src="pictures/slideshow/3.jpg">
                </div>

                <div class="mySlides fade">
                    <img class="slideshow-picture" src="pictures/slideshow/4.jpg">
                </div>
                <div class="overlay">
                    <div class="restaurant-title">
                        <h2>Sri Lanka's No.1 Leading Cafe</h2>
                        <h1>The Gallery Café</h1>
                        <p>Savor Creative Cuisine in an Atmosphere of Artistic Inspiration</p>
                        <a href="table-reservation-page.php">
                            <button class="book-table-button" id="book-table-button">Reserve Table</button>
                        </a>
                        <a href="preorder-cusine-page.php">
                            <button class="book-cushine-button" id="book-cushine-button">Pre-Crder Cuisine</button>
                        </a>
                    </div>     
                </div>   
            </div>
        </section>

        <section class="offer-container">
            <h3 class="offer-title">Today's <span>Promotions %</span></h3>
            <div class="offer-box">
                <div class="food-picture">
                    <img src="pictures/food-card-pictures/cheese-kottu.jpg">
                </div>
                <div class="food-details">
                    <p class="offer">50% Offer</p>
                    <p class="offer-item-name">Cheese Kottu</p>
                    <p class="offer-price"><span>LKR 3,000</span> LKR 1,500</p>
                    <a href="preorder-cusine-page.php"><button class="preorder-button">Pre-Order now</button></a>
                </div>
            </div>

            <div class="offer-box">
                <div class="food-picture">
                    <img src="pictures/table-pictures/1.jpg">
                </div>
                <div class="food-details">
                    <p class="offer">50% Offer</p>
                    <p class="offer-item-name">Family Table Package</p>
                    <p class="offer-price">Up to 5 Persons</p>
                    <a href="table-reservation-page.php"><button class="preorder-button">Reserve now</button></a>
                </div>
            </div>
            
        </section>

        <section class="gallery-container
        " id="gallery">
            <div class="gallery">
                <h3>Parking Facilitites</h3>
                <div class="picture-grid">
                    <div class="picture-container"><img src="pictures/parking/p1.jpg"></div>
                    <div class="picture-container"><img src="pictures/parking/p2.jpg"></div>
                    <div class="picture-container"><img src="pictures/parking/p3.jpg"></div>
                    <div class="picture-container"><img src="pictures/parking/p4.jpg"></div>
                </div>
            </div>
        </section>
        
    </main>

    <footer class="footer">
        <div class="left-section">

            <div class="right-button">
                <a class="home-header" href="home-page-logined.php">Home</a>
            </div>
            <div class="right-button" id="reservation-header">
                <a class="reservation-header" href="table-reservation-page.php">Table Reservation</a>
            </div>
            <div class="right-button" id="preorder-cushine-header">
                <a class="preorder-cushine-header" href="preorder-cusine-page.php">Pre-Order Cuisine</a>
            </div>
            <div class="right-button" id="about-us">
                <a class="about-us" href="about-page-logined.php">About Us</a>
            </div>

        </div>

        <div class="right-section">
            <div class="contact-box">

                <div class="location">
                    <img src="pictures/Icons/location.svg">
                    <p><span>Address:</span> 87B, Main Street, Colombo 04</p>
                </div>
                <div class="tel-no">
                    <img src="pictures/Icons/tel-no.svg">
                    <p><span>Phone:</span> +34763445243</p>
                </div>
                <div class="opening-time">
                    <img src="pictures/Icons/time.svg">
                    <div>
                        <p>
                            <span>Opening Hours:</span><br>
                            Monday - Friday <br>
                            09.00 AM - 05.00 PM <br>
                            Saturday - Sunday <br>
                            09.00 AM - 09.00 PM <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="logo-container">
                <img class="cafe-logo" src="pictures/logo/logo-white-bg.png">
            </div>
        </div>
    </footer>

    <script src="javascript/home-page-slideshow.js"></script>
</body>

</html>