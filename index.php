<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>TASK 3: VIEW</title>
    
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        .nav {
            background-color: #333;
            overflow: hidden;
        }
        .nav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .nav a:hover {
            background-color: #ddd;
            color: black;
        }
        .table {
            padding: 20px;
            margin-top: -20px;
        }
    </style>
</head>
<body>
    <div class="nav">
        <a href="index.php">View Table</a>
        <a href="screenshots.html">Screenshots</a>
    </div>

    <div class="table">
        <?php
        include 'db.php';

        $sql = "SELECT * FROM hr_view";
        $result = $conn->query($sql);

        echo "<h1>Task 3: View (Output in Browser) </h1>
                <br> <p><b>SQL query: </b>SELECT * FROM hr_view;</p>
                <br>";

        if ($result->num_rows > 0) {
            echo "<table border='1' cellspacing='0' cellpadding='10'>
                    <tr>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Job Title</th>
                        <th>Employment Date</th>
                        <th>Manager Name</th>
                        <th>Department Name</th>
                        <th>Location</th>
                    </tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["Employee ID"]. "</td>
                        <td>" . $row["Name"]. "</td>
                        <td>" . $row["job_title"]. "</td>
                        <td>" . $row["Employment Date"]. "</td>
                        <td>" . $row["Manager"]. "</td>
                        <td>" . $row["department_name"]. "</td>
                        <td>" . $row["Location"]. "</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>