<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Step 1: Connect to the SQLite database
$db = new SQLite3('database.db');

// Step 2: Execute a query (adjust 'your_table' and 'your_column' to your database structure)
$query = "SELECT FirstName FROM Users LIMIT 1"; // Fetch the first result
$result = $db->query($query);

// Step 3: Fetch and display the result
if ($row = $result->fetchArray()) {
    echo "Value from database: " . htmlspecialchars($row['FirstName']);
} else {
    echo "No data found.";
}

// Step 4: Close the database connection
$db->close();
?>
    
</body>
</html>