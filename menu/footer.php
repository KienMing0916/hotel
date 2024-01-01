<!DOCTYPE html>

<footer class="text-center text-lg-start text-white" style="background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(34, 125, 114, 1) 66%)">
    <!-- section social media -->
    <section class="d-flex justify-content-between p-4" style="background-color: #092635;">
        <div class="me-5">
            <span>Get connected with us on social medias:</span>
        </div>
        <div>
            <a href="https://www.facebook.com/" target="_blank" class="text-white me-4"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/" target="_blank" class="text-white me-4"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/i/flow/login" target="_blank" class="text-white me-4"><i class="fab fa-twitter"></i></a>
            <a href="mailto: celestialoasis@gmail.com" target="_blank" class="text-white me-4"><i class="fas fa-envelope"></i></a>
        </div>
    </section>
    <!-- Section links  -->
    <section>
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold">Hotel Celestial Hotel</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px"/>
                    <p>At Celestial Oasis Hotel, we strive to turn moments into memories, ensuring your stay is nothing short of stellar. Just like our slogan "Sky Oasis Hotel: every stay is a paradise escape".</p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold">Details</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px"/>
                    <p><a href="index.php" class="text-white nav-link">Home</a></p>
                    <p><a href="room.php" class="text-white nav-link">Rooms</a></p>
                    <p><a href="facility.php" class="text-white nav-link">Amenities</a></p>
                    <p><a href="bookingform.php" class="text-white nav-link">Book Now</a></p>
                    <p><a href="contact.php" class="text-white nav-link">Contact</a></p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold">Account</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px"/>
                    <!-- <p><a href="loginsignup.php" class="text-white nav-link">Login</a></p> -->
                    <?php
                        // Check if the user is logged in
                        if (empty($_SESSION['User_ID'])) {
                            echo '<p><a href="loginsignup.php" class="text-white nav-link">Login</a></p>';
                        }else{
                            echo '<p><a href="?logout=true" class="text-white nav-link">Logout</a></p>';
                        }
                    ?>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold">Contact</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px"/>
                    <p><i class="fas fa-home mr-3"></i> Malaysia, Hotel Celestial Oasis</p>
                    <p><i class="fas fa-envelope mr-3"></i> celestialoasis@gmail.com</p>
                    <p><i class="fas fa-phone mr-3"></i> + 0389209682</p>
                </div>
            </div>
        </div>
    </section>

    <div class="text-center p-3">© 2023 Copyright Hotel Celestial Oasis</div>
</footer>