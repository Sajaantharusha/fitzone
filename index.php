<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitZone Fitness Center</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Font Awesome Free CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

</head>
<body>

<?php include('navigation.php') ?>
   <!-- Hero Section -->
    <section class="hero-image">
        <main>
            <h1>Welcome to FitZone Fitness Center</h1>
            <div class="button-group">
                <button onclick="location.href='login.php'">Login</button>
                <button onclick="location.href='signup.php'">Sign Up</button>
            </div>
        </main>
    </section>

    <!-- About Us -->
    <section class="about" id="about">
        <h2>About Us</h2>
        <p>At FitZone, we are dedicated to helping you achieve your fitness goals. Our state-of-the-art facilities and expert trainers are here to support you every step of the way.</p>
        <p>Whether you're a beginner or a seasoned athlete, we have something for everyone. Join us today and start your fitness journey!</p>
    </section>
    <!-- Find a Gym -->
     

    <!-- Services -->
    <section class="cards" id="Services">
        <div class="container">
            <h2>Our Services</h2>
        </div>
    <div class="cards-row">
        <div class="card">
            <i class="fas fa-running icon"></i>
            <h3>Cardio </h3>
            <p>Improve your stamina and heart health with our high-energy cardio sessions.</p>
            <a href="trainer.php" class="join-link">Join Now <span>&rarr;</span></a>
        </div>

        <div class="card">
            <i class="fas fa-dumbbell icon"></i>
            <h3>Strength Training</h3>
            <p>This program is suitable for those who want to get rid of fat and lose weight.</p>
            <a href="trainer2.php"" class="join-link">Join Now <span>&rarr;</span></a>
        </div>
        <div class="card">
    <i class="fas fa-spa icon"></i>
    <h3>Yoga </h3>
    <p>Relax your body and mind with our expert-led yoga and meditation sessions.</p>
    <a href="trainer3.php"" class="join-link">Join Now <span>&rarr;</span></a>
</div>

    </div>
</section>
    <!-- End Services -->

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="content">
                <!-- Contact Form -->
                <div class="box form">
                    <form action="#" method="POST">
                        <input type="text" name="name" placeholder="Enter Name" required>
                        <input type="email" name="email" placeholder="Enter Email" required>
                        <input type="tel" name="phone" placeholder="Enter Mobile" required>
                        <textarea name="message" rows="5" placeholder="Enter Message" required></textarea>
                        <button type="submit">Send Message</button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="box text">
                    <h2>Get Connected with FitZone</h2>
                    <p>At FitZone, we believe in fitness and community. Reach out to us with your questions or feedback we're here to help!</p>
                    <div class="info">
                        <ul>
                            <li><span class="fa fa-map-marker"></span> No 36 Kurunagala</li>
                            <li><span class="fa fa-phone"></span> +94 499 5912</li>
                            <li><span class="fa fa-envelope"></span> FitZoneCenter.com</li>
                        </ul>
                    </div>
                    <div class="social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-instagram"></span></a>
                        <a href="#"><span class="fa fa-tiktok"></span></a>
                    </div>
                    <div class="copy">Powered by &copy; Sajan Tharusha</div>
                </div>
            </div>
        </div>
    </section>

    <!-- JS Files -->
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>
