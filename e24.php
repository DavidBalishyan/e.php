<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Search</title>
</head>
<body>
    <h1>Live Search</h1>
    <input type="text" id="search" placeholder="Search users by name...">
    <div id="results"></div>

    <script>
        document.getElementById('search').addEventListener('input', function() {
            const query = this.value;

            fetch('search_e24.php?q=' + query)
                .then(response => response.json())
                .then(data => {
                    const resultsDiv = document.getElementById('results');
                    resultsDiv.innerHTML = '';

                    if (data.length > 0) {
                        data.forEach(user => {
                            const userDiv = document.createElement('div');
                            userDiv.textContent = `id: ${user.id} - Name: ${user.name} - Email: ${user.email}`;
                            resultsDiv.appendChild(userDiv);
                        });
                    } else {
                        resultsDiv.textContent = 'No results found';
                    }
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>