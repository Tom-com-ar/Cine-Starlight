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

    searchBar.addEventListener('keyup', function() {
        const searchTerm = searchBar.value.toLowerCase();
        const containers = document.querySelectorAll('.container1');

        containers.forEach(container1 => {
            const title = container1.querySelector('h3').textContent.toLowerCase();
            if (title.includes(searchTerm)) {
                container1.style.display = '';
            } else {
                container1.style.display = 'none';
            }
        });

    });
})
