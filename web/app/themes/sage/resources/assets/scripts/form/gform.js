const focusNotchedGform = () => {
    const fields = document.querySelectorAll('.gfield');

    if (!fields.length > 0) {
        return false;
    }

    Array.from(fields).forEach((field) => {
        const input = field.querySelector('.ginput_container:not(.ginput_container_date):not(.ginput_container_select) > *');

        if (!input || input.value === undefined) {
            return;
        }

        if (input.value.length > 0) {
            field.classList.add('is-filled');
        }

        input.addEventListener('focus', () => {
            field.classList.add('focusing');
        });

        input.addEventListener('blur', () => {
            if (input.value === '' && !field.classList.contains('gfield_error')) {
                field.classList.remove('focusing');
            }
        });

        if (input.value === 'Maak uw keuze') {
            input.disabled = false;
        }
    });

    setTimeout(() => {
        const disabledOptions = document.querySelectorAll('[rel="Maak uw keuze"], [rel="Prijs van"], [rel="Prijs tot"]');

        Array.from(disabledOptions).forEach((option) => {
            option.classList.add('disabled');
        });
    }, 500);
};

const gform = () => {
    focusNotchedGform();
};

export { gform as default };
