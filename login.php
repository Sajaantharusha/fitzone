<?php
include 'db/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - FitZone Fitness Center</title>
    <link rel="stylesheet" href="assets/css/style.css">


    <!-- Inline CSS Styles -->
    <style>
        /* Login Page Styles */
        .login-container {
            background: #fff;
            border-radius: 10px;
            max-width: 400px;
            margin: 50px auto;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .login-container h1 {
            color: #ff6a00;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
            display: block;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
            outline: none;
        }

        .form-group input:focus {
            border-color: #ff6a00;
        }

        .login-btn {
            background: linear-gradient(to right, #ff416c, #ff4b2b);
            color: #fff;
            border: none;
            padding: 12px 25px;
            width: 100%;
            border-radius: 30px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .login-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .signup-link {
            margin-top: 20px;
            color: #333;
        }

        .signup-link a {
            color: #ff6a00;
            text-decoration: none;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }

        /* Optional: Responsive Design */
        @media (max-width: 768px) {
            .login-container {
                padding: 20px;
                width: 80%;
            }
        }
    </style>
</head>

<body>

    <?php include('navigation.php') ?>
    <div class="login-container">
        <h1>Login to FitZone Fitness Center</h1>

        <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid_credentials') : ?>
            <div class="alert alert-danger" role="alert">
                Invalid username or password. Please try again.
            </div>
        <?php endif; ?>

        <?php if (isset($_GET['signup']) && $_GET['signup'] == 'success') : ?>
            <div class="alert alert-success" role="alert">
                Registration successful! You can now log in.
            </div>
        <?php endif; ?>

    <!-- Login Form -->
    <form action="/backend/process-login.php" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required placeholder="Enter your username">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required placeholder="Enter your password">
        </div>

        <button type="submit" class="login-btn">Login</button>
    </form>

    <p class="signup-link">Don't have an account? <a href="signup.php">SignUp here</a></p>
    </div>

</body>

</html>