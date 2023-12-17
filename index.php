<!DOCTYPE HTML>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Celestial Oasis Hotel - Home</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link href="css/nav.css" rel="stylesheet" />
    <link href="css/index.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c3573e9c36.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="img/factorylogo.png">
</head>

<body>
    <?php include 'menu/nav.php'; ?>


    <div class="container-fluid p-0 mb-0" style="background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(34, 125, 114, 1) 66%)">
        <!-- partone carousel -->
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/hotel1.jpg" alt="companyimg1">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/hotel2.jpg" alt="companyimg2">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/hotel3.jpg" alt="companyimg3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
        <!-- title and introduction -->
        <div class="title">
            <h1 class="text-white my-4 px-5 d-flex justify-content-center text-center"><i>Welcome to Celestial Oasis Hotel</i></h1>
            <p class="text-white my-4 px-5">Escape to Celestial Oasis Hotel, a haven in Malaysia where luxury and tranquility unite. Our meticulously designed rooms and suites offer a blend of comfort and sophistication, ensuring an extraordinary stay. Immerse yourself in celestial experiences, from dining in our exquisite restaurants to indulging in our swimming pool and gym room. Whether for business or leisure, discover a sanctuary where every moment is a journey beyond the ordinary.</p>
        </div>
        <!-- partthree room type -->
        <h1 class="text-white my-4 d-flex justify-content-center"><i>Room Types</i></h1>
        <div class="d-flex flex-wrap justify-content-center mb-5">
            <div class="card m-3">
                <img class="card-img-top" src="img/room1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Standard Room</h5>
                    <p class="card-text">Comfortable queen-size bed, ensuite bathroom, and workspace. Enjoy modern amenities like a flat-screen TV, high-speed Wi-Fi, and a coffee maker. Ideal for business and leisure travelers.</p>
                    <a href="room.php#standardroom" class="btn btn-primary">View more</a>
                </div>
            </div>

            <div class="card m-3">
                <img class="card-img-top" src="img/room2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Deluxe Suite</h5>
                    <p class="card-text">Luxurious king-size bed, separate living area, and a private balcony with stunning views. Pamper yourself in the lavish bathroom, enjoy a minibar, smart TV, and room service.</p>
                    <a href="room.php#deluxeroom" class="btn btn-primary">View more</a>
                </div>
            </div>

            <div class="card m-3">
                <img class="card-img-top" src="img/room3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Executive Penthouse</h5>
                    <p class="card-text">Ultimate luxury with a California king-size bed, spacious living, fully equipped kitchenette, and a private rooftop terrace. Private spa with Jacuzzi and dedicated concierge service.</p>
                    <a href="room.php#executivepenthouse" class="btn btn-primary">View more</a>
                </div>
            </div>
        </div>
        <!-- partfivecontact -->
        <h1 class="text-white my-4 d-flex justify-content-center"><i>Contact Us</i></h1>
        <div class="rowforflip d-flex flex-wrap justify-content-center">
            <div class="flipbox m-3 mb-5 p-0">
                <div class="flipbox-inner text-center">
                    <div class="flipbox-front d-flex  flex-column justify-content-center align-items-center">
                        <img src="img/call.png" alt="" width="80px">
                        <h5>Call Us</h5>
                    </div>
                    <div class="flipbox-back d-flex  flex-column justify-content-center align-items-center">
                        <a href="tel:+60389209682">
                            <h5>Call Us</h5>
                            <p>+60389209682</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flipbox m-3 mb-5 p-0">
                <div class="flipbox-inner text-center">
                    <div class="flipbox-front d-flex  flex-column justify-content-center align-items-center">
                        <img src="img/email.png" alt="" width="80px">
                        <h5>Send Us An Email</h5>
                    </div>
                    <div class="flipbox-back d-flex  flex-column justify-content-center align-items-center">
                        <a href="mailto: celestialoasis@gmail.com" target="_blank">
                            <h5>Send Us An Email</h5>
                            <p>celestialoasis@gmail.com</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flipbox m-3 mb-5 p-0">
                <div class="flipbox-inner text-center">
                    <div class="flipbox-front d-flex  flex-column justify-content-center align-items-center">
                        <img src="img/location.png" alt="" width="80px">
                        <h5>Visit Us</h5>
                    </div>
                    <div class="flipbox-back d-flex  flex-column justify-content-center align-items-center">
                        <a href="https://goo.gl/maps/nFGAqJxbDQwRGauS7" target="_blank">
                            <h5>Visit Us</h5>
                            <p>Malaysia, Hotel Celestial Oasis</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>





    </div>

    <!-- <div class="container-fluid p-0" style="background-color:#CBC3E3">
        <p>gdasgafga</p>
        <p>gdasgafga</p>
        <p>gdasgafga</p>
        <p>gdasgafga</p>
        <p>gdasgafga</p>
        <p class="m-0 testing">gdasgafga</p>
    </div> -->

    <?php include 'menu/footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>