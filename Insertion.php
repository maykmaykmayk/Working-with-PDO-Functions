<?php require_once 'dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php
$query = "INSERT INTO users (UserID, Username, FirstName, LastName, DateOfBirth, Password, DateAdded)
VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $pdo->prepare($query);

$executeQuery = $stmt->execute(
    [69, "SirIvanGwapo", "Ivan", "Gwapo", '2024-10-09', "PogiAko", '2024-10-09']
);

if ($executeQuery) {
    echo "The insertion is successful";
} else {
    echo "Query failed";
}

?>

</body>
</html>
