document.addEventListener('DOMContentLoaded', () => {
    initializeDropdowns();
});

function initializeDropdowns() {
    document.addEventListener('click', function (e) {
        const dropdown = e.target.closest('[data-dropdown]');
        if (!dropdown) {
            document.querySelectorAll('.dropdown-menu.active').forEach(menu => {
                menu.classList.remove('active');
            });
            return;
        }

        const menu = dropdown.querySelector('.dropdown-menu');
        if (menu) {
            menu.classList.toggle('active');
            e.stopPropagation();
        }
    });

    document.querySelectorAll('.dropdown-menu a, .dropdown-menu button').forEach(item => {
        item.addEventListener('click', function (e) {
            const menu = this.closest('.dropdown-menu');
            if (menu) {
                menu.classList.remove('active');
            }
        });
    });
}
