import { gsap } from "gsap";

const imageSlider = () => {
	const sliderInstances = document.querySelectorAll(".section--image-slider");

	Array.from(sliderInstances).forEach((sliderInstance) => {
		if (sliderInstance !== null) {
			import("tiny-slider/src/tiny-slider").then((root) => {
				const container = sliderInstance.querySelector(".image-slider");

				const slider = root.tns({
					container,
					items: 1,
					gutter: 24,
					loop: true,
					controls: false,
					nav: false,
					center: false,
					mouseDrag: true,
					autoplayButtonOutput: false,
				});

				const setHeight = () => {
					const height = sliderInstance.querySelector(".tns-slide-active").offsetHeight;
					container.style.height = height + "px";
				};

				window.addEventListener("resize", setHeight);

				setTimeout(() => {
					setHeight();
				}, 500);
			});
		}
	});
};

export { imageSlider as default };
