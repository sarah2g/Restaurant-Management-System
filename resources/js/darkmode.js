document.addEventListener('DOMContentLoaded', () => {
    initializeDarkMode();
});

function initializeDarkMode() {
    const toggle = document.getElementById('darkmode-toggle');
    if (!toggle) return;

    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const storedTheme = localStorage.getItem('theme');

    if (storedTheme === 'dark' || (!storedTheme && prefersDark)) {
        document.body.classList.add('dark-mode');
        toggle.classList.add('active');
    }

    toggle.addEventListener('click', function () {
        const isDark = document.body.classList.toggle('dark-mode');
        this.classList.toggle('active');
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
        showToast(
            isDark ? 'Dark Mode Enabled' : 'Light Mode Enabled',
            'Theme preference has been saved.',
            'info'
        );
    });
}
