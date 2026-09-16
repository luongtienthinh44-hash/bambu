(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {
        var searchInput = document.querySelector('.challenge-search-input');
        var cards = Array.prototype.slice.call(document.querySelectorAll('.challenge-card'));
        var filterPills = Array.prototype.slice.call(document.querySelectorAll('.challenge-filter-pill'));
        var loadMoreButton = document.querySelector('.challenge-load-more button');
        var emptyState = document.querySelector('.challenge-empty');
        var activeFilter = 'all';
        var visibleLimit = 3;

        if (!cards.length) {
            if (emptyState) {
                emptyState.hidden = false;
            }
            if (loadMoreButton) {
                loadMoreButton.parentElement.hidden = true;
            }
            return;
        }

        function getMatches() {
            var query = searchInput ? searchInput.value.trim().toLowerCase() : '';

            return cards.filter(function (card) {
                var category = card.getAttribute('data-category') || '';
                var searchText = card.getAttribute('data-search') || '';
                var matchesFilter = activeFilter === 'all' || category.split(' ').indexOf(activeFilter) !== -1;
                var matchesSearch = !query || searchText.indexOf(query) !== -1;

                return matchesFilter && matchesSearch;
            });
        }

        function renderCards() {
            var matches = getMatches();

            cards.forEach(function (card) {
                card.hidden = true;
            });

            matches.slice(0, visibleLimit).forEach(function (card) {
                card.hidden = false;
            });

            if (emptyState) {
                emptyState.hidden = matches.length > 0;
            }

            if (loadMoreButton) {
                loadMoreButton.parentElement.hidden = matches.length <= visibleLimit;
            }
        }

        filterPills.forEach(function (pill) {
            pill.addEventListener('click', function () {
                activeFilter = pill.getAttribute('data-filter') || 'all';
                visibleLimit = 3;
                filterPills.forEach(function (item) {
                    item.classList.toggle('is-active', item === pill);
                });
                renderCards();
            });
        });

        if (searchInput) {
            searchInput.addEventListener('input', function () {
                visibleLimit = 3;
                renderCards();
            });
        }

        if (loadMoreButton) {
            loadMoreButton.addEventListener('click', function () {
                visibleLimit += 3;
                renderCards();
            });
        }

        document.querySelectorAll('.challenge-bookmark').forEach(function (button) {
            button.addEventListener('click', function () {
                var isBookmarked = button.classList.toggle('is-bookmarked');
                button.setAttribute('aria-pressed', isBookmarked ? 'true' : 'false');
            });
        });

        renderCards();
    });
}());
