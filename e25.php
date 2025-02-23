<!-- 25. Գրեք կոդ, որը ձևում մուտքագրված տվյալները պահպանում է տվյալների բազայում առանց էջը թարմացնելու։ -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Form Data</title>
</head>
<body>
    <h1>Save Form Data</h1>
    <form id="dataForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Submit">
    </form>

    <div id="response"></div>

    <script>
        document.getElementById('dataForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(this);

            fetch('save.php', {
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