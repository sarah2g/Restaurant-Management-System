document.addEventListener('DOMContentLoaded', () => {
    initializeSearch();
    initializeFilters();
});

function initializeSearch() {
    const searchInputs = document.querySelectorAll('[data-search]');

    searchInputs.forEach(input => {
        const targetSelector = input.getAttribute('data-search');
        const target = document.querySelector(targetSelector);

        if (!target) return;

        let debounceTimer;

        input.addEventListener('input', function () {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(() => {
                const query = this.value.toLowerCase().trim();
                const items = target.querySelectorAll('[data-search-item]');

                items.forEach(item => {
                    const searchText = (item.getAttribute('data-search-item') || item.textContent).toLowerCase();
                    const match = searchText.includes(query);

                    if (match) {
                        item.style.display = '';
                        item.style.animation = 'fadeIn 0.3s ease';
                    } else {
                        item.style.display = 'none';
                    }
                });

                const visibleItems = target.querySelectorAll('[data-search-item]:not([style*="display: none"])');
                const emptyState = target.querySelector('.search-empty-state');

                if (emptyState) {
                    emptyState.style.display = visibleItems.length === 0 ? 'block' : 'none';
                }
            }, 250);
        });
    });

    const sidebarSearch = document.querySelector('.navbar-search input');
    if (sidebarSearch) {
        sidebarSearch.addEventListener('input', function () {
            const query = this.value.toLowerCase().trim();
            const sidebarItems = document.querySelectorAll('.sidebar-item');

            sidebarItems.forEach(item => {
                const text = item.querySelector('.item-text');
                if (!text) return;
                const match = text.textContent.toLowerCase().includes(query);
                item.style.display = match || !query ? '' : 'none';
            });
        });
    }
}

function initializeFilters() {
    const filterSelects = document.querySelectorAll('[data-filter]');

    filterSelects.forEach(select => {
        const targetSelector = select.getAttribute('data-filter');
        const target = document.querySelector(targetSelector);

        if (!target) return;

        select.addEventListener('change', function () {
            const value = this.value.toLowerCase();
            const items = target.querySelectorAll('[data-filter-item]');

            items.forEach(item => {
                const filterValue = (item.getAttribute('data-filter-item') || '').toLowerCase();
                if (!value || filterValue === value) {
                    item.style.display = '';
                    item.style.animation = 'fadeIn 0.3s ease';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
}
