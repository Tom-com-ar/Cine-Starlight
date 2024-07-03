document.addEventListener("DOMContentLoaded", () => {
    const searchForm = document.getElementById('searchForm');
    const searchInput = document.getElementById('searchInput');
    const containers = document.querySelectorAll('.container');

    searchForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const query = searchInput.value.toLowerCase();
        containers.forEach(container => {
            const title = container.dataset.title.toLowerCase();
            const genres = container.dataset.genres.toLowerCase();
            if (title.includes(query) || genres.includes(query)) {
                container.style.display = 'block';
            } else {
                container.style.display = 'none';
            }
        });
    });
});