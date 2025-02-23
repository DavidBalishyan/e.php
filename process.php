<!-- 21. Ստեղծեք HTML ձև, որը fetch-ով ուղարկում է տվյալներ PHP ֆայլին։ -->

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    echo "Received name: " . htmlspecialchars($name);
} else {
    echo "Invalid request method.";
}
?>