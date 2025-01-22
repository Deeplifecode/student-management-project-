<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <style>
        /* Body styles: use a full-screen background image */
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background-image: url('img/campus 1.jpg'); /* Add your background image path */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Overlay Effect */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4); /* Dark overlay */
        }

        /* Login Form Container Styles */
        .form_deg {
            background: rgba(255, 255, 255, 0.9); /* Semi-transparent white */
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            position: relative;
            z-index: 1;
        }

        /* Title styles */
        .title_deg {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .title_deg h4 {
            color: #f44336;
            font-size: 1.2rem;
            margin-top: 10px;
        }

        /* Form Input Styles */
        .label_deg {
            display: block;
            font-size: 1.1rem;
            color: #333;
            margin-bottom: 5px;
        }

        .login_form input[type="text"],
        .login_form input[type="password"] {
            width: 100%;
            padding: 12px;
            font-size: 1rem;
            border: 2px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
            outline: none;
            transition: all 0.3s ease;
        }

        .login_form input[type="text"]:focus,
        .login_form input[type="password"]:focus {
            border-color: #2575fc;
            box-shadow: 0 0 10px rgba(37, 117, 252, 0.6);
        }

        /* Submit button styles */
        .login_form input[type="submit"] {
            width: 100%;
            padding: 12px;
            font-size: 1.1rem;
            background-color: #2575fc;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .login_form input[type="submit"]:hover {
            background-color: #6a11cb;
        }

        .login_form input[type="submit"]:active {
            background-color: #4b8ad9;
        }

        /* Flash Message Styles */
        .flash-message {
            background-color: #f44336;
            color: white;
            padding: 10px;
            margin-top: 20px;
            border-radius: 5px;
            text-align: center;
            font-size: 1rem;
        }

        /* Additional Responsiveness */
        @media (max-width: 480px) {
            .form_deg {
                padding: 20px 30px;
                width: 90%;
            }

            .title_deg {
                font-size: 1.5rem;
            }

            .login_form input[type="submit"] {
                padding: 10px;
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="overlay"></div> <!-- Dark overlay -->

    <div class="form_deg">
        <div class="title_deg">
            Login Form
            <h4>
                <?php
                error_reporting(0);
                session_start();
                session_destroy();

                echo $_SESSION['loginMessage'];
                ?>
            </h4>
        </div>

        <form class="login_form" action="login_check.php" method="post">
            <div>
                <label class="label_deg" for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" required>
            </div>
            <div>
                <label class="label_deg" for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div>
                <input class="btn btn-primary" type="submit" name="submit" value="Login">
            </div>
        </form>
    </div>

</body>

</html>
