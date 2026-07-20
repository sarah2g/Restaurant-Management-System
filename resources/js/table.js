document.addEventListener('DOMContentLoaded', () => {
    initializeTableSort();
    initializePagination();
    initializeRowClick();
});

function initializeTableSort() {
    document.querySelectorAll('.table[data-sortable] th').forEach(header => {
        header.addEventListener('click', function () {
            const table = this.closest('.table');
            const tbody = table.querySelector('tbody');
            const column = Array.from(this.parentElement.children).indexOf(this);
            const isAsc = this.classList.contains('sort-asc');

            table.querySelectorAll('th').forEach(th => {
                th.classList.remove('sort-asc', 'sort-desc');
            });

            this.classList.toggle('sort-asc', !isAsc);
            this.classList.toggle('sort-desc', isAsc);

            const rows = Array.from(tbody.querySelectorAll('tr'));
            const direction = isAsc ? -1 : 1;

            rows.sort((a, b) => {
                const aText = a.children[column]?.textContent?.trim() || '';
                const bText = b.children[column]?.textContent?.trim() || '';

                const aNum = parseFloat(aText.replace(/[^0-9.-]/g, ''));
                const bNum = parseFloat(bText.replace(/[^0-9.-]/g, ''));

                if (!isNaN(aNum) && !isNaN(bNum)) {
                    return (aNum - bNum) * direction;
                }

                return aText.localeCompare(bText) * direction;
            });

            rows.forEach(row => tbody.appendChild(row));
        });
    });
}

function initializePagination() {
    document.querySelectorAll('[data-pagination]').forEach(container => {
        const table = container.getAttribute('data-pagination');
        const tbody = document.querySelector(`${table} tbody`);
        if (!tbody) return;

        const rows = Array.from(tbody.querySelectorAll('tr'));
        const perPage = parseInt(container.getAttribute('data-per-page')) || 10;
        let currentPage = 1;
        const totalPages = Math.ceil(rows.length / perPage);

        function showPage(page) {
            currentPage = page;
            const start = (page - 1) * perPage;
            const end = start + perPage;

            rows.forEach((row, index) => {
                row.style.display = (index >= start && index < end) ? '' : 'none';
            });

            container.querySelectorAll('.page-btn').forEach(btn => {
                const pageNum = parseInt(btn.getAttribute('data-page'));
                btn.classList.toggle('active', pageNum === page);
                btn.disabled = pageNum === page;
            });

            const prevBtn = container.querySelector('.prev-btn');
            const nextBtn = container.querySelector('.next-btn');
            if (prevBtn) prevBtn.disabled = page === 1;
            if (nextBtn) nextBtn.disabled = page === totalPages;
        }

        const paginationHtml = `
            <div class="pagination-info">
                Showing ${Math.min(perPage, rows.length)} of ${rows.length} entries
            </div>
            <div class="pagination-buttons">
                <button class="btn btn-sm btn-ghost prev-btn" ${currentPage === 1 ? 'disabled' : ''}>
                    <svg viewBox="0 0 24 24"><polyline points="15 18 9 12 15 6"/></svg>
                    Previous
                </button>
                ${Array.from({ length: totalPages }, (_, i) => `
                    <button class="btn btn-sm ${i + 1 === currentPage ? 'btn-primary' : 'btn-ghost'} page-btn"
                            data-page="${i + 1}">${i + 1}</button>
                `).join('')}
                <button class="btn btn-sm btn-ghost next-btn" ${currentPage === totalPages ? 'disabled' : ''}>
                    Next
                    <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
                </button>
            </div>
        `;

        const paginationDiv = document.createElement('div');
        paginationDiv.className = 'pagination';
        paginationDiv.innerHTML = paginationHtml;
        container.appendChild(paginationDiv);

        paginationDiv.querySelectorAll('.page-btn').forEach(btn => {
            btn.addEventListener('click', () => showPage(parseInt(btn.getAttribute('data-page'))));
        });

        const prevBtnEl = paginationDiv.querySelector('.prev-btn');
        const nextBtnEl = paginationDiv.querySelector('.next-btn');

        if (prevBtnEl) {
            prevBtnEl.addEventListener('click', () => {
                if (currentPage > 1) showPage(currentPage - 1);
            });
        }

        if (nextBtnEl) {
            nextBtnEl.addEventListener('click', () => {
                if (currentPage < totalPages) showPage(currentPage + 1);
            });
        }

        showPage(1);
    });
}

function initializeRowClick() {
    document.querySelectorAll('.table[data-row-click] tbody tr').forEach(row => {
        row.style.cursor = 'pointer';
        row.addEventListener('click', function (e) {
            if (e.target.closest('.actions, .action-btn, .btn, select, input')) return;
            const link = this.getAttribute('data-href');
            if (link) window.location.href = link;
        });
    });
}
