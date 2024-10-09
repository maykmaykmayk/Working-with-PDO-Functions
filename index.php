<?php require_once 'dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

<h1>User List</h1>

<table>
    <tr>
        <th>UserID</th>
        <th>Username</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>DateOfBirth</th>
        <th>DateAdded</th>
    </tr>

    <?php
    $query = "SELECT * FROM users";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>{$row['UserID']}</td>";
        echo "<td>{$row['Username']}</td>";
        echo "<td>{$row['FirstName']}</td>";
        echo "<td>{$row['LastName']}</td>";
        echo "<td>{$row['DateOfBirth']}</td>";
        echo "<td>{$row['DateAdded']}</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
