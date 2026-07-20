document.addEventListener('DOMContentLoaded', () => {
    initializeModals();
});

function initializeModals() {
    window.openModal = function (modalId) {
        const modal = document.getElementById(modalId);
        if (!modal) return;

        modal.classList.add('active');
        document.body.style.overflow = 'hidden';

        modal.addEventListener('click', function (e) {
            if (e.target === this) {
                closeModal(modalId);
            }
        });

        document.addEventListener('keydown', function handler(e) {
            if (e.key === 'Escape') {
                closeModal(modalId);
                document.removeEventListener('keydown', handler);
            }
        });
    };

    window.closeModal = function (modalId) {
        const modal = document.getElementById(modalId);
        if (!modal) return;

        modal.classList.remove('active');
        document.body.style.overflow = '';
    };

    document.querySelectorAll('[data-modal]').forEach(trigger => {
        trigger.addEventListener('click', function (e) {
            e.preventDefault();
            const modalId = this.getAttribute('data-modal');
            openModal(modalId);
        });
    });

    document.querySelectorAll('[data-close-modal]').forEach(btn => {
        btn.addEventListener('click', function () {
            const modal = this.closest('.modal-overlay');
            if (modal) {
                closeModal(modal.id);
            }
        });
    });

    document.querySelectorAll('[data-confirm]').forEach(btn => {
        btn.addEventListener('click', function () {
            const callback = this.getAttribute('data-confirm');
            if (window[callback] && typeof window[callback] === 'function') {
                window[callback]();
            }
            const modal = this.closest('.modal-overlay');
            if (modal) {
                closeModal(modal.id);
            }
        });
    });
}
