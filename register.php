<?php require"connection1.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset & Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            color: #333;
        }

        /* Dashboard Container */
        .dashboard-container {
            display: flex;
            width: 100%;
            max-width: 1200px;
            min-height: 700px;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        /* Main Content */
        .main-content {
            flex: 1;
            padding: 40px;
            overflow-y: auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .header h2 {
            font-size: 28px;
            font-weight: 700;
            color: #2c3e50;
        }

        /* Registration Form */
        .registration-form-container {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .form-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #f1f2f6;
        }

        .form-header h3 {
            font-size: 24px;
            color: #2c3e50;
        }

        .form-header h3 i {
            color: #667eea;
            margin-right: 10px;
        }

        .form-steps {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .step {
            display: flex;
            align-items: center;
            gap: 10px;
            flex: 1;
        }

        .step-number {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #f1f2f6;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: #7f8c8d;
        }

        .step.active .step-number {
            background: #667eea;
            color: white;
        }

        .step.completed .step-number {
            background: #2ecc71;
            color: white;
        }

        .step-label {
            font-weight: 500;
            color: #7f8c8d;
        }

        .step.active .step-label {
            color: #2c3e50;
        }

        .form-section {
            margin-bottom: 40px;
        }

        .section-title {
            font-size: 18px;
            color: #2c3e50;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #f1f2f6;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title i {
            color: #667eea;
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2c3e50;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-group label i {
            color: #667eea;
            width: 20px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: white;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .form-hint {
            display: block;
            margin-top: 5px;
            font-size: 13px;
            color: #7f8c8d;
        }

        .password-wrapper {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #7f8c8d;
            cursor: pointer;
            font-size: 18px;
        }

        .password-strength {
            margin-top: 10px;
        }

        .strength-meter {
            height: 6px;
            background: #e0e0e0;
            border-radius: 3px;
            overflow: hidden;
            margin-bottom: 5px;
        }

        .strength-meter::after {
            content: '';
            display: block;
            height: 100%;
            width: 0;
            background: #e74c3c;
            transition: width 0.3s ease;
        }

        .password-match {
            font-size: 13px;
            margin-top: 5px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .match-success {
            color: #2ecc71;
        }

        .match-error {
            color: #e74c3c;
        }

        .checkbox-wrapper {
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }

        .checkbox-wrapper input[type="checkbox"] {
            width: 18px;
            height: 18px;
            margin-top: 3px;
        }

        .checkbox-label {
            font-weight: normal;
            cursor: pointer;
        }

        .terms-link {
            color: #667eea;
            text-decoration: none;
        }

        .terms-link:hover {
            text-decoration: underline;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 2px solid #f1f2f6;
        }

        .btn {
            padding: 14px 30px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        }

        .form-actions a {
            color: #2c3e50;
            text-decoration: none;
            padding: 14px 30px;
            background: #f1f2f6;
            border-radius: 10px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
        }

        .form-actions a:hover {
            background: #e0e0e0;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h2>Student Registration Dashboard</h2>
                <a href="login.php" class="btn btn-primary">
                     login
                </a>
            </div>

            <!-- Registration Form -->
            <div class="registration-form-container">
                <div class="form-header">
                    <h3><i class="fas fa-user-plus"></i> New Student Registration</h3>
                    <div class="form-steps">
                        <div class="step completed">
                            <div class="step-number">1</div>
                            <div class="step-label">Personal Info</div>
                        </div>
                        <div class="step active">
                            <div class="step-number">2</div>
                            <div class="step-label">Academic Details</div>
                        </div>
                        <div class="step">
                            <div class="step-number">3</div>
                            <div class="step-label">Review & Submit</div>
                        </div>
                    </div>
                </div>
                <div style="display: none;" id="messagecontainer">
                <div  id="message"></div>
                <div onclick="cancel()" style="margin-left: 120px;"><i class="fas fa-times"></i></div>
                </div>
               
                <form id="registrationForm" action="register.php" method="POST">
                    <!-- Personal Information Section -->
                    <div class="form-section">
                        <div class="section-title">
                            <i class="fas fa-user-circle"></i> Personal Information
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="fullName">
                                    <i class="fas fa-signature"></i> Full Name 
                                </label>
                                <input type="text" id="fullName" name="fullname" placeholder="Enter full name" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="username">
                                    <i class="fas fa-at"></i> Username 
                                </label>
                                <input type="text" id="username" name="username" placeholder="Choose username" required>
                                <span class="form-hint">Letters, numbers, and underscores only</span>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">
                                    <i class="fas fa-envelope"></i> Email Address
                                </label>
                                <input type="email" id="email" name="email" placeholder="student@university.edu" required>
                                <span class="form-hint">Use your university email address</span>
                            </div>
                            
                            <div class="form-group">
                                <label for="phone">
                                    <i class="fas fa-phone"></i> Phone Number 
                                </label>
                                <input type="tel" id="phone" name="phone" placeholder="+1 (123) 456-7890" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="dob">
                                    <i class="fas fa-birthday-cake"></i> Date of Birth 
                                </label>
                                <input type="date" id="dob" name="dob" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="gender">
                                    <i class="fas fa-venus-mars"></i> Gender 
                                </label>
                                <select id="gender" name="gender" required>
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                    <option value="prefer_not_to_say">Prefer not to say</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Academic Details Section -->
                    <div class="form-section">
                        <div class="section-title">
                            <i class="fas fa-graduation-cap"></i> Academic Details
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="department">
                                    <i class="fas fa-building"></i> Department 
                                </label>
                                <input id="department" name="dpt" required>
                                </input>
                            </div>
                            <div class="form-group">
                                <label for="address">
                                    <i class="fas fa-map-marker-alt"></i> Address 
                                </label>
                                <input id="address" name="address" placeholder="Enter your current address" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="year">
                                    <i class="fas fa-calendar"></i> Year of Study 
                                </label>
                                <select id="year" name="year" required>
                                    <option value="">Select Year</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="semester">
                                    <i class="fas fa-calendar-check"></i> Semester 
                                </label>
                                  <select id="semester" name="semester" required>
                                    <option value="">Select semester</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Account Security Section -->
                    <div class="form-section">
                        <div class="section-title">
                            <i class="fas fa-lock"></i> Account Security
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="password">
                                    <i class="fas fa-key"></i> Password 
                                </label>
                                <div class="password-wrapper">
                                    <input type="password" id="password" name="pwd" placeholder="Create a strong password" required>
                                    <button type="button" class="toggle-password" onclick="togglePassword('password')">
                                        
                                    </button>
                                </div>
                                <div class="password-strength">
                                    <div class="strength-meter" id="strengthMeter"></div>
                                    <span class="form-hint">Must be at least 8 characters with uppercase, lowercase, and numbers</span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="confirmPassword">
                                    <i class="fas fa-key"></i> Confirm Password
                                </label>
                                <div class="password-wrapper">
                                    <input type="password" id="confirmPassword" name="confirmPwd" placeholder="Re-enter password" required>
                                    <button type="button" class="toggle-password" onclick="togglePassword('confirmPassword')">
                                    
                                    </button>
                                </div>
                                <div id="passwordMatch" class="password-match"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Terms and Submit -->
                    <div class="form-section">
                        <div class="form-group">
                            <div class="checkbox-wrapper">
                                <input type="checkbox" id="agreeTerms" name="agreeTerms" required>
                                <label for="agreeTerms" class="checkbox-label">
                                    I agree to the <a href="terms_of_condtion_and_policy.php" class="terms-link">Terms and Conditions</a> and 
                                    <a href="terms_of_condtion_and_policy.php" class="terms-link">Privacy Policy</a>
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <a href="index.php">
                                <i class="fas fa-times"></i> Back to dashboard
                            </a>
                            <button type="submit" class="btn btn-primary" name="register">
                                <i class="fas fa-user-plus"></i> Register Student
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['register'])) {
   $fullname=$_POST['fullname'];
   $email=$_POST['email'];
    $phone=$_POST['phone'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $pwd=$_POST['pwd'];
    $confirmpwd=$_POST['confirmPwd'];
    $username=$_POST['username'];
    $dpt=$_POST['dpt'];
    if($pwd==$confirmpwd){
     $sql="select * from users where email='$email' or username='$username'";
     $query_run=mysqli_query($connect,$sql);
     if(mysqli_num_rows($query_run)>0){
        echo("<script>
            document.getElementById('message').innerHTML='User alredy exist please login with your credential ! ';
             document.getElementById('message').style.color='red';
              document.getElementById('messagecontainer').style.display='flex';
               document.getElementById('messagecontainer').style.border='2px outset tomato';
                document.getElementById('messagecontainer').style.width='80%';
                 document.getElementById('messagecontainer').style.marginLeft='10%';
                  document.getElementById('messagecontainer').style.padding='10px';
                   document.getElementById('messagecontainer').style.backgroundColor='#dcdcdc';
                   document.getElementById('message').style.fontSize='30px';
            </script>");
     }
     else{
         $hashed_password = password_hash($pwd, PASSWORD_DEFAULT);
        $query="insert into users (username,password,email,full_name,role,phone,address,status,gender,dbo,agreeterms,department) values ('$username','$pwd','$email','$fullname','student','$phone','$address','Pending','$gender','$dob','Agreed','$dpt')";
        $query_run=mysqli_query($connect,$query);
        if ($query_run) {
          echo("<script>
            document.getElementById('message').innerHTML='Successful Registered ! ';
             document.getElementById('message').style.color='green';
              document.getElementById('messagecontainer').style.display='flex';
               document.getElementById('messagecontainer').style.border='2px outset green';
                document.getElementById('messagecontainer').style.width='40%';
                 document.getElementById('messagecontainer').style.marginLeft='10%';
                  document.getElementById('messagecontainer').style.padding='10px';
                   document.getElementById('messagecontainer').style.backgroundColor='#dcdcdc';
                   document.getElementById('message').style.fontSize='30px';
            </script>");        }
        else{
            echo("<script>alert(' Registration Failed')</script>"); 
        }
     }
    }
    else{
        echo("<script>alert('password and confirmition dose not match!')</script>");
    }
    }
    ?>

    <script>

        // Password strength checker
        document.getElementById('password').addEventListener('input', function() {
            const password = this.value;
            const strengthMeter = document.getElementById('strengthMeter');
            let strength = 0;
            
            if (password.length >= 8) strength += 25;
            if (/[A-Z]/.test(password)) strength += 25;
            if (/[a-z]/.test(password)) strength += 25;
            if (/[0-9]/.test(password)) strength += 25;
            
            strengthMeter.style.width = strength + '%';
            
            if (strength < 50) {
                strengthMeter.style.backgroundColor = '#e74c3c';
            } else if (strength < 75) {
                strengthMeter.style.backgroundColor = '#f39c12';
            } else {
                strengthMeter.style.backgroundColor = '#2ecc71';
            }
        });

        // Password match checker
        document.getElementById('confirmPassword').addEventListener('input', function() {
            const password = document.getElementById('password').value;
            const confirmPassword = this.value;
            const matchDiv = document.getElementById('passwordMatch');
            
            if (confirmPassword === '') {
                matchDiv.textContent = '';
                matchDiv.className = 'password-match';
            } else if (password === confirmPassword) {
                matchDiv.innerHTML = '<i class="fas fa-check-circle"></i> Passwords match';
                matchDiv.className = 'password-match match-success';
            } else {
                matchDiv.innerHTML = '<i class="fas fa-exclamation-circle"></i> Passwords do not match';
                matchDiv.className = 'password-match match-error';
            }
        });
        function cancel(){
            document.getElementById('messagecontainer').style.display='none';
        }
    </script>
</body>
</html>