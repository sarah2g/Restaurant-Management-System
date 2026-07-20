document.addEventListener('DOMContentLoaded', () => {
    initializeOrderStatus();
});

function initializeOrderStatus() {
    const statusSelects = document.querySelectorAll('.order-status-select');

    statusSelects.forEach(select => {
        select.addEventListener('change', function () {
            const newStatus = this.value;
            const orderId = this.getAttribute('data-order-id');
            const badge = this.closest('tr')?.querySelector('.status-badge');

            if (badge) {
                const statusClasses = ['pending', 'preparing', 'ready', 'delivered', 'cancelled'];
                statusClasses.forEach(cls => badge.classList.remove(cls));
                badge.classList.add(newStatus);

                const dot = badge.querySelector('.dot');
                const text = badge.querySelector('.status-text');
                if (text) {
                    text.textContent = newStatus.charAt(0).toUpperCase() + newStatus.slice(1);
                }
            }

            showToast(
                'Order Updated',
                `Order #${orderId} has been updated to ${newStatus}.`,
                newStatus === 'cancelled' ? 'error' : 'success'
            );
        });
    });
}
