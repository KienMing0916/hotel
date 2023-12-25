<!DOCTYPE HTML>
<html>

<head>
    <title>Celestial Oasis Hotel - Login or sign up</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link href="css/login.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>

    <?php
    function validateLogin()
    {

        if ($_POST) {
            include 'config/database.php';

            $useraccountinput = $_POST['useraccount'];
            $userpasswordinput = $_POST['password'];
            $errorMessage = array();

            if (empty($useraccountinput)) {
                $errorMessage[] = "Please enter your username / email.";
            }

            if (empty($userpasswordinput)) {
                $errorMessage[] = "Please enter your password.";
            }

            if (!empty($errorMessage)) {
                echo "<div class='alert alert-danger m-3'>";
                foreach ($errorMessage as $displayErrorMessage) {
                    echo $displayErrorMessage . "<br>";
                }
                echo "</div>";
            } else {
                try {
                    $query = "SELECT Customer_ID, password, status FROM customers WHERE username=:useraccount OR email=:useraccount";
                    $stmt = $con->prepare($query);
                    $stmt->bindParam(':useraccount', $useraccountinput);
                    $stmt->execute();
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);

                    if (!$row) {
                        echo "<div class='alert alert-danger m-3'>Username or email not found.</div>";
                        return;
                    }

                    if (!password_verify($userpasswordinput, $row['password'])) {
                        echo "<div class='alert alert-danger m-3'>Password incorrect.</div>";
                        return;
                    }

                    if ($row['status'] !== 'Active') {
                        echo "<div class='alert alert-danger m-3'>" . $row['status'] . " account.</div>";
                        return;
                    }

                    $_SESSION['Customer_ID'] = $row['Customer_ID'];
                    header("Location: home.php");
                    exit();
                } catch (PDOException $exception) {
                    echo "<div class='alert alert-danger m-3'>ERROR: " . $exception->getMessage() . "</div>";
                }
            }
        }
    }
    validateLogin();
    ?>




















    <div class="wrapper">
        <div class="title-text">
            <div class="title login">Login</div>
            <div class="title signup">Signup</div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Sign up</label>
                <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
                <form method="POST" action="loginsignup.php" class="login">
                    <div class="field">
                        <input type="text" placeholder="Email Address" id="useraccount" name="useraccount" value="<?php echo isset($_POST['useraccount']) ? $_POST['useraccount'] : ''; ?>" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" id="password" name="password" required>
                    </div>
                    <div class="pass-link"><a href="#">Forgot password?</a></div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Login">
                    </div>
                    <div class="signup-link">Not a member? <a href="">Sign up now</a></div>
                </form>

                <form action="#" class="signup">
                    <div class="field">
                        <input type="text" placeholder="Email Address" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Confirm password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Sign up">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="js/style.js"></script>
<script src="js/login.js"></script>

</html>