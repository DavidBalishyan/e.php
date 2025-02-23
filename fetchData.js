document.addEventListener('DOMContentLoaded', () =>  {
    fetch('getData.php')
        .then(response => response.json())
        .then(data => {
            const dataDiv = document.getElementById('data');
            dataDiv.innerHTML = '';

            if (data.length > 0) {
                data.forEach(item => {
                    const itemDiv = document.createElement('div');
                    itemDiv.textContent = `id: ${item.id} - Name: ${item.name} - Email: ${item.email}`;
                    dataDiv.appendChild(itemDiv);
                });
            } else {
                dataDiv.textContent = 'No data found';
            }
        })
        .catch(error => console.error('Error:', error));
});