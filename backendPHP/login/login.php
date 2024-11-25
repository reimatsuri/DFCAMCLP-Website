<?php 
    include ("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="login.css">
    <script src="script.js"></script>
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
        </header>

        <div class="welcome-section">
            <div class="auth-form-container">
                <p class="hero-heading">Welcome</p>
                <form action="signin.php" method="POST">
                    <div class="form-container">
                        <div class="form-group">
                            <p class="inter-text-styler">Email</p>
                            <input type="email" id="email" class="input-container" placeholder="Email" name="email"/>
                        </div>
                        <div class="form-group">
                            <p class="inter-text-styler">Password</p>
                            <input type="password" id="password" class="input-container" placeholder="Password" name="password"/>
                        </div>
                        <input type="submit" id="login" class="login-button" value="Login" name="login">
                    </div>
                </form>
                <a href="signup.php" class="sign-up-link">Don't have an account? Sign Up</a>
            </div>
        </div>
    </div>
</body>
</html>
