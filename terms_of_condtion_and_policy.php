<!DOCTYPE html>
<html>
<head>
    <title>Liche Gogo Boarding High School</title>
    <style>
        /* Basic styling - easy to understand */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        
        /* Header section */
        header {
            background-color: #2c5282;
            color: white;
            padding: 20px;
            text-align: center;
        }
        
        /* Navigation menu */
        nav {
            background-color: #1a365d;
            padding: 10px;
        }
        
        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            display: inline-block;
        }
        
        nav a:hover {
            background-color: #4a7bb8;
        }
        
        /* Main content area */
        .container {
            width: 90%;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        
        /* Sections */
        section {
            margin-bottom: 30px;
            padding: 15px;
            border-left: 5px solid #2c5282;
            background-color: #f9f9f9;
        }
        
        /* Footer */
        footer {
            background-color: #1a365d;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
        }
        
        /* Images */
        .school-image {
            width: 100%;
            max-width: 600px;
            height: auto;
            display: block;
            margin: 10px auto;
            border-radius: 5px;
        }
        
        /* Tables */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        
        th {
            background-color: #2c5282;
            color: white;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        /* Buttons */
        .button {
            background-color: #2c5282;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        
        .button:hover {
            background-color: #1a365d;
        }
    </style>
</head>
<body>
    <!-- Header with school name -->
    <header>
        <h1>LICHE GOGO BOARDING HIGH SCHOOL</h1>
        <p>Excellence in Education Since 2012</p>
    </header>
    
    <!-- Navigation Menu -->
    <nav>
        <a href="index.php">Home</a>
        <a href="index.php">About Us</a>
        <a href="login.php">Academics</a>
        <a href="register.php">Admissions</a>
        <a href="index.php">Contact</a>
    </nav>
    
    <!-- Main Content Container -->
    <div class="container">
        <!-- Home Section -->
        <section id="home">
            <h2>Welcome to Our School</h2>
            <p>Liche Gogo Boarding High School is a premier educational institution dedicated to nurturing young minds and building future leaders.</p>
            
            <!-- School Image Placeholder -->
            <div style="text-align: center; margin: 20px 0;">
                <div style="width: 100%; height: 300px; background-color: #e0e0e0; border-radius: 5px; display: flex; align-items: center; justify-content: center;">
                    <img style="height: 290px; " src="congra2.jpg">
                </div>
                <p><em>Our beautiful campus</em></p>
            </div>
            
            <h3>Quick Links</h3>
            <a href="#academics" class="button">Academic Programs</a>
            <a href="#admissions" class="button">Apply Now</a>
            <a href="#contact" class="button">Contact Us</a>
        </section>
        
        <!-- About Us Section -->
        <section id="about">
            <h2>About Our School</h2>
            <p>Founded in 2012, Liche Gogo Boarding High School has been providing quality education for over 6 years. We believe in holistic development of our students.</p>
            
            <h3>Our Mission</h3>
            <p>To provide excellent education that develops students academically, socially, and morally.</p>
            
            <h3>Our Vision</h3>
            <p>To be a leading educational institution that produces responsible global citizens.</p>
            
            <h3>School Facilities</h3>
            <ul>
                <li>Modern classrooms with projectors</li>
                <li>Science and computer laboratories</li>
                <li>Library with over 10,00 books</li>
                <li>Sports grounds and gymnasium</li>
                <li>Boarding facilities with modern amenities</li>
            </ul>
        </section>
        
        <!-- Academics Section -->
        <section id="academics">
            <h2>Academic Programs</h2>
            <p>We offer a comprehensive curriculum that prepares students for university and beyond.</p>
            
            <h3>Subjects Offered</h3>
            <table>
                <tr>
                    <th>Grade Level</th>
                    <th>Core Subjects</th>
                    <th>Elective Subjects</th>
                </tr>
                <tr>
                    <td>Grade 9-10</td>
                    <td>English, Mathematics, Science, Social Studies</td>
                    <td>Computer Studies, Art, Music, Agriculture</td>
                </tr>
                <tr>
                    <td>Grade 11-12</td>
                    <td>English, Mathematics</td>
                    <td>Physics, Chemistry, Biology, Business, History, Geography</td>
                </tr>
            </table>
            
            <h3>Academic Calendar 2024</h3>
            <table>
                <tr>
                    <th>Term</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Events</th>
                </tr>
                <tr>
                    <td>Term 1</td>
                    <td>January 15</td>
                    <td>April 5</td>
                    <td>Opening Day, Sports Day</td>
                </tr>
                <tr>
                    <td>Term 2</td>
                    <td>May 6</td>
                    <td>August 9</td>
                    <td>Mid-term Exams, Cultural Day</td>
                </tr>
                <tr>
                    <td>Term 3</td>
                    <td>September 2</td>
                    <td>November 29</td>
                    <td>Final Exams, Graduation</td>
                </tr>
            </table>
        </section>
        
        <!-- Admissions Section -->
        <section id="admissions">
            <h2>Admissions</h2>
            <p>We are accepting applications for the 2025 academic year. Limited spaces available!</p>
            
            <h3>Admission Requirements</h3>
            <ol>
                <li>Completed application form</li>
                <li>Previous school report cards</li>
                <li>Birth certificate</li>
                <li>Two passport photos</li>
                <li>Medical report</li>
            </ol>
            
            <h3>Application Process</h3>
            <p>1. Download and fill the application form</p>
            <p>2. Submit with required documents</p>
            <p>3. Attend interview (if shortlisted)</p>
            <p>4. Receive admission letter</p>
            <p>5. Pay fees and join school</p>
            
            <a href="#contact" class="button">Download Application Form</a>
        </section>
        
        <!-- Contact Section -->
        <section id="contact">
            <h2>Contact Us</h2>
            <p>We'd love to hear from you. Reach out through any of these channels:</p>
            
            <h3>School Address</h3>
            <p>Liche Gogo Boarding High School</p>
            <p>P.O. Box 12345</p>
            <p>Mountain View, Country</p>
            
            <h3>Contact Information</h3>
            <p><strong>Phone:</strong> +251 52 49 19 79</p>
            <p><strong>Email:</strong> info@lichegogo.edu</p>
            <p><strong>Office Hours:</strong> Monday-Friday, 2:45 AM - 10:45 PM</p>
            
            <h3>Send Us a Message</h3>
            <form>
                <p><strong>Your Name:</strong></p>
                <input type="text" style="width: 100%; padding: 8px; margin-bottom: 10px;">
                
                <p><strong>Your Email:</strong></p>
                <input type="email" style="width: 100%; padding: 8px; margin-bottom: 10px;">
                
                <p><strong>Message:</strong></p>
                <textarea style="width: 100%; padding: 8px; height: 100px; margin-bottom: 10px;"></textarea>
                
                <button type="submit" class="button">Send Message</button>
            </form>
        </section>
    </div>
    
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Liche Gogo Boarding High School. All rights reserved.</p>
        <p>Follow us on: 
            <a href="#" style="color: #4a7bb8;">Facebook</a> | 
            <a href="#" style="color: #4a7bb8;">Twitter</a> | 
            <a href="#" style="color: #4a7bb8;">Instagram</a>
        </p>
        <p style="margin-top: 10px; font-size: 14px;">
            <a href="#terms" style="color: #ccc;">Terms & Conditions</a> | 
            <a href="#privacy" style="color: #ccc;">Privacy Policy</a>
        </p>
    </footer>
    
    <script>
        // Simple JavaScript for beginners
        // This makes the navigation smooth when clicking links
        document.querySelectorAll('nav a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);
                
                window.scrollTo({
                    top: targetSection.offsetTop - 50,
                    behavior: 'smooth'
                });
            });
        });
        
        // Simple form alert
        const form = document.querySelector('form');
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We will contact you soon.');
            form.reset();
        });
        
        // Change header color on scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.style.backgroundColor = '#1a365d';
            } else {
                header.style.backgroundColor = '#2c5282';
            }
        });
    </script>
</body>
</html>