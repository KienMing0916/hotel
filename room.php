<!DOCTYPE HTML>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Celestial Oasis Hotel - Room</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link href="css/nav.css" rel="stylesheet" />
    <link href="css/room.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c3573e9c36.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'menu/nav.php'; ?>

    <div class="container-fluid p-0 mb-0" style="background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(34, 125, 114, 1) 66%)">

        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Rooms</h1>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Room Start -->
        <div class="container-xxl pb-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-uppercase">Our Rooms</h6>
                    <h1 class="mb-5 text-black">Explore Our <span class="text-white text-uppercase">Rooms</span></h1>
                </div>

                <div class="row g-4 px-3">
                    <div class="col-xl-4 col-md-6 wow fadeInUp px-4" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/standardroom1.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">RM 269 /Night</small>
                            </div>
                            <div class="p-4 mt-2" style="background-color: white;">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Standard Room</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>1 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                                </div>
                                <p class="text-body mb-3">Enjoy a cozy and budget-friendly retreat in our standard rooms, providing essential amenities for a comfortable and memorable stay experience.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="#" data-toggle="modal" data-target="#myStandardRoomModal">View Details</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="bookingform.php">Book Now</a>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="myStandardRoomModal" tabindex="-1" role="dialog" aria-labelledby="standardRoomModel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="standardRoomModel">Standard Room</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- Modal Body -->
                                            <div class="modal-body">
                                                <!-- Carousel -->
                                                <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="img/standardroom1.jpg" class="d-block w-100" alt="Image 1">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="img/standardroom2.jpg" class="d-block w-100" alt="Image 2">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="img/standardroom3.jpg" class="d-block w-100" alt="Image 3">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#myCarousel1" role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#myCarousel1" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                                <!-- Text at the Bottom -->
                                                <div class="mt-3">
                                                    <p>A comfortable and budget-friendly option for both business and leisure travelers.</p>
                                                    <h5><b>Basic facilities:</b></h5>
                                                    <ul>
                                                        <li>Queen-sized bed</li>
                                                        <li>Private bathroom with shower</li>
                                                        <li>Work desk</li>
                                                        <li>Flat-screen TV with cable channels</li>
                                                        <li>Air conditioning</li>
                                                        <li>In-room safe</li>
                                                    </ul>
                                                    <h5><b>Amenities:</b></h5>
                                                    <ul>
                                                        <li>Complimentary Wi-Fi</li>
                                                        <li>Daily housekeeping</li>
                                                        <li>Coffee/tea maker</li>
                                                        <li>Hairdryer</li>
                                                        <li>Iron and ironing board</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Modal Footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 wow fadeInUp px-4" data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/deluxesuite1.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">RM 389 /Night</small>
                            </div>
                            <div class="p-4 mt-2" style="background-color: white;">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Deluxe Suite</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>2 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                                </div>
                                <p class="text-body mb-3">Experience luxury and spacious elegance in our deluxe suites, featuring modern furnishings and exquisite design for heightened comfort and style.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="#" data-toggle="modal" data-target="#myDeluxeSuiteModal">View Details</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="bookingform.php">Book Now</a>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="myDeluxeSuiteModal" tabindex="-1" role="dialog" aria-labelledby="deluxeSuiteModel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deluxeSuiteModel">Deluxe Suite</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- Modal Body -->
                                            <div class="modal-body">
                                                <!-- Carousel -->
                                                <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="img/deluxesuite1.jpg" class="d-block w-100" alt="Image 1">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="img/deluxesuite2.jpg" class="d-block w-100" alt="Image 2">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="img/deluxesuite3.jpg" class="d-block w-100" alt="Image 3">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#myCarousel2" role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#myCarousel2" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                                <!-- Text at the Bottom -->
                                                <div class="mt-3">
                                                    <p>A spacious and elegant suite designed for a more luxurious stay.</p>
                                                    <h5><b>Basic facilities:</b></h5>
                                                    <ul>
                                                        <li>King-sized bed</li>
                                                        <li>Separate living area</li>
                                                        <li>Private bathroom with shower</li>
                                                        <li>Flat-screen TV with cable channels</li>
                                                        <li>Air conditioning</li>
                                                        <li>In-room safe</li>
                                                        <li>Work desk</li>
                                                        <li>Robes and slippers</li>
                                                        <li>Balcony with city view</li>
                                                    </ul>
                                                    <h5><b>Amenities:</b></h5>
                                                    <ul>
                                                        <li>High-speed Wi-Fi</li>
                                                        <li>Daily turndown service</li>
                                                        <li>Premium bath amenities</li>
                                                        <li>Nespresso coffee machine</li>
                                                        <li>24-hour room service</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Modal Footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 wow fadeInUp px-4" data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/executivehouse1.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">RM 599 /Night</small>
                            </div>
                            <div class="p-4 mt-2" style="background-color: white;">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Execultive Penthouse</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small><i class="fa fa-cutlery text-primary me-2"></i>1 Kitchen</small>
                                </div>
                                <p class="text-body mb-3">Indulge in opulence with panoramic views in our executive penthouse, offering an exclusive and lavish retreat for the discerning traveler.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="#" data-toggle="modal" data-target="#myExecutivepenthouseModal">View Details</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="bookingform.php">Book Now</a>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="myExecutivepenthouseModal" tabindex="-1" role="dialog" aria-labelledby="execultivePenthouseModel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="execultivePenthouseModel">Execultive Penthouse</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- Modal Body -->
                                            <div class="modal-body">
                                                <!-- Carousel -->
                                                <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="img/executivehouse1.jpg" class="d-block w-100" alt="Image 1">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="img/executivehouse2.jpg" class="d-block w-100" alt="Image 2">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="img/executivehouse3.jpg" class="d-block w-100" alt="Image 3">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#myCarousel3" role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#myCarousel3" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                                <!-- Text at the Bottom -->
                                                <div class="mt-3">
                                                    <p>The epitome of luxury, offering a premium and exclusive experience.</p>
                                                    <h5><b>Basic facilities:</b></h5>
                                                    <ul>
                                                        <li>Master bedroom with a king-sized bed</li>
                                                        <li>Spacious living and dining area</li>
                                                        <li>En-suite bathroom with bathtub</li>
                                                        <li>Private kitchenette</li>
                                                        <li>Jacuzzi tub with panoramic views</li>
                                                        <li>Flat-screen TV with cable channels</li>
                                                        <li>Personalized concierge service</li>
                                                        <li>Private elevator access</li>
                                                        <li>Air conditioning</li>
                                                        <li>Robes and slippers</li>
                                                        <li>Balcony with city view</li>
                                                    </ul>
                                                    <h5><b>Amenities:</b></h5>
                                                    <ul>
                                                        <li>Ultra-fast Wi-Fi</li>
                                                        <li>Exclusive access to executive lounge</li>
                                                        <li>Butler service</li>
                                                        <li>Complimentary airport transfers</li>
                                                        <li>In-room entertainment system with surround sound</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Modal Footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Room End -->
    </div>


    <?php include 'menu/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>