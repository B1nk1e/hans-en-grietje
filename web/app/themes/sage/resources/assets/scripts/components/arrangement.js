import { gsap } from "gsap";

const arrangement = () => {
	const cards = document.querySelectorAll(".card.card--arrangement");

	Array.from(cards).forEach((card) => {
		if (card !== null) {
			const figure = card.querySelector(".card-figure");
			var isMouseOver = false; // Flag to track if the mouse is over the card
			var mouseX = 0;
			var mouseY = 0;

			card.addEventListener("mousemove", function (e) {
				var boundingRect = figure.getBoundingClientRect();
				mouseX = e.clientX - boundingRect.left;
				mouseY = e.clientY - boundingRect.top;

				var offsetX = 0.5 - mouseX / boundingRect.width;
				var offsetY = 0.5 - mouseY / boundingRect.height;

				var transformValue = "translate(" + offsetX * 50 + "px, " + offsetY * 50 + "px)";

				gsap.to(figure, {
					duration: 0.3,
					ease: "power2.out",
					x: offsetX * 15,
					y: offsetY * 15,
				});

				isMouseOver = true;
			});

			card.addEventListener("mouseleave", function () {
				if (isMouseOver) {
					isMouseOver = false;
					gsap.to(figure, {
						duration: 0.5,
						ease: "power2.out",
						x: 0,
						y: 0,
					});
				}
			});

			function updateCardPosition() {
				var boundingRect = figure.getBoundingClientRect();
				var offsetX = 0.5 - mouseX / boundingRect.width;
				var offsetY = 0.5 - mouseY / boundingRect.height;

				gsap.set(figure, {
					x: offsetX * 15,
					y: offsetY * 15,
				});

				if (isMouseOver) {
					requestAnimationFrame(updateCardPosition);
				}
			}

			card.addEventListener("mouseenter", function () {
				if (!isMouseOver) {
					isMouseOver = true;
					updateCardPosition();
				}
			});
		}
	});
};

export { arrangement as default };
