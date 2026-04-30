<?php
session_start();
 require"connection1.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Step 1: Enter Email</title>
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
        button:hover {
            background: #0056b3;
        }
        .back {
            margin-top: 15px;
        }
        .back a {
            color: #007bff;
            text-decoration: none;
        }
        .message {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }
        .success {
            background: #d4edda;
            color: #155724;
        }
        .error {
            background: #f8d7da;
            color: #721c24;
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
            background: #007bff;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 5px;
            font-weight: bold;
        }
        .step-inactive {
            background: #ccc;
            color: #666;
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
                <div class="step-circle step-inactive">2</div>
                <div>New Password</div>
            </div>
            <div class="step">
                <div class="step-circle step-inactive">3</div>
                <div>Complete</div>
            </div>
        </div>
        
        <h2>Forgot Password?</h2>
        <p>Enter  the verfication code that sent to your email</p>
        
        <div id="message"></div>
        
        <form  action="resetpassword_step1.php" method="POST">
            <input name="text" type="email" id="email" placeholder="you@example.com" required>
            <button type="submit" name="reset">Reset password</button>
        </form>
        
        <div class="back">
            <a href="login.php">← Back to Login</a>
        </div>
    </div>
    <?php 
if (isset($_POST['reset'])) {
    $email=$_POST['email'];
    $sql="select * from users where email='$email'";
    $query_run=mysqli_query($connect,$sql);
    if (mysqli_num_rows($query_run)>0) {
        header('location:resetpassword_step2.php');
       
    }
    else{
        echo "
        <script>
        document.getElementById('message').innerHTML='User dose not exist';
         document.getElementById('message').style.color='red';
         document.getElementById('message').style.border='1px solid black';
        </script>
        ";
    }
}
     ?>

    <script>
        
    </script>
</body>
</html>