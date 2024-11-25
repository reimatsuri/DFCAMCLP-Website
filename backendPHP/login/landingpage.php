<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DFCAMCLP Landing Page</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue:wght@400&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@400&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Obra+Letra:wght@400&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400&display=swap">
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header class="header-container">
            <div class="college-logo-container">
                <img src="assets/logo.png" class="college-logo" alt="College Logo">
                <p class="college-heading-style">Dr. Filemon C. Aguilar Memorial College of Las Piñas</p>
            </div>
			
            <div id="mySidenav" class="sidenav">
                <button class="closebtn" onclick="closeNav()">&times;</button>
                <a href="landingpage.php">Home</a>
                <div class="dropdown-section">
                    <button class="drop-btn" onclick="toggleDropdown('admissionDropdown')">
                        Admission <i class="fa fa-chevron-down dropdown-icon"></i>
                    </button>
                    <div id="admissionDropdown" class="drop-container">
                        <a href="admission.html">Admission</a>
                        <a href="undergrad.html">Undergraduate Programs</a>
                        <a href="enrollment.php">Enrollment</a>
                    </div>
                </div>
                <div class="dropdown-section">
                    <button class="drop-btn" onclick="toggleDropdown('studentsDropdown')">
                        Students <i class="fa fa-chevron-down dropdown-icon"></i>
                    </button>
                    <div id="studentsDropdown" class="drop-container">
                        <a href="org.html">Organizations</a>
                    </div>
                </div>
                <div class="dropdown-section">
                    <button class="drop-btn" onclick="toggleDropdown('aboutDropdown')">
                        About <i class="fa fa-chevron-down dropdown-icon"></i>
                    </button>
                    <div id="aboutDropdown" class="drop-container">
                        <a href="history.html">History</a>
                        <a href="mvv.html">Mission, Vision, & Values</a>
                        <a href="hymn.html">Hymns</a>
                        <a href="executive.html">Executive Officers & Academic Managers</a>
                    </div>
                </div>
                <a href="logout.php">Logout</a>
            </div>
            
            <!-- Burger Menu -->
            <button class="burger-menu" onclick="openNav()" aria-label="Toggle navigation">
                ☰
            </button>
            
            <nav class="navigation-links-container">
                <a href="landingpage.php" class="navigation-link">Home</a>
                <div class="navigation-link">
                    Admission
                    <div class="dropdown">
                        <a href="admission.html">Admission</a>
                        <a href="undergrad.html">Undergraduate Programs</a>
                        <a href="enrollment.php">Enrollment</a>
                    </div>
                </div>
                <div class="navigation-link">
                    Students
                    <div class="dropdown">
                        <a href="org.html">Organizations</a>
                    </div>
                </div>
                <div class="navigation-link">
                    About
                    <div class="dropdown">
                        <a href="history.html">History</a>
                        <a href="mvv.html">Mission, Vision, & Values</a>
                        <a href="hymn.html">Hymns</a>
                        <a href="executive.html">Executive Officers & Academic Managers</a>
                    </div>
                </div>
                <a href="logout.php" class="navigation-link">Logout</a>
            </nav>
        </header>

        <!-- Banner Section -->
        <section class="banner-container">
            <img src="assets/banners/dfcam-banner.png" alt="Banner Image" class="banner-image">
        </section>

        <!-- Title and Description Section -->
        <section class="content-section">
            <img src="assets/images/landing-page/landing-image.png" alt="Description Image" class="left-image">
            <div class="content">
                <h2 class="content-title">An Institution for Accessible and Quality Education</h2>
                <p class="content-description">
                    <b>Dr. Filemon C. Aguilar Memorial College of Las Piñas</b> stands as a beacon of academic excellence, offering accessible and affordable education to the community. The college is dedicated to providing high-quality programs that empower students with the knowledge and skills needed for personal and professional success - continuously shaping the nation's future leaders and professionals.
                    <br><br>
                    DFCAMCLP is known for its rigorous academic programs across various disciplines, fostering a learning environment that emphasizes critical thinking, innovation, and ethical responsibility. Its faculty consists of experienced educators and professionals who are committed to equipping students with both theoretical knowledge and practical skills.
                </p>
            </div>
        </section>

        <!-- News and Events Section -->
        <section class="new-banner-container">
            <div class="new-banner-image-container">
                <img src="assets/banners/landing-page-banner.png" alt="College News Banner Image" class="new-banner-image">
            </div>
            
            <div class="new-banner-text">College and News Events</div>
            <div class="events-images-container">
                <img src="assets/images/landing-page/news-image-1.jpg" alt="Events Highlight Image 1" class="events-image">
                <img src="assets/images/landing-page/news-image-2.jpg" alt="Events Highlight Image 2" class="events-image">
                <img src="assets/images/landing-page/news-image-3.jpg" alt="Events Highlight Image 3" class="events-image">
            </div>
            
            <div class="events-container">
                <div class="event-box">Gender and Development Seminar</div>
                <div class="event-box">Free Dental Check-Up at DFCAMCLP</div>
                <div class="event-box">The Oathtaking Ceremony of the Student Council</div>
            </div>
            
            <div class="description-container">
                <div class="description-box">
                    <b>- OCTOBER 19, 2024<br><br></b>
                    The <b>Gender and Development Seminar</b> at DFCAMCLP brought our 1st-year students valuable insights on gender sensitivity and awareness in the classroom.
                </div>
                <div class="description-box">
                    <b>- OCTOBER 8, 2024<br><br></b>
                    The <b>Free Dental Check-up Event</b> brought community members essential oral health services, emphasizing the importance of preventive care.
                </div>
                <div class="description-box">
                    <b>- OCTOBER 19, 2024<br><br></b>
                    The <b>Oathtaking Ceremony of the Student Council Federation</b> was initiated, with newly elected student leaders pledging their responsibilities.
                </div>
            </div>
        </section>

        <!-- Background Overlay -->
        <div class="background-overlay"></div>
    </div>
</body>
</html>