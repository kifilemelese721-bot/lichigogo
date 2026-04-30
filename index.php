<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lich Gogo Excellence Boarding Schools - E-Learning</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .link{
            text-decoration: none;
            color: black;
        }
        .btn-primary{
            text-decoration: none;
            margin-left: 40px;
            width: 200px;
            text-align: center;
        }
        .btn-secondary{
            text-decoration: none;
            width: 200px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">
                <img id="slogo" src="LICH_GOGO.PNG" alt="School Logo">
                <div>
                    <h2>Lich Gogo Excellence</h2>
                    <p>Boardings Schools E-Learning</p>
                </div>
            </div>
            <ul id="nav" class="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#Gally">Gally</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a style="color: white;" href="login.php" class="btn-login" id="showLoginBtn">Login</a></li>
            </ul>
            <div onclick="navdisplay()" class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-container">
            <div class="hero-content">
                <h1 style="margin-left: 5px;">Welcome to Lich Gogo Excellence Boarding School Education Platform</h1>
                <p style="margin-left: 5px;">Lich Gogo Excellence Boarding Schools E-Learning Platform provides a comprehensive digital learning environment for students, instructors, and administrators.</p>
                <div class="hero-btns">
                    <a href="register.php" class="btn-primary" id="showRegisterBtn">Register</a>
                    <a href="login.php" class="btn-secondary" id="showLoginHeroBtn">Login</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="congra.jpg" alt="E-Learning">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="about">
        <div class="container">
            <h2 class="section-title">Our Platform Features</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <!-- Icon removed -->
                    </div>
                    <h3>Multi-Role System</h3>
                    <p>Designed for Students, Instructors, Administrators, Registrars, and Department Heads with specific dashboards.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <!-- Icon removed -->
                    </div>
                    <h3>Course Management</h3>
                    <p>Upload materials, create assessments, track progress, and manage course content effectively.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <!-- Icon removed -->
                    </div>
                    <h3>Performance Tracking</h3>
                    <p>Monitor student performance, generate reports, and review instructor effectiveness.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <!-- Icon removed -->
                    </div>
                    <h3>Payment & Enrollment</h3>
                    <p>Integrated payment system, enrollment management, and certificate generation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- User Roles Section -->
    <section class="roles" id="courses">
        <div class="container">
            <h2 class="section-title">Platform User Roles</h2>
            <div class="roles-grid">
                <div class="role-card">
                    <h3>Administrator</h3>
                    <ul>
                        <li>Manage Users & Privileges</li>
                        <li>System Configuration</li>
                        <li>Verify Payments</li>
                        <li>Monitor System Activity</li>
                    </ul>
                </div>
                <div class="role-card">
                    <h3>Instructor</h3>
                    <ul>
                        <li>Upload Course Materials</li>
                        <li>Create & Grade Assessments</li>
                        <li>Announce Students</li>
                        <li>Answer Questions</li>
                    </ul>
                </div>
                <div class="role-card">
                    <h3>Student</h3>
                    <ul>
                        <li>Enroll in Courses</li>
                        <li>Submit Assessments</li>
                        <li>Participate in Discussions</li>
                        <li>View Progress & Results</li>
                    </ul>
                </div>
                <div class="role-card">
                    <h3>Registrar</h3>
                    <ul>
                        <li>Manage Enrollment</li>
                        <li>Generate Certificates</li>
                        <li>Approve Final Grades</li>
                        <li>Generate Payment Receipts</li>
                    </ul>
                </div>
                <div class="role-card">
                    <h3>Department Head</h3>
                    <ul>
                        <li>Create Course Schedules</li>
                        <li>Assign Instructors</li>
                        <li>Manage Course Categories</li>
                        <li>Review Performance</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer of index page -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="logo">
                        <img src="LICH_GOGO.PNG" alt="School Logo">
                        <div>
                            <h3>Lich Gogo Excellence</h3>
                            <p>Boardings Schools</p>
                        </div>
                    </div>
                    <p>Providing quality education through advanced e-learning solutions since 2012.</p>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#courses">Courses</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact Us</h4>
                    <p>Hossana, Ethiopia</p>
                    <p>+251 952 491 979</p>
                    <p>info@lichgogo.edu.et</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Lich Gogo Excellence Boarding Schools. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>