<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: ./index.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!--Meta-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Intern Records</title>
    <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhOOn89h2oC2mX4CubFI1t2B2ftiUldDH5sHC9BFxd9g&s" />

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .table-responsive {
            width: "%60";
        }

        /* Tablo başlıkları için özel stil */
        .table thead th {
            font-size: 14px;
            text-align: center;

        }

        .table td {
            font-size: 16px;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include '../components/header.php'; ?>

    <div class="container-fluid m-auto p-4">
        <h3>Intern Records</h3>
        <div class="table-responsive">
            <table class="table table-hover table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>ID Number</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>School Number</th>
                        <th>Department</th>
                        <th>Company Name</th>
                        <th>Industry</th>
                        <th>Internship Department</th>
                        <th>Days</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $dbcon = new mysqli("localhost", "root", "", "internship") or die("Connection failed: " . $dbcon->connect_error);
                    $query = "SELECT * FROM interns";
                    $result = $dbcon->query($query);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['id_number'] . "</td>";
                            echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['surname']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['school_number']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['department']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['company_name']) . "</td>";
                            echo "<td><span class='badge bg-danger'>" . htmlspecialchars($row['company_industry']) . "</span></td>";
                            echo "<td>" . htmlspecialchars($row['internship_department']) . "</td>";
                            echo "<td>" . $row['internship_days'] . "</td>";
                            echo "<td><span class='badge bg-primary'>" . $row['internship_start_date'] . "</span></td>";
                            echo "<td><span class='badge bg-success'>" . $row['internship_end_date'] . "</span></td>";
                            echo "<td><a href='update.php?id=" . $row['id'] . "' class='btn btn-primary w-100'>Update</a></td>";
                            echo "<td><a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger w-100' onclick='return confirm(\"Are you sure you want to delete this record?\")'>Delete</a></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='22'>No records found</td></tr>";
                    }
                    $dbcon->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>