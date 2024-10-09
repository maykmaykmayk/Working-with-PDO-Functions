<?php require_once 'dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php
$query = "UPDATE users SET Username = ?, FirstName = ?, LastName = ? WHERE UserID = ?";

$stmt = $pdo->prepare($query);

$executeQuery = $stmt->execute(["JoemikeGwapoForReal", "Joemike", "Grisola", 20]);

if ($executeQuery) {
    echo "The update is successful";
} else {
    echo "Query failed";
}

?>

</body>
</html>
