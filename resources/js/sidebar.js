document.addEventListener('DOMContentLoaded', () => {
    initializeSidebar();
});

function initializeSidebar() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebar-overlay');
    const toggleBtn = document.getElementById('sidebar-toggle');
    const isMobile = () => window.innerWidth <= 1024;

    function toggleSidebar() {
        if (isMobile()) {
            sidebar.classList.toggle('open');
            overlay.classList.toggle('active');
            document.body.style.overflow = sidebar.classList.contains('open') ? 'hidden' : '';
        } else {
            sidebar.classList.toggle('collapsed');
            const mainContent = document.querySelector('.main-content, .content-wrapper');
            const navbar = document.querySelector('.navbar');
            if (mainContent) mainContent.classList.toggle('expanded');
            if (navbar) navbar.classList.toggle('expanded');
        }
    }

    if (toggleBtn) {
        toggleBtn.addEventListener('click', toggleSidebar);
    }

    if (overlay) {
        overlay.addEventListener('click', () => {
            sidebar.classList.remove('open');
            overlay.classList.remove('active');
            document.body.style.overflow = '';
        });
    }

    if (!isMobile()) {
        sidebar.classList.remove('open');
        sidebar.classList.add('collapsed');
        const mainContent = document.querySelector('.main-content, .content-wrapper');
        const navbar = document.querySelector('.navbar');
        if (mainContent) mainContent.classList.add('expanded');
        if (navbar) navbar.classList.add('expanded');
    }

    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            if (!isMobile()) {
                sidebar.classList.remove('open');
                if (overlay) overlay.classList.remove('active');
                document.body.style.overflow = '';
            }
        }, 200);
    });

    document.querySelectorAll('.sidebar-item').forEach(item => {
        item.addEventListener('click', function () {
            const link = this.getAttribute('data-href');
            if (link && link !== '#') {
                window.location.href = link;
            }
        });
    });
}
