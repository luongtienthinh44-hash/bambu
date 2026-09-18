document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.innovation-as-a-service-page').forEach((page) => {
        const tabs = [...page.querySelectorAll('[data-iaas-tab]')];
        const panels = [...page.querySelectorAll('[data-iaas-panel]')];

        tabs.forEach((tab) => {
            tab.addEventListener('click', () => {
                const selectedIndex = tab.dataset.iaasTab;

                tabs.forEach((item) => {
                    const isActive = item === tab;
                    item.classList.toggle('is-active', isActive);
                    item.setAttribute('aria-selected', isActive ? 'true' : 'false');
                });

                panels.forEach((panel) => {
                    const isActive = panel.dataset.iaasPanel === selectedIndex;
                    panel.hidden = !isActive;
                    panel.classList.toggle('is-active', isActive);
                });
            });
        });
    });
});
