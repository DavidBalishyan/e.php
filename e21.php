<!-- 21. Ստեղծեք HTML ձև, որը fetch-ով ուղարկում է տվյալներ PHP ֆայլին։ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Form</title>
</head>
<body>
    <form id="dataForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <input type="submit" value="Submit">
    </form>

    <div id="response"></div>

    <script>
        document.getElementById('dataForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(this);

            fetch('process.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById('response').innerText = data;
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>