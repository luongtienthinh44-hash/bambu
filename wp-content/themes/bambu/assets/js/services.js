(function () {
    'use strict';

    document.querySelectorAll('[data-services-accordion]').forEach(function (accordion) {
        accordion.addEventListener('click', function (event) {
            var toggle = event.target.closest('.service-line-toggle');

            if (!toggle || !accordion.contains(toggle)) {
                return;
            }

            var currentLine = toggle.closest('.service-line');
            var currentPanel = currentLine ? currentLine.querySelector('.service-line-panel') : null;
            var isOpen = currentLine && currentLine.classList.contains('is-open');

            if (!currentLine || !currentPanel) {
                return;
            }

            accordion.querySelectorAll('.service-line').forEach(function (line) {
                var lineToggle = line.querySelector('.service-line-toggle');
                var lineIcon = line.querySelector('.service-line-icon');
                var linePanel = line.querySelector('.service-line-panel');

                line.classList.remove('is-open');
                if (lineToggle) {
                    lineToggle.setAttribute('aria-expanded', 'false');
                }
                if (lineIcon) {
                    lineIcon.textContent = '+';
                }
                if (linePanel) {
                    linePanel.hidden = true;
                }
            });

            if (!isOpen) {
                currentLine.classList.add('is-open');
                toggle.setAttribute('aria-expanded', 'true');
                var currentIcon = currentLine.querySelector('.service-line-icon');

                if (currentIcon) {
                    currentIcon.textContent = '−';
                }
                currentPanel.hidden = false;
            }
        });
    });
})();
