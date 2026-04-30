<?php 
require "connection1.php";
session_start();

// Handle login
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $pwd = $_POST['pwd'];
    
    // Query to get user including hashed password
    $query = "SELECT * FROM users WHERE email='$email'";
    $query_run = mysqli_query($connect, $query);
    
    if ($query_run && (mysqli_num_rows($query_run) > 0)) {
        $user = mysqli_fetch_assoc($query_run);
        $hashed_password = $user['password'];
        
        // Verify the password against the hash
        if (password_verify($pwd, $hashed_password)) {
            $role = $user['role'];
            
            // Store user data in session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_role'] = $user['role'];
            $_SESSION['user_name'] = $user['full_name'];
            $_SESSION['department'] = $user['department'];
            
            // Redirect based on role
            switch($role) {
                case 'student':
                    header('Location: student/student-dashboard.php');
                    break;
                case 'instructor':
                    header('Location: instructor/instructor-dashboard.php');
                    break;
                case 'admin':
                    header('Location: admin/admin-dashboard.php');
                    break;
                case 'registrar':
                    header('Location: registrar/registrar-dashboard.php');
                    break;
                case 'department_head':
                    header('Location: depthead/depthead-dashboard.php');
                    break;
                default:
                    header('Location: index.php');
            }
            exit();
        } else {
            // Password doesn't match
            echo "<script>
                document.getElementById('message').innerHTML='Invalid email or password!';
                document.getElementById('message').style.color='red';
                document.getElementById('messagecontainer').style.display='flex';
                document.getElementById('messagecontainer').style.border='2px outset tomato';
                document.getElementById('messagecontainer').style.width='80%';
                document.getElementById('messagecontainer').style.marginLeft='10%';
                document.getElementById('messagecontainer').style.padding='10px';
                document.getElementById('messagecontainer').style.backgroundColor='#dcdcdc';
                document.getElementById('message').style.fontSize='30px';
            </script>";
        }
    } else {
        // User not found
        echo "<script>
            document.getElementById('message').innerHTML='Invalid email or password!';
            document.getElementById('message').style.color='red';
            document.getElementById('messagecontainer').style.display='flex';
            document.getElementById('messagecontainer').style.border='2px outset tomato';
            document.getElementById('messagecontainer').style.width='80%';
            document.getElementById('messagecontainer').style.marginLeft='10%';
            document.getElementById('messagecontainer').style.padding='10px';
            document.getElementById('messagecontainer').style.backgroundColor='#dcdcdc';
            document.getElementById('message').style.fontSize='30px';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lich Gogo School - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            min-height: 100vh;
        }
        
        /* Navbar Styles */
        .navbar {
            background: white;
            padding: 15px 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        
        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .logo img {
            height: 50px;
            width: auto;
        }
        
        .logo h2 {
            color: #2c3e50;
            font-size: 20px;
        }
        
        .logo p {
            color: #666;
            font-size: 12px;
            margin-top: 2px;
        }
        
        .nav-menu {
            display: flex;
            list-style: none;
            gap: 30px;
            align-items: center;
            margin-right: 100px;
        }
        
        .nav-menu a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-menu a:hover {
            color: #4a6fa5;
        }
        
        .btn-login {
            background: #2c3e50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
        }
       .loginoption i{
            gap: 10px;
            width: 50px;
            font-size: 35px;
        }
        /* Main Content */
        .main-content {
            margin-top: 100px;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 100px);
        }
        
        /* Login Box */
        .login-box {
            width: 100%;
            max-width: 700px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            padding: 40px;
            margin: 20px;
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .login-header h2 {
            color: #2c3e50;
            font-size: 28px;
            margin-bottom: 10px;
        }
        
        .login-header p {
            color: #666;
        }
        
        /* Form Styles */
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 600;
        }
        
        .input-with-icon {
            width: 90%;
            position: relative;
        }
        
        .input-with-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
        }
        
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        
        input:focus {
            outline: none;
            border-color: #4a6fa5;
        }
        
        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #666;
        }
        
        /* Remember Forgot Section */
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }
        
        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .forgot-link {
            color: #4a6fa5;
            text-decoration: none;
            font-size: 14px;
        }
        
        /* Buttons */
        .btn-login-form {
            width: 100%;
            padding: 14px;
            background: #2c3e50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-bottom: 15px;
            transition: background 0.3s;
        }
        
        .btn-login-form:hover {
            background: #1a252f;
        }
        
        .btn-register {
            width: 95%;
            padding: 14px;
            background: white;
            color: #2c3e50;
            border: 2px solid #2c3e50;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: block;
            text-align: center;
        }
        
        .btn-register:hover {
            background: #2c3e50;
            color: white;
        }
        
        /* Message Box */
        .message-box {
            padding: 12px;
            margin-bottom: 20px;
            text-align: center;
            border-radius: 5px;
            display: none;
            font-size: 14px;
        }
        
        .message-box.success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        .message-box.error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        
        .message-box.info {
            background: #d1ecf1;
            color: #0c5460;
            border: 1px solid #bee5eb;
        }
        
        /* Footer */
        .footer {
            text-align: center;
            margin-top: 30px;
            color: #666;
            font-size: 14px;
            padding: 20px;
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">
                <!-- For demo, using icon instead of image -->
                <i class="fas fa-graduation-cap" style="font-size: 40px; color: #2c3e50;"></i>
                <div>
                    <h2>Lich Gogo Excellence</h2>
                    <p>Boarding Schools E-Learning</p>
                </div>
            </div>
            <ul id="nav" class="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#courses">Courses</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Main Content -->
    <div class="main-content">
        <div class="login-box">
            <!-- Login Header -->
            <div class="login-header">
                <h2> Login Form</h2>
                <p>Enter your credentials to access dashboard</p>
            </div>
             <div style="display: none;" id="messagecontainer">
                <div  id="message"></div>
                <div onclick="cancel()" style="margin-left: 120px;"><i class="fas fa-times"></i></div>
                </div>
            <!-- Message Box -->
            <div class="message-box" id="messageBox"></div>
            
            <!-- Login Form -->
            <form id="loginForm" action="login.php" method="POST">
                <!-- Email Field -->
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <div class="input-with-icon">
                        <i class="fas fa-envelope"></i>
                        <input name="email" type="email" id="email" placeholder="Lichgogo@education.edu" required>
                    </div>
                </div>
                
                <!-- Password Field -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-with-icon">
                        <input type="password" id="password" placeholder="Enter your password" name="pwd" required>

                    </div>
                </div>
                
                <!-- Remember Me & Forgot Password -->
                <div class="remember-forgot">
                    <div class="remember">
                        <input type="checkbox" id="remember">
                        <label for="remember" style="display: inline;">Remember me</label>
                    </div>
                    <a href="resetpassword_step1.php" class="forgot-link">Forgot Password?</a>
                </div>
                
                <!-- Login Button -->
                <button type="submit" class="btn-login-form" id="loginButton" name="login">
                    <i class="fas fa-sign-in-alt"></i> Login to Dashboard
                </button>
                
                <!-- Register Button -->
                <a href="register.php" class="btn-register">
                    <i class="fas fa-user-plus"></i> Create New Account
                </a>
                <center>
                    <p>Or Login with</p>
                    <a class="loginoption" href="#"><i class="fa-brands fa-google" style="color: #63E6BE;"></i></a>
                    <a class="loginoption" href="#"> <i class="fa-brands fa-facebook" style="color: #74C0FC;"></i></a>
                   
                </center>
                
            </form>
            
            <!-- Footer -->
            <div class="footer">
                <p>&copy; 2025 Lich Gogo Excellence Boarding Schools</p>
                <p style="margin-top: 5px; font-size: 12px;">Secure Login System</p>
            </div>
        </div>
    </div>
    <script>
        // Function to toggle mobile menu
        function toggleMenu() {
            const navMenu = document.getElementById('nav');
            navMenu.classList.toggle('active');
        }
         function cancel(){
            document.getElementById('messagecontainer').style.display='none';
        }
    </script>
</body>
</html>