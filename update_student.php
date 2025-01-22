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

// connect to database and show database details like name ,phone ,messages,emails

$host = "localhost";
$user = "root";
$password = "";
$db = "collegeproject";

// Create a connection
$data = mysqli_connect($host, $user, $password, $db);

$sql="SELECT * FROM admission_home";

$result=mysqli_query($data, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adnim Dashboard</title>
    <?php
    include 'admin_css.php';

?>
</head>
<body class="body" style="background-image: url(img/bg\ 1.jpg);">
     <?php
    include 'admin_sidebar.php';

?>
    

    <div class="content">
        <center>
        <h1> Update Student </h1>
        <div>
            <form action="">
                <div>
                    <label for="">Username</label>
                    <input type="text" name="name">
                </div>

                <div>
                    <label for="">Username</label>
                    <input type="text" name="name">
                </div>

                <div>
                    <label for="">Email</label>
                    <input type="email  " name="name">
                </div>

                <div>
                    <label for="">Phone</label>
                    <input type="number" name="name">
                </div>

                <div>
                    <label for="">Password</label>
                    <input type="text" name="name">
                </div>

                <div>
                    <input type="submit" name="update" value="Update">
                </div>
            </form>
        </div>
        </center>
    </div>

</body>
</html>