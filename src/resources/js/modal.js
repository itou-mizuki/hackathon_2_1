document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-modal]').forEach(modal => {
        const openBtn = modal.querySelector('[data-modal-open]');
        const overlay = modal.querySelector('[data-modal-overlay]');
        const closeBtn = modal.querySelector('[data-modal-close]');
        const content = modal.querySelector('[data-modal-content]');

        if (!openBtn || !overlay || !closeBtn || !content) return;

        const open = () => {
            overlay.classList.remove('hidden');
            overlay.setAttribute('aria-hidden', 'false');
            document.body.classList.add('overflow-hidden');
        };

        const close = () => {
            overlay.classList.add('hidden');
            overlay.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('overflow-hidden');
        };

        openBtn.addEventListener('click', open);
        closeBtn.addEventListener('click', close);

        // 背景クリックで閉じる
        overlay.addEventListener('click', close);

        // 中身クリックでは閉じない
        content.addEventListener('click', e => e.stopPropagation());

        // ESCキーで閉じる
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') close();
        });
    });
});
