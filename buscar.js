document.addEventListener("DOMContentLoaded", function() {
    const searchBar = document.getElementById('searchBar');

    searchBar.addEventListener('keyup', function() {
        const searchTerm = searchBar.value.toLowerCase();
        const containers = document.querySelectorAll('.container');

        containers.forEach(container => {
            const title = container.querySelector('h3').textContent.toLowerCase();
            if (title.includes(searchTerm)) {
                container.style.display = '';
            } else {
                container.style.display = 'none';
            }
        });
    });
})
