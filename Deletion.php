<?php require_once 'dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php
$query = "DELETE FROM users WHERE UserID = ?";

$stmt = $pdo->prepare($query);

$executeQuery = $stmt->execute([69]);

if ($executeQuery) {
    echo "The deletion is successful";
} else {
    echo "Query failed";
}

?>

</body>
