<!DOCTYPE html>
<html>
<head>
    <title>Northland Analytics PHP/MySQL Test Page</title>
</head>
<body>

<h1>Northland Analytics PHP/MySQL Test Page</h1>

<?php
$conn = new mysqli('localhost', 'hassanelmii', 'abc123', 'employees');
if ($conn->connect_error) {
    die("MySQL Connection Failed: " . $conn->connect_error);
}

echo "<p>Database Records Found</p>";

$sql = "SELECT first_name, last_name, hire_date FROM employees WHERE last_name = 'Weedman'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Employee: " . $row["first_name"] . " " . $row["last_name"] . " - Hire Date: " . $row["hire_date"] . "<br>";
    }
} else {
    echo "<p>No Records Found</p>";
}

$conn->close();
?>

</body>
</html>

