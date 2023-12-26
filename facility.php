<?php
include 'menu/validate_login.php';
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Celestial Oasis Hotel - Amenities</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link href="css/nav.css" rel="stylesheet" />
    <link href="css/facility.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c3573e9c36.js" crossorigin="anonymous"></script>
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    <?php include 'menu/nav.php'; ?>

    <div class="container-fluid p-0 mb-0" style="background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(34, 125, 114, 1) 66%)">
        <!-- partonetitle -->
        <div class="title">
            <h1 class="text-white pt-5 pb-0 px-5 d-flex justify-content-center text-center">Recreational Facilities</h1>
        </div>
        <!-- parttwoamenitiesrow -->
        <!-- 1 -->
        <div class="row my-5" id="rowamenities1">
            <div class="col-lg-6 img-cols p-0">
                <div class="img-col">
                    <img class="img-fluid" src="img/restaurant.jpg">
                </div>
            </div>
            <div class="col-lg-6 content-cols" style="background-color: #222831;">
                <div class="content-col">
                    <h4 class="text-white">Restaurant</h4>
                    <p class="text-white">Embark on a gastronomic journey at our on-site restaurant, where expert chefs blend local flavors and international cuisine. Each dish is a masterpiece, ensuring an exquisite and memorable dining experience.</p>
                    <p class="text-white">Dive into serenity and rejuvenate your senses with the soothing ambiance. Our poolside area also features comfortable loungers, creating an ideal space for both relaxation and socializing.</p>
                </div>
            </div>
        </div>
        <!-- 2 -->
        <div class="row my-5" id="rowamenities2">
            <div class="col-lg-6 content-cols" id="rowamenities2text" style="background-color: #222831;">
                <div class="content-col">
                    <h4 class="text-white">Swimming Pool</h4>
                    <p class="text-white">Immerse yourself in tranquility at our inviting swimming pool. Surrounded by lush landscapes, it's a perfect haven for relaxation or a refreshing swim. Whether soaking up the sun or unwinding by the water's edge, enjoy a blissful escape.</p>
                    <p class="text-white">Dive into serenity and rejuvenate your senses with the soothing ambiance. Our poolside area also features comfortable loungers, creating an ideal space for both relaxation and socializing.</p>
                </div>
            </div>
            <div class="col-lg-6 img-cols p-0" id="rowamenities2img">
                <div class="img-col">
                    <img class="img-fluid" src="img/swimmingpool.jpg">
                </div>
            </div>
        </div>
        <!-- 3 -->
        <div class="row mb-2" id="rowamenities3">
            <div class="col-lg-6 img-cols p-0">
                <div class="img-col">
                    <img class="img-fluid" src="img/gymroom.jpg">
                </div>
            </div>
            <div class="col-lg-6 content-cols" style="background-color: #222831;">
                <div class="content-col">
                    <h4 class="text-white">Gym Room</h4>
                    <p class="text-white">Elevate your fitness journey in our well-equipped gym. State-of-the-art facilities cater to every fitness level, ensuring an energizing workout experience. Stay motivated in this dedicated space designed for your physical well-being.</p>
                    <p class="text-white">Achieve your fitness goals with the support of cutting-edge equipment and a motivating atmosphere. Complimentary fitness classes are also available to add variety to your workout routine.</p>
                </div>
            </div>
        </div>

        <!-- partthreeservicestitle -->
        <div class="title">
            <h1 class="text-white pt-5 pb-4 px-5 d-flex justify-content-center text-center">Other Amenities</h1>
        </div>
        <!-- partfourservicesrow -->
        <div class="row pb-4">
            <div class="col-xl-3 col-sm-6 icons p-3">
                <div class="servicebox">
                    <img class="boximg" src="img/air-conditioner.png" alt="airconditioner">
                    <h4 class="amenitiesTitle">Air Conditioner</h4>
                    <p class="amenitiesDescription">Stay comfortably cool in our air-conditioned rooms. Customizable settings ensure a perfect environment, allowing you to relax and recharge.</p>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 icons p-3">
                <div class="servicebox">
                    <img class="boximg" src="img/bathtub.png" alt="bathtub">
                    <h4>Bathtub</h4>
                    <p class="amenitiesDescription">Indulge in luxury with a soothing bath in our elegant bathtubs. Unwind and rejuvenate as you soak in a tranquil atmosphere.</p>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 icons p-3">
                <div class="servicebox">
                    <img class="boximg" src="img/shower.png" alt="shower">
                    <h4>Shower</h4>
                    <p class="amenitiesDescription">Refresh and revitalize with our invigorating showers. Modern fixtures provide a spa-like experience, offering relaxation and rejuvenation.</p>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 icons p-3">
                <div class="servicebox">
                    <img class="boximg" src="img/television.png" alt="television">
                    <h4>Television</h4>
                    <p class="amenitiesDescription">Enjoy entertainment at your fingertips with our high-quality televisions. A range of channels and streaming services ensure a pleasant stay.</p>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 icons p-3">
                <div class="servicebox">
                    <img class="boximg" src="img/wifi.png" alt="wifi">
                    <h4>Wi-Fi</h4>
                    <p class="amenitiesDescription">Stay connected effortlessly with our high-speed WiFi. Whether for work or leisure, seamless connectivity enhances your overall experience.</p>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 icons p-3">
                <div class="servicebox">
                    <img class="boximg" src="img/phonecall.png" alt="phonecall">
                    <h4>Telephone</h4>
                    <p class="amenitiesDescription">Stay in touch with loved ones or coordinate effortlessly with our in-room telephones. Convenient communication is just a call away.</p>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 icons p-3">
                <div class="servicebox">
                    <img class="boximg" src="img/minibar.png" alt="minibar">
                    <h4>Mini Bar</h4>
                    <p class="amenitiesDescription">Elevate your stay with our well-stocked mini bar. Savor a selection of beverages and snacks in the comfort of your room.</p>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 icons p-3">
                <div class="servicebox">
                    <img class="boximg" src="img/kitchen.png" alt="kitchen">
                    <h4>Kitchen</h4>
                    <p class="amenitiesDescription">Experience the convenience of a fully-equipped kitchen. Ideal for extended stays, it provides the flexibility to prepare your meals in a homely setting.</p>
                </div>
            </div>
        </div>


    </div>


    <?php include 'menu/footer.php'; ?>

    <script src="js/style.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>