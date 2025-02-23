document.getElementById('countButton').addEventListener('click', () => {
    fetch('countUsers.php')
        .then(response => response.json())
        .then(data => {
            document.getElementById('totalUsers').innerText = `Total users: ${data.total}`;
        })
        .catch(error => console.error('Error:', error));
});