import { gsap } from "gsap";

const blockSlider = () => {
	const sliderInstances = document.querySelectorAll(".section--block-slider");

	Array.from(sliderInstances).forEach((sliderItem) => {
		if (sliderItem !== null) {
			import("tiny-slider/src/tiny-slider").then((root) => {
				const sliderSpeed = 5000;
				const sliderTransitionSpeed = 500;
				const tl = gsap.timeline({ paused: true });
				const line = sliderItem.querySelector(".block-slider__line span");
				const sliderCounter = sliderItem.querySelector(".block-slider__current");

				tl.fromTo(
					line,
					{ xPercent: -100 },
					{
						xPercent: 0,
						duration: sliderSpeed / 1000,
						ease: "power1.inOut",
					}
				);

				const slider = root.tns({
					container: sliderItem.querySelector(".block-slider"),
					items: 1,
					loop: true,
					controls: false,
					nav: false,
					center: false,
					mouseDrag: true,
					autoplayButtonOutput: false,
					autoplay: true,
					autoplayTimeout: sliderSpeed,
					speed: sliderTransitionSpeed,
				});

				const playAnimation = (info) => {
					const totalSlides = slider.getInfo().slideCount;
					const newIndex = info.displayIndex % totalSlides || totalSlides;

					sliderCounter.innerHTML = newIndex;
					tl.restart();
				};

				slider.events.on("indexChanged", playAnimation);

				tl.play();
			});
		}
	});
};

export { blockSlider as default };
