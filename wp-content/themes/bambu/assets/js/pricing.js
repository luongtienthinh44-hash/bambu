/**
 * Interactions for the Pricing page.
 */
(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.pricing-faq-question').forEach(function (button) {
            button.addEventListener('click', function () {
                const item = button.closest('.pricing-faq-item');
                const answer = item ? item.querySelector('.pricing-faq-answer') : null;
                const icon = button.querySelector('strong');

                if (!answer) {
                    return;
                }

                const isOpen = button.getAttribute('aria-expanded') === 'true';
                button.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
                item.classList.toggle('is-open', !isOpen);
                answer.hidden = isOpen;

                if (icon) {
                    icon.textContent = isOpen ? '+' : '−';
                }
            });
        });
    });
}());
