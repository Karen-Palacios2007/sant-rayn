document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.querySelector('#product-search');
    const filterButtons = document.querySelectorAll('.filter-button');
    const productCards = document.querySelectorAll(
        '.products-grid .product-card'
    );

    if (!searchInput || filterButtons.length === 0 || productCards.length === 0) {
        return;
    }

    let activeFilter = 'todos';

    const normalizeText = (text) =>
        text
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '')
            .toLocaleLowerCase('es');

    const updateProducts = () => {
        const searchTerm = normalizeText(searchInput.value.trim());

        productCards.forEach((card) => {
            const category = normalizeText(
                card.querySelector('.product-category')?.textContent ?? ''
            );
            const productText = normalizeText(card.textContent);

            const matchesCategory =
                activeFilter === 'todos' || category.includes(activeFilter);
            const matchesSearch = productText.includes(searchTerm);

            card.hidden = !(matchesCategory && matchesSearch);
        });
    };

    filterButtons.forEach((button) => {
        button.addEventListener('click', () => {
            activeFilter = button.dataset.filter;

            filterButtons.forEach((filterButton) => {
                const isActive = filterButton === button;
                filterButton.classList.toggle('is-active', isActive);
                filterButton.setAttribute('aria-pressed', String(isActive));
            });

            updateProducts();
        });
    });

    searchInput.addEventListener('input', updateProducts);
});
