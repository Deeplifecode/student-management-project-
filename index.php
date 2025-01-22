<?php
error_reporting(0);
session_start(); // Start the session before destroying it

// Check if the session message exists
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];

    echo "<script type='text/javascript'>
            alert('$message');
          </script>";

    // After displaying the message, destroy the session
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management Project</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
   <nav>
    <label class="logo">Nilaai Group of Institution</label>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Contact</a></li> <!-- Fixed typo 'Contect' to 'Contact' -->
        <li><a href="#">Admission</a></li>
        <li><a href="login.php" class="btn btn-success">Login</a></li>
    </ul>
   </nav> 
   <div class="section1">
    <div class="hero-content">
        <h1>Welcome to Nilaai Group of Institutions</h1>
        <p>We offer the best education with a focus on quality and excellence.</p>
        <a href="#admission-form" class="btn btn-primary">Apply Now</a>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <img src="img/campus 2.jpg" alt="Campus Image" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">Our Campus</h3>
                    <p class="card-text">Explore our beautiful campus with modern facilities and infrastructure.</p>
                    <a href="#" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <img src="img/teacher 1.jpg" alt="Teacher Image" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">Meet Our Teachers</h3>
                    <p class="card-text">Our faculty members are highly qualified and dedicated to student success.</p>
                    <a href="#" class="btn btn-outline-primary">Explore Teachers</a>
                </div>
            </div>
        </div>
    </div>
</div>

   <center>
    <h1>Our Teachers</h1>
</center>
<div class="container courses-container">
    <div class="row">
        <div class="col-md-4">
            <div class="course-card">
                <img class="course-img" src="img/teacher 1.jpg" alt="Web Development">
                <div class="course-info">
                    <h3>Web Development</h3>
                    <p>Learn how to create websites and web applications using the latest technologies.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="course-card">
                <img class="course-img" src="img/teacher 2.jpg" alt="Graphics Design">
                <div class="course-info">
                    <h3>Graphics Designer</h3>
                    <p>Master the art of graphic design using the best design tools and techniques.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="course-card">
                <img class="course-img" src="img/ourTeachers.jpg" alt="Marketing">
                <div class="course-info">
                    <h3>Marketing</h3>
                    <p>Learn the principles of marketing, from digital to traditional strategies.</p>
                </div>
            </div>
        </div>
    </div>
</div>

   <center>
    <h1>Our Courses</h1>
</center>
<div class="container courses-container">
    <div class="row">
        <div class="col-md-4">
            <div class="course-card">
                <img class="course-img" src="img/web dev.jpg" alt="Web Development">
                <div class="course-info">
                    <h3>Web Development</h3>
                    <p>Learn how to create websites and web applications using the latest technologies.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="course-card">
                <img class="course-img" src="img/Gra dig.jpg" alt="Graphics Design">
                <div class="course-info">
                    <h3>Graphics Designer</h3>
                    <p>Master the art of graphic design using the best design tools and techniques.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="course-card">
                <img class="course-img" src="img/marketing.jpg" alt="Marketing">
                <div class="course-info">
                    <h3>Marketing</h3>
                    <p>Learn the principles of marketing, from digital to traditional strategies.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="admission_form">
    <h1 style="text-align: center;">Admission Form</h1>
    <form action="data_check.php" method="POST">
        <div class="adm_int">
            <label class="label_text" for="name">Name</label>
            <input class="input_deg" type="text" id="name" name="name" required>
        </div>
        <div class="adm_int">
            <label class="label_text" for="email">Email</label>
            <input class="input_deg" type="email" id="email" name="email" required>
        </div>
        <div class="adm_int">
            <label class="label_text" for="phone">Phone</label>
            <input class="input_deg" type="text" id="phone" name="phone" required>
        </div>
        <div class="adm_int">
            <label class="label_text" for="message">Message</label>
            <textarea class="input_txt" id="message" name="message" required></textarea>
        </div>
        <div class="adm_int">
            <input class="btn btn-primary" id="submit" type="submit" value="Apply" name="apply">
        </div>
    </form>
</div>


   <footer class="footer_deg">
    <h3>&copy; Copyright by Deep Coding</h3>
   </footer>
</body>
</html>
