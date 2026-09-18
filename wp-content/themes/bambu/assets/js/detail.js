/**
 * Interactions for the Innovation Need detail page.
 */
(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {
        const page = document.querySelector('.bambu-detail-page');

        if (!page) {
            return;
        }

        page.querySelectorAll('.tab-btn').forEach(function (button) {
            button.addEventListener('click', function () {
                page.querySelectorAll('.tab-btn').forEach(function (tab) {
                    tab.classList.toggle('active', tab === button);
                });
            });
        });

        page.querySelectorAll('.save-btn, .save-opp-btn, .rel-save').forEach(function (button) {
            button.setAttribute('aria-pressed', 'false');

            button.addEventListener('click', function () {
                const saved = button.classList.toggle('is-saved');
                button.setAttribute('aria-pressed', saved ? 'true' : 'false');

                if (button.classList.contains('save-btn') || button.classList.contains('save-opp-btn')) {
                    button.childNodes[0].textContent = saved ? bambuL10n.savedOpportunity : bambuL10n.saveOpportunity;
                }
            });
        });

        page.querySelectorAll('.req-conn-btn, .rel-connect').forEach(function (button) {
            button.addEventListener('click', function () {
                button.textContent = bambuL10n.requestSent;
                button.disabled = true;
                button.setAttribute('aria-pressed', 'true');
            });
        });

        page.querySelectorAll('.faq-item').forEach(function (item) {
            item.setAttribute('role', 'button');
            item.setAttribute('tabindex', '0');
            item.setAttribute('aria-expanded', 'false');

            const toggleFaq = function () {
                const expanded = item.getAttribute('aria-expanded') === 'true';
                item.setAttribute('aria-expanded', expanded ? 'false' : 'true');
                item.classList.toggle('is-open', !expanded);
            };

            item.addEventListener('click', toggleFaq);
            item.addEventListener('keydown', function (event) {
                if (event.key === 'Enter' || event.key === ' ') {
                    event.preventDefault();
                    toggleFaq();
                }
            });
        });
    });
}());
