<?php
include 'menu/validate_login.php';
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Celestial Oasis Hotel - Contact</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link href="css/nav.css" rel="stylesheet" />
    <link href="css/contact.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c3573e9c36.js" crossorigin="anonymous"></script>
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    <?php include 'menu/nav.php'; ?>

    <div class="container-fluid p-0 mb-0" style="background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(34, 125, 114, 1) 66%)">
        <!-- partone -->
        <div class="partonecontactinfo">
            <h1 class="text-white pt-5 pb-4 px-5 d-flex justify-content-center text-center">Contact Us for a Smooth Stay</h1>
            <p class="text-white mb-4 px-5 text-center">Let's get the conversation started.<br>Connect with Us &#8210; Your Gateway to Exceptional Service</p>
        </div>
        <!-- parttwo -->
        <div class="parttwomap">
            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15937.936843093928!2d101.74260142331433!3d2.9630599154712707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdca2d474fa21d%3A0x97031f098fa832d0!2sSeksyen%209%20Bandar%20Baru%20Bangi%2C%2043650%20Bandar%20Baru%20Bangi%2C%20Selangor!5e0!3m2!1sen!2smy!4v1670144849022!5m2!1sen!2smy" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="contactform">
                <h3>Get In Touch</h3>
                <form name="contact_form" action="https://formspree.io/f/myyrgavy" method="POST">
                    <div class="rowemail">
                        <input id="email" type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="rowsubject">
                        <input id="subject" type="text" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="rowmessage">
                        <textarea id="message" name="message" rows="4" placeholder="Message" required=""></textarea>
                    </div>
                    <a href="mytravel.html">
                        <button type="submit" class="buttonsend">SEND</button>
                    </a>
                </form>
            </div>
        </div>
        <!-- partthree -->
        <div class="rowforflip d-flex flex-wrap justify-content-center py-4">
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

    </div>


    <?php include 'menu/footer.php'; ?>

    <script src="js/style.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>