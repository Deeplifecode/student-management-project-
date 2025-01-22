<!-- if there is no username then it will send the user to login.php -->
<?php
session_start();

if(!isset($_SESSION['username'])){
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student')
{
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body class="body">
    <header class="header">
        <a href="">Admin Dashboard</a>
        <div class="logout">
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
    </header>
    <aside>
        <ul>
            <li>
                <a href="admission.php">Admission</a>
            </li>
            <li>
                <a href="add_student.php">Add Student</a>
            </li>
            <li>
                <a href="view_student.php">View Student</a>
            </li>
            <li>
                <a href="">Add Teacher</a>
            </li>
            <li>
                <a href="">View Teacher</a>
            </li>
            <li>
                <a href="">Add Courses</a>
            </li>
            <li>
                <a href="">View Courses</a>
            </li>
        </ul>
    </aside>
        <div class="content">
            <h2>Welcome to the Admin Dashboard</h2>
            <p class="intro-text">Manage all the content related to the institution, including students, teachers, and courses. Use the options in the sidebar to navigate through different sections.</p>
            
            <div class="search-bar">
                <input type="text" class="form-control" placeholder="Search for a student..." />
            </div>
        </div>
    </div>

    

</body>
</html>