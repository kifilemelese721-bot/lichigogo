<!DOCTYPE html>
<html>
<head>
    <title>Step 2: New Password</title>
    <style>
        body {
            font-family: Arial;
            background: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0 0 10px #ccc;
            text-align: center;
        }
        h2 {
            color: #333;
            margin-bottom: 10px;
        }
        p {
            color: #666;
            margin-bottom: 20px;
        }
        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }
        .form a{
            width: 100px;
            margin: 10px;
            background: #6c757d;
        }
        button:hover {
            opacity: 0.9;
        }
        .message {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }
        .error {
            background: #f8d7da;
            color: #721c24;
        }
        .info {
            background: #d1ecf1;
            color: #0c5460;
        }
        .step-indicator {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .step {
            text-align: center;
            margin: 0 10px;
        }
        .step-circle {
            width: 30px;
            height: 30px;
            background: #28a745;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 5px;
            font-weight: bold;
        }
        .step-current {
            background: #007bff;
        }
        .step-inactive {
            background: #ccc;
            color: #666;
        }
        .password-info {
            font-size: 12px;
            color: #666;
            text-align: left;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="card">
        <!-- Step Indicator -->
        <div class="step-indicator">
            <div class="step">
                <div class="step-circle">1</div>
                <div>Enter Email</div>
            </div>
            <div class="step">
                <div class="step-circle step-current">2</div>
                <div>New Password</div>
            </div>
            <div class="step">
                <div class="step-circle step-inactive">3</div>
                <div>Complete</div>
            </div>
        </div>
        
        <h2>Set New Password</h2>
        <p id="emailDisplay"></p>
        
        <div id="message"></div>
        
        <form onsubmit="setNewPassword(event)" >
            <input type="password" id="newPassword" placeholder="New password" required>
            <div class="password-info">Must be at least 8 characters</div>
            
            <input type="password" id="confirmPassword" placeholder="Confirm password" required>
            <div class="password-info">Passwords must match</div>
            
            <button type="submit" name="reset">Reset Password</button>
            <a class="cancel" href="resetpassword_step1.php" >Back</a>
        </form>
    </div>
<?php 
if (isset($_POST['reset'])) {
  
}
 ?>
    <script>

    </script>
</body>
</html>