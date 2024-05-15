import { gsap } from "gsap";

const jobs = () => {
	const instances = document.querySelectorAll(".section--jobs");

	Array.from(instances).forEach((instance) => {
		if (instance !== null) {
			const btn = instance.querySelector(".btn--jobs");

			if (!btn) {
				return false;
			}

			btn.addEventListener("click", () => {
				instance.classList.add("show-all");
			});
		}
	});
};

export { jobs as default };
