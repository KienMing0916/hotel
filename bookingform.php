<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Celestial Oasis Hotel - Reservation Form</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link href="css/nav.css" rel="stylesheet" />
    <link href="css/bookingform.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c3573e9c36.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php include 'menu/nav.php'; ?>

    <div class="form-wrapper">
        <img src="img/formimg.png" alt="Hotel Image" style="width: 100%; display: block; margin: 0 auto;">
        <h2 style="text-align: center;">Hotel Reservation Form</h2>
        <p style="text-align: center;">Book your stay with us</p>

        <form action="#" method="post">
            <!-- Personal Information -->
            <div class="form-group two-in-one mt-5">
                <div class="form-group">
                    <label for="lastName">First Name</label>
                    <input type="text" id="firstName" name="lastName" required>
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" name="lastName" required>
                </div>
            </div>
            <!-- Contact Information -->
            <div class="form-group two-in-one">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="text" id="phoneNumber" name="phoneNumber" required>
                </div>
            </div>
            <!-- Address Details -->
            <div class="form-group two-in-one">
                <div class="form-group">
                    <label for="streetAdress">Street Address</label>
                    <input type="text" id="streetAdress" name="streetAdress" required>
                </div>
            </div>
            <div class="form-group two-in-one">
                <div class="form-group">
                    <label for="addressLine2">Address Line 2</label>
                    <input type="text" id="addressLine2" name="addressLine2" required>
                </div>
            </div>
            <div class="form-group two-in-one">
                <div class="form-group">
                    <label for="state">State / City</label>
                    <input type="text" id="state" name="state" required>
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" id="country" name="country" required>
                </div>
            </div>
            <!-- Booking Details -->
            <div class="form-group two-in-one">
                <div class="form-group">
                    <label for="roomType">Room Type</label>
                    <input type="text" id="roomType" name="roomType" required>
                </div>
                <div class="form-group">
                    <label for="guests">Number of Guests</label>
                    <input type="text" id="guests" name="guests" required>
                </div>
            </div>
            <!-- Check out and Check in Date -->
            <div class="form-group two-in-one">
                <div class="form-group">
                    <label for="checkInDate">Check-in Date</label>
                    <input type="date" id="checkInDate" name="checkInDate" required>
                </div>
                <div class="form-group">
                    <label for="checkOutDate">Check-out Date</label>
                    <input type="date" id="checkOutDate" name="checkOutDate" required>
                </div>
            </div>
            <!-- Notes -->
            <div class="form-group">
                <label for="notes">Notes</label>
                <textarea id="notes" name="notes" rows="5"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    <?php include 'menu/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
