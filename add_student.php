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


if(isset($_POST['add_student'])){
    $username=$_POST['name'];
    $user_email=$_POST['email'];
    $user_phone=$_POST['phone'];
    $user_password=$_POST['password'];
    $usertype="student";

    $check="SELECT * FROM user WHERE username='$username'"; //check existing username 

    $check_user=mysqli_query($data,$check);

    $row_count=mysqli_num_rows($check_user);

    if($row_count==1){
        echo "<script type='text/javascript'> 
            alert('Username Is Already Exist.Try Another One !')
        </script>";
    }
    else{


   

    $sql=" INSERT INTO user(username,email,phone,usertype,password) VALUES ('$username','$user_email','$user_phone','$usertype','$user_password')";

    $result=mysqli_query($data, $sql);

    if($result){
        echo "<script type='text/javascript'> 
            alert('Data Uploaded Successfuly !')
        </script>";
    }
    else{
        echo "Upload Failed !";
    }
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <?php
    include 'admin_css.php';
    ?>

<style>
body {
    background-image: url(img/coding.jpg);
    background-size: cover;
    background-position: center;
    font-family: Arial, sans-serif;
}

.content {
    background: rgba(255, 255, 255, 0.5); /* Semi-transparent background */
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 80%;
    max-width: 400px;
    margin: auto;
    margin-top: 50px;
}

h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    color: #333;
}

form div {
    margin-bottom: 15px;
}

label {
    font-weight: bold;
    margin-bottom: 5px;
    display: inline-block;
    color: #333;
}

input[type="text"], input[type="email"], input[type="number"] {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-sizing: border-box;
    margin-top: 5px;
    outline: none;
}

input[type="text"]:focus, input[type="email"]:focus, input[type="number"]:focus {
    border-color: #007bff;
}

input[type="submit"] {
    background-color: #007bff;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 1.2rem;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}


    
</style>

</head>
<body class="body" style="background-image: url(img/coding.jpg);">
     <?php
    include 'admin_sidebar.php';

?>
    

    <div class="content">
        <center>
        <h1> Add Student  </h1>

        <div>
            <form action="#" method="POST">
                <div>
                    <label for="">Username</label>
                    <input type="text" name="name">
                </div>

                <div>
                    <label for="">Email</label>
                    <input type="email" name="email">
                </div>

                <div>
                    <label for="">Phone</label>
                    <input type="number" name="phone">
                </div>

                <div>
                    <label for="">Password</label>
                    <input type="text" name="password">
                </div>

                <div>
                    <input type="submit" class="btn btn-primary" name="add_student" value="Add Student">
                </div>
            </form>
        </div>
        
        </center>
    </div>

</body>
</html>