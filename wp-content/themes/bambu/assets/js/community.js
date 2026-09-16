(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {
        var searchInput = document.querySelector('#community-search');
        var filterButtons = Array.prototype.slice.call(document.querySelectorAll('.community-filter-pills button'));
        var sections = Array.prototype.slice.call(document.querySelectorAll('[data-content-section]'));

        function render() {
            var query = searchInput ? searchInput.value.trim().toLowerCase() : '';
            var activeFilter = document.querySelector('.community-filter-pills button.is-active');
            var filter = activeFilter ? activeFilter.getAttribute('data-filter') : 'all';

            sections.forEach(function (section) {
                var sectionType = section.getAttribute('data-content-section');
                var shouldShowSection = filter === 'all' || filter === sectionType;

                section.hidden = !shouldShowSection;
                if (!shouldShowSection || !query) {
                    section.querySelectorAll('[data-search]').forEach(function (item) {
                        item.hidden = !shouldShowSection;
                    });
                    return;
                }

                section.querySelectorAll('[data-search]').forEach(function (item) {
                    item.hidden = (item.getAttribute('data-search') || '').indexOf(query) === -1;
                });
            });
        }

        filterButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                filterButtons.forEach(function (item) {
                    item.classList.toggle('is-active', item === button);
                });
                render();
            });
        });

        if (searchInput) {
            searchInput.addEventListener('input', render);
        }

        render();
    });
}());
