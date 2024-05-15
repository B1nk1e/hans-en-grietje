import offset from '../util/offset';
import scrollY from '../util/scrollY';

const scrollTo = () => {
    const links = document.querySelectorAll('a');

    links.forEach((link) => {
        if (link.href.indexOf('#') !== -1) {
            link.addEventListener('click', (ev) => {
                ev.preventDefault();

                const sectionID = link.getAttribute('href');
                const sectionSelector = document.querySelector(`${sectionID}`);
                const sectionOffset = offset(sectionSelector).top - 130;

                scrollY(sectionOffset, 1500, 'easeInOutQuint');
            });
        }
    });
};

export { scrollTo as default };
