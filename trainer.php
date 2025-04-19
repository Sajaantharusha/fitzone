<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitZone Fitness Center</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <style>
        /* General */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #fff;
            color: #333;
        }

        nav {
            background-color: #333;
            padding: 15px 0;
            text-align: center;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: #f4f4f4;
            text-decoration: none;
            font-size: 18px;
            padding: 8px 12px;
            transition: color 0.3s ease;
        }

        nav ul li a:hover,
        nav ul li a:focus {
            color: #bbb;
        }

        /* Hero Section */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-wrap: wrap;
            /* padding: 100px 20px; */
            background: url('assets/images/background.jpg') no-repeat center center/cover; 
            color: white;
            text-align: center;
        }

        .hero-left {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        .hero-left img {
            width: 300px;
            max-width: 100%;
            border-radius: 10px;
            margin-top: 40px; /* image slightly down */
        }

        .hero-right {
            flex: 1;
            max-width: 500px;
        }

        .hero-right h1 {
            font-size: 36px;
            margin: 10px 0;
        }

        .hero-right h1 span {
            font-weight: bold;
            color: #c11325;
        }

        .hero-right h4 {
            font-weight: normal;
            margin-bottom: 20px;
        }

        .social-icons a {
            display: inline-block;
            margin: 0 8px;
            color: white;
            font-size: 16px;
            background: #c11325;
            padding: 10px;
            border-radius: 50%;
            text-align: center;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background-color: transparent;
            color: #fff;
            border: 2px solid #c11325;
            border-radius: 25px;
            font-weight: bold;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #c11325;
            color: white;
        }

        /* What I Do Section */
        .what-i-do {
            padding: 80px 20px;
            background-color: #333;
            text-align: center;
        }

        .what-i-do .content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }

        .what-i-do .text {
            flex: 1;
            padding: 20px;
            text-align: left;
        }

        .what-i-do .text h2 {
            font-size: 32px;
        }

        .what-i-do .text span {
            color: #c11325;
        }

        .what-i-do .image {
            flex: 1;
            text-align: center;
        }

        .what-i-do .image img {
            width: 300px;
            max-width: 100%;
        }

        .stats {
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
            flex-wrap: wrap;
        }

        .stat-box {
            background: #222222;
            padding: 30px;
            margin: 10px;
            border-radius: 12px;
            width: 200px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .stat-box h3 {
            font-size: 28px;
            color: #c11325;
        }

        .stat-box p {
            font-size: 16px;
            margin-top: 10px;
            color: white;
        }
        .text p {
                    font-size: 16px;
                    color: #fff;
                    line-height: 1.6;
                }

        .text h2 {
                    font-size: 36px;
                    color: #fff;
                }
    </style>
</head>
<body>

<?php include('navigation.php') ?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-left">
        <img src="assets/images/trainer3.png" alt="Trainer Image">
    </div>
    <div class="hero-right">
        <h1>I’m <span>John Smith</span></h1>
        <h4>Body Building and Yoga Instructor</h4>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-google-plus-g"></i></a>
        </div>
        <a href="signup.php" class="btn">Join With Us</a>
    </div>
</section>

<!-- What I Do Section -->
<section class="what-i-do">
    <div class="content">
        <div class="text">
            <h2>What I <span>Do</span></h2>
            <p>I am a text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p> 
        </div>
        <div class="image">
            <img src="/assets/images/punch.png" alt="Pushup Guy">
        </div>
    </div>

    <div class="stats">
        <div class="stat-box">
            <h3>12+</h3>
            <p>Experience</p>
        </div>
        <div class="stat-box">
            <h3>500+</h3>
            <p>Subscribers</p>
        </div>
        <div class="stat-box">
            <h3>4,000+</h3>
            <p>People Likes</p>
        </div>
    </div>
</section>

</body>
</html>
