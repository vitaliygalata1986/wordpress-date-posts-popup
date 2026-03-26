import '../scss/app.scss';
document.addEventListener('DOMContentLoaded', () => {
    const popup = document.querySelector('[data-dpp-popup]');

    if (!popup) {
        return;
    }

    const popupImage = popup.querySelector('[data-dpp-popup-image]');
    const popupDate = popup.querySelector('[data-dpp-popup-date]');
    const popupTitle = popup.querySelector('[data-dpp-popup-title]');
    const popupExcerpt = popup.querySelector('[data-dpp-popup-excerpt]');
    const popupLink = popup.querySelector('[data-dpp-popup-link]');

    const openButtons = document.querySelectorAll('[data-dpp-open-popup]');
    const closeButtons = popup.querySelectorAll('[data-dpp-close-popup]');

    const openPopup = (button) => {
        const title = button.dataset.title || '';
        const date = button.dataset.date || '';
        const excerpt = button.dataset.excerpt || '';
        const image = button.dataset.image || '';
        const link = button.dataset.link || '#';

        popupTitle.textContent = title;
        popupDate.textContent = date;
        popupExcerpt.textContent = excerpt;
        popupLink.setAttribute('href', link);

        if (image) {
            popupImage.setAttribute('src', image);
            popupImage.setAttribute('alt', title);
            popupImage.removeAttribute('hidden');
        } else {
            popupImage.setAttribute('src', '');
            popupImage.setAttribute('alt', '');
            popupImage.setAttribute('hidden', '');
        }

        popup.removeAttribute('hidden');
        document.body.classList.add('dpp-popup-open');
    };

    const closePopup = () => {
        popup.setAttribute('hidden', '');
        document.body.classList.remove('dpp-popup-open');
    };

    openButtons.forEach((button) => {
        button.addEventListener('click', () => {
            openPopup(button);
        });
    });

    closeButtons.forEach((button) => {
        button.addEventListener('click', closePopup);
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !popup.hasAttribute('hidden')) {
            closePopup();
        }
    });
});