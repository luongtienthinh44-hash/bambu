/**
 * BambuUP front-end interactions.
 *
 * Custom behaviour belongs here so WordPress can load it through wp_enqueue_script().
 */
document.documentElement.classList.add('js');

const bambuPage = document.querySelector('.bambu-page');
const siteHeader = document.querySelector('.bambu-page .site-header');

if (bambuPage && siteHeader) {
    const syncHeaderHeight = function () {
        bambuPage.style.setProperty('--bambu-header-height', `${siteHeader.getBoundingClientRect().height}px`);
    };

    syncHeaderHeight();
    window.addEventListener('resize', syncHeaderHeight, { passive: true });

    if ('ResizeObserver' in window) {
        new ResizeObserver(syncHeaderHeight).observe(siteHeader);
    }
}

const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');

if (mobileMenuToggle && siteHeader) {
    mobileMenuToggle.addEventListener('click', function () {
        const isOpen = siteHeader.classList.toggle('is-menu-open');
        mobileMenuToggle.setAttribute('aria-expanded', String(isOpen));
    });

    siteHeader.addEventListener('click', function (event) {
        if (event.target.closest('.primary-navigation a')) {
            siteHeader.classList.remove('is-menu-open');
            mobileMenuToggle.setAttribute('aria-expanded', 'false');
        }
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth > 767) {
            siteHeader.classList.remove('is-menu-open');
            mobileMenuToggle.setAttribute('aria-expanded', 'false');
        }
    }, { passive: true });
}

document.addEventListener('click', function (event) {
    const actionButton = event.target.closest('[data-action-url]');

    if (!actionButton) {
        return;
    }

    const actionUrl = actionButton.getAttribute('data-action-url');

    if (actionUrl) {
        window.location.assign(actionUrl);
    }
});
