document.addEventListener('DOMContentLoaded', function () {
    document.addEventListener('keydown', function (event) {
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');
        if (event.key === 'ArrowLeft') {
            sidebar.style.width = '0';
            mainContent.style.marginLeft = '0';
        } else if (event.key === 'ArrowRight') {
            sidebar.style.width = '250px';
            mainContent.style.marginLeft = '250px';
        }
    });
});
