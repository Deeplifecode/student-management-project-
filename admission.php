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
    <title>Admin Dashboard</title>
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
        <h1> Applied For Admission </h1>
        <table border="1px">
            <tr>
                <th style="padding: 20px; font-size: 15px;">Name</th>
                <th style="padding: 20px; font-size: 15px;">Email</th>
                <th style="padding: 20px; font-size: 15px;">Phone</th>
                <th style="padding: 20px; font-size: 15px;">Massege</th>
        </tr>

        <?php
            while($info=$result->fetch_assoc())
            {
        ?>

        <tr>
            <td style="padding: 20px;">
                <?php echo "{$info['Name']};" ?>
            </td>
            <td style="padding: 20px;">
            <?php echo "{$info['Email']};" ?>
            </td>
            <td style="padding: 20px;">
            <?php echo "{$info['Phone']};" ?>
            </td>
            <td style="padding: 20px;">
            <?php echo "{$info['Message']};" ?>
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