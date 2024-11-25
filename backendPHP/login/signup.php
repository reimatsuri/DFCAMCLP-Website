<?php 
    include ("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="script.js">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue:wght@400" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@400" />
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header class="header-container">
            <div class="college-logo-container">
                <img src="assets/logo.png" class="college-logo" alt="College Logo">
                <p class="college-heading-style">Dr. Filemon C. Aguilar Memorial College of Las Piñas</p>
            </div>
            <!-- nav bar tinangal ko-->
            <nav class="navigation-links-container">
                <a href="login.php" class="navigation-link">Login</a>
            </nav>
        </header>

        <div class="signup-form-container1">
            <div class="signup-form-container">
                <p class="hero-title">Sign Up</p>
                <div class="form-container">
                    <form action="register.php" method="POST">
                    <div class="form-group">
                        <p class="inter-text-styler">Enter your name</p>
                        <input type="text" id="fullname" class="input-container" placeholder="Full Name" names="fullname" required/>
                    </div>
                    <div class="form-group">
                        <p class="inter-text-styler">Enter your email</p>
                        <input type="email" id="email" class="input-container" placeholder="Email" name="email" required/>
                    </div>
                    <div class="form-group">
                        <p class="inter-text-styler">Enter your password</p>
                        <input type="password" id="password" class="input-container" placeholder="Password" name="password" required/>
                    </div>
                    <div class="form-group">
                        <p class="inter-text-styler">Confirm your password</p>
                        <input type="password" id="cpassword" class="input-container" placeholder="Confirm Password" name="cpassword" required/>
                    </div>
                        <input type="submit" id="btn" class="sign-up-button" value="Sign Up" name="signUp">
                    </div>
                    </form>
                    
                </div>
            </div>
        </div>
    <script src="script.js"></script>
</body>
</html>

