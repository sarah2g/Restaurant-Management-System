<div class="modal-overlay" id="confirm-modal">
    <div class="modal small">
        <div class="modal-header">
            <h3>
                <span class="icon-wrapper">
                    <svg viewBox="0 0 24 24">
                        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>
                        <line x1="12" y1="9" x2="12" y2="13"/>
                        <line x1="12" y1="17" x2="12.01" y2="17"/>
                    </svg>
                </span>
                Confirm Action
            </h3>
            <button class="modal-close" data-close-modal>
                <svg viewBox="0 0 24 24">
                    <line x1="18" y1="6" x2="6" y2="18"/>
                    <line x1="6" y1="6" x2="18" y2="18"/>
                </svg>
            </button>
        </div>
        <div class="modal-body">
            <div class="modal-confirm-icon danger">
                <svg viewBox="0 0 24 24">
                    <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>
                    <line x1="12" y1="9" x2="12" y2="13"/>
                    <line x1="12" y1="17" x2="12.01" y2="17"/>
                </svg>
            </div>
            <div class="modal-confirm-text">
                <h4>Are you sure?</h4>
                <p id="confirm-modal-message">This action cannot be undone. Do you want to proceed?</p>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-ghost" data-close-modal>Cancel</button>
            <button class="btn btn-danger" id="confirm-delete-btn" data-confirm="executeDelete">Delete</button>
        </div>
    </div>
</div>
