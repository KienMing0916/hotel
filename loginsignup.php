<?php
include 'menu/validate_login.php';
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Celestial Oasis Hotel - Login or sign up</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link href="css/login.css" rel="stylesheet" />
    <link href="css/nav.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c3573e9c36.js" crossorigin="anonymous"></script>

</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>

    <?php
    function validateLogin()
    {
        //for those who try to go to booking page without login
        // $action = isset($_GET['action']) ? $_GET['action'] : "";
        // if ($action == 'warning') {
        //     echo "<div class='alert alert-danger m-4 mb-0'>You cannot book a hotel room without logging in to your account.</div>";
        //     return;
        // }

        if (isset($_POST['login'])) {
            include 'config/database.php';

            $useraccountinput = $_POST['useraccount'];
            $userpasswordinput = $_POST['password'];
            $errorMessage = array();

            if (empty($useraccountinput)) {
                $errorMessage[] = "Please enter your email.";
            } else {
                if (!filter_var($useraccountinput, FILTER_VALIDATE_EMAIL)) {
                    $errorMessage[] = "Invalid email format.";
                }
            }

            if (empty($userpasswordinput)) {
                $errorMessage[] = "Please enter your password.";
            }

            if (!empty($errorMessage)) {
                echo "<div class='alert alert-danger m-4 mb-0'>";
                foreach ($errorMessage as $displayErrorMessage) {
                    echo $displayErrorMessage . "<br>";
                }
                echo "</div>";
            } else {
                try {
                    $query = "SELECT User_ID, Email, Password, Role FROM users WHERE Email=:useraccount";
                    $stmt = $con->prepare($query);
                    $stmt->bindParam(':useraccount', $useraccountinput);
                    $stmt->execute();
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);

                    if (!$row) {
                        echo "<div class='alert alert-danger m-4 mb-0'>Email not found.</div>";
                        return;
                    }

                    if (!password_verify($userpasswordinput, $row['Password'])) {
                        echo "<div class='alert alert-danger m-4 mb-0'>Password incorrect.</div>";
                        return;
                    }

                    $_SESSION['User_ID'] = $row['User_ID'];
                    $_SESSION['role'] = $row['Role'];

                    if ($_SESSION['role'] === "user") {
                        header("Location: index.php");
                        exit();
                    } else {
                        header("Location: booking_read.php");
                        exit();
                    }
                } catch (PDOException $exception) {
                    echo "<div class='alert alert-danger m-4 mb-0'>ERROR: " . $exception->getMessage() . "</div>";
                }
            }
        }

        if (isset($_POST['signup'])) {
            include 'config/database.php';
            try {
                $query = "INSERT INTO users SET Email=:email, Password=:password, Role=:role";
                // prepare query for execution
                $stmt = $con->prepare($query);
                $email = $_POST['email'];
                $password = $_POST['password'];
                $confirm_password = $_POST['confirm_password'];
                //The default role for a user is user, not admin
                $role = "user";

                $errorMessage = array();
                $passwordPattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/";

                if (empty($email)) {
                    $errorMessage[] = "Email field is empty.";
                } else {
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $errorMessage[] = "Invalid email format.";
                    }
                }

                if (empty($password)) {
                    $errorMessage[] = "Password field is empty.";
                } else {
                    if (!preg_match($passwordPattern, $password)) {
                        $errorMessage[] = "Password must be at least 6 characters long and contain at least one uppercase letter, one lowercase letter, and one number. No special symbols allowed.";
                    }
                }
                if (empty($confirm_password)) {
                    $errorMessage[] = "Confirm password field is empty.";
                }
                if (!empty($password) && !empty($confirm_password)) {
                    if ($password !== $confirm_password) {
                        $errorMessage[] = "Password and confirm password do not match.";
                    }
                }

                if (!empty($errorMessage)) {
                    echo "<div class='alert alert-danger m-4 mb-0'>";
                    foreach ($errorMessage as $displayErrorMessage) {
                        echo $displayErrorMessage . "<br>";
                    }
                    echo "</div>";
                } else {
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':password', $hashedPassword);
                    $stmt->bindParam(':role', $role);

                    // Execute the query
                    if ($stmt->execute()) {
                        echo "<div class='alert alert-success m-4 mb-0'>Register successfully. You may login using registered account now.</div>";
                        $_POST = array();
                        header("Location: loginsignup.php");
                        exit();
                    } else {
                        echo "<div class='alert alert-danger m-4 mb-0'>Something went wrong. Unable to register.</div>";
                    }
                }
            } catch (PDOException $exception) {
                if ($exception->getCode() == 23000) {
                    if (strpos($exception->getMessage(), 'Email') != false) {
                        echo "<div class='alert alert-danger m-4 mb-0'>Email already taken. Please enter a new email.</div>";
                    }
                } else {
                    echo "<div class='alert alert-danger m-4 mb-0'>ERROR: " . $exception->getMessage() . "</div>";
                    //die('ERROR: ' . $exception->getMessage());
                }
            }
        }
    }
    validateLogin();
    ?>

    <div class="container-fluid mt-0 p-0">
        <?php include 'menu/nav.php'; ?>

        <div class="wrapper mt-4">
            <div class="scroll-container">
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
                                <input type="submit" name="login" value="Login">
                            </div>
                            <div class="signup-link">Not a member? <a href="">Sign up now</a></div>
                        </form>

                        <form method="POST" action="loginsignup.php" class="signup">
                            <div class="field">
                                <input type="text" placeholder="Email Address" name="email" id="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" required>
                            </div>
                            <div class="field">
                                <input type="password" placeholder="Password" name="password" id="password" required>
                            </div>
                            <div class="field">
                                <input type="password" placeholder="Confirm password" name="confirm_password" id="confirm_password" required>
                            </div>
                            <div class="field btn">
                                <div class="btn-layer"></div>
                                <input type="submit" name="signup" value="Sign up">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'menu/footer.php'; ?>

</body>
<script src="js/style.js"></script>
<script src="js/login.js"></script>
<script src="js/style.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>