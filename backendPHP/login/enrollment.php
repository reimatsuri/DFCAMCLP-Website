<?php 
    include ("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="enrollment.css">
    <script src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@400" />
    
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

          <div class="navigation-links-container">
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
          </div>
      </div>


        <!-- Background overlay -->
        <div class="background-overlay"></div>

        <!-- Banner -->
        <div class="banner-container">
            <img src="assets/enrollment/enrollment-banner.png" alt="Banner Image" class="banner-image">
        </div>
            <section>
         <!-- New Image above the left-side text -->
          <div class="image-left-underbanner">
            <img src="assets/enrollment/osa-application.jpg" alt="New Left Image">
        </div>

        <div class="left-content-box">
            <p><b>Dr. Filemon C. Aguilar Memorial College of Las Piñas</b>
                is now applications for the upcoming academic year.
                DFCAMCLP offers high-quality degree programs 
                designed to equip students with the essential knowledge
                and skills for today’s competitive world. With a 
                dedicated faculty, modern facilities, and a strong
                commitment to accessible education, we provide an
                inclusive and supportive learning environment.</p>

            <h3><b>APPLICATION PROCEDURE</b></h3> 
                </ul>
        </div>

        <div class="image-carousel-container">
            <div class="carousel">
                <img src="assets/enrollment/application-procedure.jpg" class="carousel-image" alt="Image 1">
                <img src="assets/enrollment/dcat-admission-1.jpg" class="carousel-image" alt="Image 2">
                <img src="assets/enrollment/dcat-admission-2.jpg" class="carousel-image" alt="Image 3">
                <img src="assets/enrollment/dcat-admission-3.jpg" class="carousel-image" alt="Image 4">
            </div>
            <button class="carousel-prev" onclick="prevImage()">&#10094;</button>
            <button class="carousel-next" onclick="nextImage()">&#10095;</button>  
        </div>

        <div class="admission-form-container">
            <h3>Admission Registration</h3>
            <form action="enroll.php" method="POST" id="admissionForm">
                <label for="name">Name:</label>
                <input type="text" id="name" name="fullname" placeholder="Enter your full name" required>
        
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
        
                <label for="contact">Contact Number:</label>
                <input type="tel" id="contact" name="contact" placeholder="Enter your contact number" required>
        
                <label for="course">Undergraduate Course:</label>
                <input type="text" id="course" name="course" placeholder="Enter your desired course (BSBA,BSA,BSIS,BSCPE)" required>
        
                <button type="submit" name="enroll">Submit</button>
            </form>
        </div>
        
        <div class="right-side-image">
            <img src="assets/enrollment/calendar.jpg" alt="Calendar Image">
        </div>
        
    </div>
</body>
</html>
