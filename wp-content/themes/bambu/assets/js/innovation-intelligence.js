/**
 * Interactions for the Innovation Intelligence page.
 */
(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {
        const page = document.querySelector('.innovation-intelligence-page');

        if (!page) {
            return;
        }

        const tabs = Array.from(page.querySelectorAll('.tab'));
        const cardGrid = page.querySelector('.card-grid');
        const cards = Array.from(page.querySelectorAll('.card-grid .card'));
        const searchInput = page.querySelector('.search-input');
        const clearFilters = page.querySelector('.clear-filters');
        const pagination = page.querySelector('.pagination-wrap');
        const pageNumbers = pagination ? pagination.querySelector('.page-numbers') : null;
        const pageNavigation = pagination ? Array.from(pagination.querySelectorAll('.page-nav')) : [];
        const pageInput = pagination ? pagination.querySelector('input[type="number"]') : null;
        const paginationTotal = pagination ? pagination.querySelector('.pagination-total') : null;
        const categoryWrap = page.querySelector('.category-filter-wrap');
        const categoryButton = categoryWrap ? categoryWrap.querySelector('.filter-btn') : null;
        const categoryDropdown = categoryWrap ? categoryWrap.querySelector('.dropdown') : null;
        const subcategoryWrap = page.querySelector('.subcategory-filter-wrap');
        const subcategoryButton = subcategoryWrap ? subcategoryWrap.querySelector('.filter-btn') : null;
        const subcategoryDropdown = subcategoryWrap ? subcategoryWrap.querySelector('.dropdown') : null;
        const pageSize = Number(cardGrid?.dataset.pageSize) || 9;
        const state = {
            tab: tabs.find(function (tab) { return tab.classList.contains('active'); })?.dataset.type || 'all',
            query: '',
            categories: [],
            subcategories: [],
            currentPage: 1,
            totalPages: 1,
        };

        cards.forEach(function (card) {
            const bookmark = card.querySelector('.card-bookmark');
            if (bookmark) {
                bookmark.setAttribute('role', 'button');
                bookmark.setAttribute('tabindex', '0');
                bookmark.setAttribute('aria-label', 'Save opportunity');
            }
        });

        function getMatchingCards() {
            return cards.filter(function (card) {
                const cardCategories = (card.dataset.categories || '').split(/\s+/).filter(Boolean);
                const matchesTab = state.tab === 'all' || card.dataset.type === state.tab;
                const matchesCategory = !state.categories.length || state.categories.some(function (category) {
                    return cardCategories.includes(category);
                });
                const matchesSubcategory = !state.subcategories.length || state.subcategories.some(function (subcategory) {
                    return cardCategories.includes(subcategory);
                });
                const matchesQuery = !state.query || card.textContent.toLowerCase().includes(state.query);

                return matchesTab && matchesCategory && matchesSubcategory && matchesQuery;
            });
        }

        function renderPagination(matchingCards) {
            state.totalPages = Math.max(1, Math.ceil(matchingCards.length / pageSize));
            state.currentPage = Math.min(state.currentPage, state.totalPages);

            const firstVisibleCard = (state.currentPage - 1) * pageSize;
            const lastVisibleCard = firstVisibleCard + pageSize;

            cards.forEach(function (card) {
                const matchingIndex = matchingCards.indexOf(card);
                const visible = matchingIndex >= firstVisibleCard && matchingIndex < lastVisibleCard;

                card.hidden = false;
                card.classList.toggle('is-filtered-out', !visible);
                card.setAttribute('aria-hidden', visible ? 'false' : 'true');
            });

            if (pageNumbers) {
                const visiblePages = state.totalPages <= 5
                    ? Array.from({ length: state.totalPages }, function (_, index) { return index + 1; })
                    : state.currentPage <= 3
                        ? [1, 2, 3, 'ellipsis', state.totalPages]
                        : state.currentPage >= state.totalPages - 2
                            ? [1, 'ellipsis', state.totalPages - 2, state.totalPages - 1, state.totalPages]
                            : [1, 'ellipsis', state.currentPage, 'ellipsis', state.totalPages];

                pageNumbers.innerHTML = visiblePages.map(function (pageNumber) {
                    if (pageNumber === 'ellipsis') {
                        return '<span class="pagination-ellipsis" aria-hidden="true">...</span>';
                    }

                    const active = pageNumber === state.currentPage;
                    return '<button class="page-btn' + (active ? ' active' : '') + '" type="button" data-page="' + pageNumber + '" aria-current="' + (active ? 'page' : 'false') + '">' + pageNumber + '</button>';
                }).join('');
            }

            if (pageInput) {
                pageInput.value = String(state.currentPage);
                pageInput.max = String(state.totalPages);
            }

            if (paginationTotal) {
                paginationTotal.textContent = String(state.totalPages);
            }

            if (pageNavigation.length >= 2) {
                const previous = pageNavigation[0];
                const next = pageNavigation[pageNavigation.length - 1];

                previous.classList.toggle('is-disabled', state.currentPage <= 1);
                next.classList.toggle('is-disabled', state.currentPage >= state.totalPages);
                previous.setAttribute('aria-disabled', state.currentPage <= 1 ? 'true' : 'false');
                next.setAttribute('aria-disabled', state.currentPage >= state.totalPages ? 'true' : 'false');
            }

            let emptyState = page.querySelector('.innovation-empty-state');
            if (!matchingCards.length) {
                if (!emptyState) {
                    emptyState = document.createElement('p');
                    emptyState.className = 'innovation-empty-state';
                    emptyState.textContent = 'No opportunities match your filters.';
                    page.querySelector('.card-grid')?.before(emptyState);
                }
                emptyState.hidden = false;
            } else if (emptyState) {
                emptyState.hidden = true;
            }
        }

        function updateResults() {
            renderPagination(getMatchingCards());
        }

        function updateSubcategoryOptions() {
            if (!subcategoryButton || !subcategoryDropdown || !subcategoryWrap) {
                return;
            }

            const visibleSubcategories = [];
            subcategoryDropdown.querySelectorAll('.checkbox-label').forEach(function (label) {
                const isVisible = state.categories.includes(label.dataset.parent);
                label.hidden = !isVisible;

                if (isVisible) {
                    visibleSubcategories.push(label.dataset.category);
                } else {
                    const checkbox = label.querySelector('.custom-checkbox');
                    checkbox?.classList.remove('checked');
                    checkbox?.setAttribute('aria-checked', 'false');
                }
            });

            state.subcategories = state.subcategories.filter(function (subcategory) {
                return visibleSubcategories.includes(subcategory);
            });

            const enabled = visibleSubcategories.length > 0;
            subcategoryButton.disabled = !enabled;
            subcategoryButton.setAttribute('aria-disabled', enabled ? 'false' : 'true');
            subcategoryWrap.classList.toggle('is-disabled', !enabled);

            if (!enabled) {
                subcategoryDropdown.classList.add('is-collapsed');
                subcategoryButton.setAttribute('aria-expanded', 'false');
            }
        }

        function setActiveTab(tabSlug) {
            state.tab = tabSlug;
            state.currentPage = 1;

            tabs.forEach(function (tab) {
                const isActive = (tab.dataset.type || 'all') === tabSlug;
                tab.classList.toggle('active', isActive);
                tab.setAttribute('aria-selected', isActive ? 'true' : 'false');
            });

            updateResults();
        }

        tabs.forEach(function (tab) {
            tab.setAttribute('role', 'tab');
            tab.setAttribute('tabindex', '0');
            tab.setAttribute('aria-selected', tab.classList.contains('active') ? 'true' : 'false');

            tab.addEventListener('click', function () {
                setActiveTab(tab.dataset.type || 'all');
            });

            tab.addEventListener('keydown', function (event) {
                if (event.key === 'Enter' || event.key === ' ') {
                    event.preventDefault();
                    setActiveTab(tab.dataset.type || 'all');
                }
            });
        });

        if (searchInput) {
            searchInput.addEventListener('input', function () {
                state.query = searchInput.value.trim().toLowerCase();
                state.currentPage = 1;
                updateResults();
            });
        }

        if (clearFilters) {
            clearFilters.setAttribute('role', 'button');
            clearFilters.setAttribute('tabindex', '0');

            const resetFilters = function () {
                if (searchInput) {
                    searchInput.value = '';
                }

                state.query = '';
                state.categories = [];
                state.subcategories = [];
                state.currentPage = 1;
                setActiveTab('all');

                categoryDropdown?.querySelectorAll('.custom-checkbox.checked').forEach(function (checkbox) {
                    checkbox.classList.remove('checked');
                    checkbox.setAttribute('aria-checked', 'false');
                });

                subcategoryDropdown?.querySelectorAll('.custom-checkbox.checked').forEach(function (checkbox) {
                    checkbox.classList.remove('checked');
                    checkbox.setAttribute('aria-checked', 'false');
                });
                updateSubcategoryOptions();
            };

            clearFilters.addEventListener('click', resetFilters);
            clearFilters.addEventListener('keydown', function (event) {
                if (event.key === 'Enter' || event.key === ' ') {
                    event.preventDefault();
                    resetFilters();
                }
            });
        }

        if (categoryButton && categoryDropdown) {
            categoryDropdown.classList.add('is-collapsed');
            categoryButton.setAttribute('aria-expanded', 'false');

            categoryButton.addEventListener('click', function () {
                const isCollapsed = categoryDropdown.classList.toggle('is-collapsed');
                categoryButton.setAttribute('aria-expanded', isCollapsed ? 'false' : 'true');
            });

            categoryDropdown.querySelectorAll('.checkbox-label').forEach(function (label) {
                const checkbox = label.querySelector('.custom-checkbox');

                if (!checkbox) {
                    return;
                }

                checkbox.setAttribute('role', 'checkbox');
                checkbox.setAttribute('aria-checked', checkbox.classList.contains('checked') ? 'true' : 'false');

                label.addEventListener('click', function () {
                    const checked = checkbox.classList.toggle('checked');
                    checkbox.setAttribute('aria-checked', checked ? 'true' : 'false');

                    const category = label.dataset.category;
                    if (checked && category && !state.categories.includes(category)) {
                        state.categories.push(category);
                    } else {
                        state.categories = state.categories.filter(function (item) { return item !== category; });
                    }

                    updateSubcategoryOptions();
                    state.currentPage = 1;
                    updateResults();
                });
            });
        }

        if (subcategoryButton && subcategoryDropdown) {
            subcategoryButton.addEventListener('click', function () {
                const isCollapsed = subcategoryDropdown.classList.toggle('is-collapsed');
                subcategoryButton.setAttribute('aria-expanded', isCollapsed ? 'false' : 'true');
            });

            subcategoryDropdown.querySelectorAll('.checkbox-label').forEach(function (label) {
                const checkbox = label.querySelector('.custom-checkbox');

                if (!checkbox) {
                    return;
                }

                checkbox.setAttribute('role', 'checkbox');
                checkbox.setAttribute('aria-checked', 'false');

                label.addEventListener('click', function () {
                    const checked = checkbox.classList.toggle('checked');
                    const subcategory = label.dataset.category;
                    checkbox.setAttribute('aria-checked', checked ? 'true' : 'false');

                    if (checked && subcategory && !state.subcategories.includes(subcategory)) {
                        state.subcategories.push(subcategory);
                    } else {
                        state.subcategories = state.subcategories.filter(function (item) { return item !== subcategory; });
                    }

                    state.currentPage = 1;
                    updateResults();
                });
            });
        }

        updateSubcategoryOptions();

        document.addEventListener('click', function (event) {
            if (categoryWrap && categoryDropdown && !categoryWrap.contains(event.target)) {
                categoryDropdown.classList.add('is-collapsed');
                categoryButton?.setAttribute('aria-expanded', 'false');
            }

            if (subcategoryWrap && subcategoryDropdown && !subcategoryWrap.contains(event.target)) {
                subcategoryDropdown.classList.add('is-collapsed');
                subcategoryButton?.setAttribute('aria-expanded', 'false');
            }
        });

        pageNumbers?.addEventListener('click', function (event) {
            const button = event.target.closest('.page-btn');
            const pageNumber = button ? Number(button.dataset.page) : 0;

            if (pageNumber >= 1 && pageNumber <= state.totalPages) {
                state.currentPage = pageNumber;
                updateResults();
            }
        });

        if (pageNavigation.length >= 2) {
            pageNavigation[0].setAttribute('role', 'button');
            pageNavigation[0].setAttribute('tabindex', '0');
            pageNavigation[pageNavigation.length - 1].setAttribute('role', 'button');
            pageNavigation[pageNavigation.length - 1].setAttribute('tabindex', '0');

            pageNavigation[0].addEventListener('click', function () {
                if (state.currentPage > 1) {
                    state.currentPage -= 1;
                    updateResults();
                }
            });

            pageNavigation[pageNavigation.length - 1].addEventListener('click', function () {
                if (state.currentPage < state.totalPages) {
                    state.currentPage += 1;
                    updateResults();
                }
            });
        }

        pageInput?.addEventListener('change', function () {
            const requestedPage = Number(pageInput.value);

            if (Number.isInteger(requestedPage)) {
                state.currentPage = Math.max(1, Math.min(requestedPage, state.totalPages));
                updateResults();
            }
        });

        page.querySelectorAll('.card-bookmark').forEach(function (bookmark) {
            const toggleBookmark = function () {
                const saved = bookmark.classList.toggle('is-bookmarked');
                bookmark.setAttribute('aria-pressed', saved ? 'true' : 'false');
                bookmark.setAttribute('aria-label', saved ? 'Remove saved opportunity' : 'Save opportunity');
            };

            bookmark.addEventListener('click', toggleBookmark);
            bookmark.addEventListener('keydown', function (event) {
                if (event.key === 'Enter' || event.key === ' ') {
                    event.preventDefault();
                    toggleBookmark();
                }
            });
        });

        page.querySelectorAll('.connect-btn').forEach(function (button) {
            button.addEventListener('click', function () {
                button.textContent = 'Connected';
                button.disabled = true;
                button.setAttribute('aria-pressed', 'true');
            });
        });

        page.querySelectorAll('.view-details[href="#"]').forEach(function (link) {
            link.addEventListener('click', function (event) {
                event.preventDefault();
            });
        });

        updateResults();
    });
}());
