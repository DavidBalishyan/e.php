<form method="POST" action="">
    <label for="name">Search by name:</label>
    <input type="text" id="name" name="name">
    <input type="submit" value="Search">
</form>

<?php
// 18. Ստեղծեք որոնման ձև, որը գտնում է օգտատերերին ըստ անվան։ 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];

    $conn = new mysqli("localhost", "root", "", "test");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE name LIKE '%$name%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
        }
    } else {
        echo "No results found";
    }

    $conn->close();
}
?>