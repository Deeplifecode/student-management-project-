<!-- if there is no username then it will send the user to login.php -->
<?php
session_start();
error_reporting(0);

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

$sql="SELECT * FROM user WHERE usertype='student'"; //only show student data

$result=mysqli_query($data, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student</title>
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
        <h1> Student Data </h1>

    <?php 
        if($_SESSION['message'])
        {
            echo $_SESSION['message'];
        }
        unset($_SESSION['message']);
    ?>

        <br><br>
        <table border="1px">
            <tr>
                <th style="padding: 20px; font-size: 15px;">Name</th>
                <th style="padding: 20px; font-size: 15px;">Email</th>
                <th style="padding: 20px; font-size: 15px;">Phone</th>
                <th style="padding: 20px; font-size: 15px;">Password</th>
                <th style="padding: 20px; font-size: 15px;">Delete</th>
                <th style="padding: 20px; font-size: 15px;">Update</th>
        </tr>

        <?php
            while($info=$result->fetch_assoc())
            {
        ?>

        <tr>
            <td style="padding: 20px;">
                <?php echo "{$info['username']}";
                 ?>
            </td>

            <td style="padding: 20px;">
            <?php echo "{$info['email']}"; ?>
            </td>

            <td style="padding: 20px;">
            <?php echo "{$info['phone']}"; ?>
            </td>

            <td style="padding: 20px;">
            <?php echo "{$info['password']}"; ?>
            </td>

            <td style="padding: 20px;">
            <?php echo "<a class='btn btn-danger' onClick=\" javascript:return confirm('Are You To Sure To Delete');\" href='delete.php ? student_id={$info['id']}'> Delete </a> "; ?>
            </td>

            <td style="padding: 20px;">
            <?php echo "<a class='btn btn-primary' href='update_student.php'> Update </a>"; ?>
            </td>
        </tr>

        <?php
            }
            ?>
        </table>
        </center>
    </div>

</body>
</html>