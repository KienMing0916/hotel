<?php
include 'menu/validate_login.php';
?>

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
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    <?php include 'menu/nav.php'; ?>    

    <div class="container-fluid p-0 mb-0" style="background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(34, 125, 114, 1) 66%)">
        <!-- partone carousel -->
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/hotel1.jpg" alt="hotelImage">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/hotel2.jpg" alt="hotelImage">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/hotel3.jpg" alt="hotelImage">
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
            <h1 class="text-white pt-5 pb-0 px-5 d-flex justify-content-center text-center">Welcome to Celestial Oasis Hotel</h1>
            <p class="text-white my-4 pb-4 px-5" id="subtitle">Escape to Celestial Oasis Hotel, a haven in Malaysia where luxury and tranquility unite. Our meticulously designed rooms and suites offer a blend of comfort and sophistication, ensuring an extraordinary stay. Immerse yourself in celestial experiences, from dining in our exquisite restaurants to indulging in our swimming pool and gym room. Whether for business or leisure, discover a sanctuary where every moment is a journey beyond the ordinary.</p>
        </div>
        <!-- partworoomtype -->
        <h1 class="text-white my-5 d-flex justify-content-center">Room Types</h1>
        <div class="d-flex flex-wrap justify-content-center mb-5">
            <div class="card m-3">
                <img class="card-img-top" src="img/standardroom2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Standard Room</h5>
                    <p class="card-text">Comfortable queen-size bed, ensuite bathroom, and workspace. Enjoy modern amenities like a flat-screen TV, high-speed Wi-Fi, and a coffee maker. Ideal for business and leisure travelers.</p>
                    <a href="room.php#standardroom" class="btn btn-primary">View more</a>
                </div>
            </div>

            <div class="card m-3">
                <img class="card-img-top" src="img/deluxesuite1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Deluxe Suite</h5>
                    <p class="card-text">Luxurious comfortable king-size bed, separate living area, and a private balcony with stunning views. Pamper yourself in the lavish bathroom, enjoy a minibar, smart TV, and room service.</p>
                    <a href="room.php#deluxeroom" class="btn btn-primary">View more</a>
                </div>
            </div>

            <div class="card m-3">
                <img class="card-img-top" src="img/executivehouse1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Executive Penthouse</h5>
                    <p class="card-text">Ultimate luxury with a California king-size bed, spacious living, fully equipped kitchenette, and a private rooftop terrace. Private spa with Jacuzzi and dedicated concierge service.</p>
                    <a href="room.php#executivepenthouse" class="btn btn-primary">View more</a>
                </div>
            </div>
        </div>
        <!-- partthreeamenities -->
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container" id="amenitiesdiv">
                <div class="row g-6 align-items-center">
                    <div class="amenitiestitle px-3">
                        <h6 class="section-title text-start text-white text-uppercase">About Us</h6>
                        <h1 class="m-0 text-white">Explore Our <span class="text-white text-uppercase">Amenities</span></h1>
                        <p id="amenitiesdes" class="my-3 text-white">Experience luxury and comfort with our hotel facilities - treat yourself to fine dining, relax in the gym and enjoy unparalleled service.</p>
                    </div>
                    <div class="col-xl-6 px-3" id="amenities1">
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn text-white" id="box1" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1"><span data-toggle="counter-up">100</span>+</h2>
                                        <p class="mb-0">Rooms</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn text-white" id="box2" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1"><span data-toggle="counter-up">200</span>+</h2>
                                        <p class="mb-0">Staffs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn text-white" id="box3" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-gear fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1"><span data-toggle="counter-up">10</span>+</h2>
                                        <p class="mb-0">Amenities</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="facility.php">Explore More</a>
                    </div>
                    <div class="col-xl-6" id="amenities2">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/hotel1.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/swimmingpool.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/restaurant.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/gymroom.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- partfourtestimonial -->
        <!-- Testimonial Start -->
        <div class="container-fluid-xxl testimonial mt-2 mb-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="owl-carousel testimonial-carousel py-5">
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>Really impressed by the luxurious ambiance, attentive staff, and top-notch services. A memorable stay at your hotel!!!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Selina</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>Outstanding facilities, from exquisite dining to impeccable rooms. Your commitment to quality shines through. Highly recommend!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Kevin</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>Exceptional service and a truly welcoming atmosphere. Our stay surpassed expectations. Will return for sure!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Marcus</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>Kudos to your hotel for the outstanding quality and excellent facilities. A delightful experience that exceeded our expectations!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-4.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Janella</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- partfivecontact -->
        <h1 class="text-white my-4 d-flex justify-content-center">Contact Us</h1>
        <div class="rowforflip d-flex flex-wrap justify-content-center pb-4">
            <div class="flipbox m-3 p-0">
                <div class="flipbox-inner text-center">
                    <div class="flipbox-front d-flex  flex-column justify-content-center align-items-center">
                        <img src="img/call.png" alt="" width="50px">
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

            <div class="flipbox m-3 p-0">
                <div class="flipbox-inner text-center">
                    <div class="flipbox-front d-flex  flex-column justify-content-center align-items-center">
                        <img src="img/email.png" alt="" width="50px">
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

            <div class="flipbox m-3 p-0">
                <div class="flipbox-inner text-center">
                    <div class="flipbox-front d-flex  flex-column justify-content-center align-items-center">
                        <img src="img/location.png" alt="" width="50px">
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
    <!-- part six Newsletter -->
    <div class="container-fluid newsletter p-5 m-0" data-wow-delay="0.1s" style="background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(34, 125, 114, 1) 66%)">
        <div class="row justify-content-center wow fadeIn">
            <div class="col-lg-10 border rounded p-1">
                <div class="border rounded text-center p-1">
                    <div class="bg-white rounded text-center p-5">
                        <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span></h4>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control w-100 py-3 px-4" type="text" placeholder="Email">
                            <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2 disabled">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
    </div>

    <?php include 'menu/footer.php'; ?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- js template -->
    <script src="js/style.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>