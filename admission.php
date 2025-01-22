<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('img/bg%201.jpg');
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        .content {
            padding: 20px;
        }

        h1 {
            color: #333;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            overflow: hidden;
        }

        table th, table td {
            padding: 15px;
            text-align: left;
        }

        table th {
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            text-transform: uppercase;
        }

        table td {
            background-color: #f9f9f9;
            color: #333;
            font-size: 15px;
        }

        table tr:nth-child(even) td {
            background-color: #f1f1f1;
        }

        table tr:hover td {
            background-color: #d1e7dd;
            transition: background-color 0.3s;
        }

        table td {
            border-bottom: 1px solid #ddd;
        }

        table tr:last-child td {
            border-bottom: none;
        }
    </style>
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
            // Database connection
            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "collegeproject";

            $data = mysqli_connect($host, $user, $password, $db);

            // Check if the connection is successful
            if (!$data) {
                die("Database connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM admission_home";
            $result = mysqli_query($data, $sql);

            // Check if the query was successful
            if (!$result) {
                die("Query failed: " . mysqli_error($data));
            }

            while ($info = $result->fetch_assoc()) {
            ?>

            <tr>
                <td style="padding: 20px;">
                    <?php echo "{$info['Name']}"; ?>
                </td>
                <td style="padding: 20px;">
                    <?php echo "{$info['Email']}"; ?>
                </td>
                <td style="padding: 20px;">
                    <?php echo "{$info['Phone']}"; ?>
                </td>
                <td style="padding: 20px;">
                    <?php echo "{$info['Message']}"; ?>
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
