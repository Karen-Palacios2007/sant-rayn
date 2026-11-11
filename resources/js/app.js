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

document.addEventListener('DOMContentLoaded', () => {
    const detailDialog = document.querySelector('#product-detail-dialog');
    const detailButtons = document.querySelectorAll('[data-product-details]');

    const dialogImage = document.querySelector('#product-dialog-image');
    const dialogCategory = document.querySelector('#product-dialog-category');
    const dialogTitle = document.querySelector('#product-dialog-title');
    const dialogPrice = document.querySelector('#product-dialog-price');

    if (
        !detailDialog ||
        !dialogImage ||
        !dialogCategory ||
        !dialogTitle ||
        !dialogPrice
    ) {
        return;
    }

    detailButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const productCard = button.closest('.product-card');

            if (!productCard) {
                return;
            }

            const productImage = productCard.querySelector('.product-image img');
            const productCategory = productCard.querySelector('.product-category');
            const productName = productCard.querySelector('.product-name');
            const productPrice = productCard.querySelector('.product-price');

            if (!productImage || !productCategory || !productName || !productPrice) {
                return;
            }

            dialogImage.src = productImage.src;
            dialogImage.alt = productImage.alt;
            dialogCategory.textContent = productCategory.textContent.trim();
            dialogTitle.textContent = productName.textContent.trim();
            dialogPrice.textContent = productPrice.textContent.trim();

            detailDialog.showModal();
        });
    });
});
