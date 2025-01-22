<?php

error_reporting(0);

session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "collegeproject";

// Create a connection
$data = mysqli_connect($host, $user, $password, $db);

// Check the connection
if ($data === false) {
    die("Connection error: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    // Ensure 'username' and 'password' are set in POST

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $name = $_POST['username'];
        $pass = $_POST['password'];

        // Use prepared statements to prevent SQL injection
        $sql = "SELECT * FROM user WHERE username = ? AND password = ?";

        // Prepare the statement
        if ($stmt = mysqli_prepare($data, $sql)) {
            // Bind parameters
            mysqli_stmt_bind_param($stmt, "ss", $name, $pass);

            // Execute the query
            mysqli_stmt_execute($stmt);

            // Get the result
            $result = mysqli_stmt_get_result($stmt);

            // Check if a row is returned

            if ($row = mysqli_fetch_array($result)) {

                // Check usertype and redirect

                if ($row["usertype"] == "student") {

                    $_SESSION['username']=$name;

                    $_SESSION['usertype']="student";

                    header("Location: studenthome.php");

                    exit();
                }
                
                elseif ($row["usertype"] == "admin") {

                    $_SESSION['username']=$name;

                    $_SESSION['usertype']="admin";  

                    header("Location: adminhome.php");
                    exit();
                } 
                else {
                    echo "Invalid login credentials";
                }
            }
             else {
                
                $message= "Invalid login credentials"; // Show a generic message to avoid leaking information

                $_SESSION['loginMessage']=$message;

                header("location:login.php");
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            echo "Error preparing the query.";
        }
    } else {
        echo "Username or password not set.";
    }
}

// Close the connection
mysqli_close($data);
?>
