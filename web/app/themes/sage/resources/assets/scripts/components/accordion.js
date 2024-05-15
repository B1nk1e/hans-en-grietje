import { hide, show } from '../util/show-hide';
import getParents from '../util/getParents';

const closeAllExceptCurrentEvent = (element, itemsByClassName, termElement, descriptionElement) => {
	const elements = document.querySelectorAll(itemsByClassName);

	elements.forEach((el) => {
		if (el !== element.parentElement) {
			const term = el.querySelector(termElement);
			const description = el.querySelector(descriptionElement);

			if (term && term.classList.contains('open')) {
				term.classList.remove('open');
			}

			if (description) {
				hide(description);
			}
		}
	});
};

const accordion = () => {
	const accordionHolder = document.querySelectorAll('.accordion__holder');

	if (!accordionHolder.length) return;

	document.querySelectorAll('.accordion__term').forEach((el) => {
		el.addEventListener('click', function () {
			const collapse = this.nextElementSibling;
			const parent = getParents(this, '.accordion__item');

			if (collapse.classList.contains('show')) {
				hide(collapse);
				parent.classList.remove('active');
				parent.blur();
			} else {
				show(collapse);
				parent.focus();
				closeAllExceptCurrentEvent(this, '.accordion__item', '.accordion__term', '.accordion__body');
			}

			this.classList.toggle('open');
		});
	});
};

export {
	accordion as default,
	closeAllExceptCurrentEvent,
};
