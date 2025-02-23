<?php
header('Content-Type: application/json');

$conn = new mysqli("localhost", "root", "", "testdb");

if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}

$query = isset($_GET['q']) ? $_GET['q'] : '';

$sql = "SELECT * FROM users WHERE name LIKE '%$query%'";
$result = $conn->query($sql);

$users = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}

echo json_encode($users);

$conn->close();
