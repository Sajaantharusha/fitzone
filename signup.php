<!-- <?php
include '../db/config.php';
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - FitZone Fitness Center</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Registration Page Styles */
        .login-container {
            background: #fff;
            border-radius: 10px;
            max-width: 500px;
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

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
            outline: none;
        }

        .form-group input:focus,
        .form-group select:focus {
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
        <h1>Register to FitZone Fitness Center</h1>

        <!-- Registration Form -->
        <form action="/backend/process-signup.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required placeholder="Enter your username">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email address">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Enter your password">
            </div>

            <!-- <div class="form-group">
                <label for="role">Role</label>
                <select id="role" name="role" required>
                    <option value="customer">Customer</option>
                    <option value="staff">Staff</option>
                    <option value="admin">Admin</option>
                </select>
            </div> -->

            <div class="form-group">
                <label for="full_name">Full Name</label>
                <input type="text" id="full_name" name="full_name" required placeholder="Enter your full name">
            </div>

            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" id="phone_number" name="phone_number" required placeholder="Enter your phone number">
            </div>

            <div class="form-group">
                <label for="our-services">Select a Service</label>
                <select name="trainer_id" id="our-services" class="form-select">
                    <option value="1">Cardio</option>
                    <option value="2">Strength Training</option>
                    <option value="3">Yoga</option>
                </select>
            </div>
                
            <button type="submit" class="login-btn">Register</button>
        </form>

        <p class="signup-link">Already have an account? <a href="login.php">Login here</a></p>
    </div>

</body>

</html>