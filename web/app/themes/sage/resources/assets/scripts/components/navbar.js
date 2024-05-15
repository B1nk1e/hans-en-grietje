const navbar = () => {
	let lastScroll = 0;
	let isScrolled = false;

	const bodyTag = document.body;
	const sections = document.querySelectorAll("section");

	if (!sections) {
		return false;
	} else {
		if (sections[0].classList.contains("section--hero")) {
			bodyTag.classList.add("navbar-lighten");
		}
	}

	window.addEventListener("scroll", () => {
		const topHeader = document.querySelector(".navbar");
		const scrollTop = window.scrollY;
		const currentScroll = scrollTop || document.documentElement.scrollTop || document.body.scrollTop || 0;
		const scrollDirection = currentScroll < lastScroll;
		const shouldToggle = isScrolled && scrollDirection;

		if (scrollTop >= 50) {
			topHeader.classList.add("is-up");
		} else {
			topHeader.classList.remove("is-up");
		}
	});
};

export { navbar as default };
