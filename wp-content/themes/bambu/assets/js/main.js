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

const primaryNavigation = document.querySelector('.bambu-page .primary-navigation');
const megaMenuDefinitions = [
    {
        panel: '.mega-menu-panel-about',
        matches: function (link) {
            return link.textContent.trim().toLowerCase() === 'about us' || link.href.includes('/about-us/');
        },
    },
    {
        panel: '.mega-menu-panel-innovation',
        matches: function (link) {
            return link.textContent.trim().toLowerCase() === 'innovation' || link.href.includes('/innovation-intelligence/');
        },
    },
    {
        panel: '.mega-menu-panel-services',
        matches: function (link) {
            return link.textContent.trim().toLowerCase() === 'our services' || link.href.includes('/our-services/');
        },
    },
    {
        panel: '.mega-menu-panel-data-report',
        matches: function (link) {
            const label = link.textContent.trim().toLowerCase();
            return label === 'data & report' || label === 'data & reports' || link.href.includes('/data-report/');
        },
    },
];

if (primaryNavigation && siteHeader) {
    let closeTimer;
    const controllers = megaMenuDefinitions.map(function (definition) {
        const panel = document.querySelector(`.bambu-page ${definition.panel}`);
        const menuLink = Array.from(primaryNavigation.querySelectorAll(':scope > li > a')).find(definition.matches);
        const menuItem = menuLink ? menuLink.parentElement : null;

        return { panel, menuItem, menuLink };
    }).filter(function (controller) {
        return controller.panel && controller.menuItem && controller.menuLink;
    });

    const closeMegaMenus = function () {
        siteHeader.classList.remove('is-mega-menu-open');

        controllers.forEach(function (controller) {
            controller.panel.classList.remove('is-active');
            controller.panel.setAttribute('aria-hidden', 'true');
            controller.menuItem.classList.remove('is-mega-menu-active');
            controller.menuLink.setAttribute('aria-expanded', 'false');
        });
    };

    const openMegaMenu = function (activeController) {
        window.clearTimeout(closeTimer);
        siteHeader.classList.add('is-mega-menu-open');

        controllers.forEach(function (controller) {
            const isActive = controller === activeController;
            controller.panel.classList.toggle('is-active', isActive);
            controller.panel.setAttribute('aria-hidden', String(!isActive));
            controller.menuItem.classList.toggle('is-mega-menu-active', isActive);
            controller.menuLink.setAttribute('aria-expanded', String(isActive));
        });
    };

    const scheduleClose = function () {
        window.clearTimeout(closeTimer);
        closeTimer = window.setTimeout(closeMegaMenus, 160);
    };

    controllers.forEach(function (controller) {
        controller.menuItem.classList.add('has-mega-menu');
        controller.menuItem.addEventListener('mouseenter', function () {
            openMegaMenu(controller);
        });
        controller.menuItem.addEventListener('mouseleave', scheduleClose);
        controller.menuLink.setAttribute('aria-haspopup', 'true');
        controller.menuLink.setAttribute('aria-expanded', 'false');
        controller.menuLink.addEventListener('focus', function () {
            openMegaMenu(controller);
        });
        controller.panel.addEventListener('mouseenter', function () {
            openMegaMenu(controller);
        });
        controller.panel.addEventListener('mouseleave', scheduleClose);
    });

    siteHeader.addEventListener('mouseleave', scheduleClose);

    siteHeader.addEventListener('focusout', function (event) {
        if (!siteHeader.contains(event.relatedTarget)) {
            scheduleClose();
        }
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth < 1200) {
            closeMegaMenus();
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
