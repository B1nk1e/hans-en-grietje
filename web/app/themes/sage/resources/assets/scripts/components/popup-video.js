const popupVideo = () => {
	const instances = document.querySelectorAll(".section--hero, .section--banner");

	if (!instances.length > 0) {
		return false;
	}

	instances.forEach((instance) => {
		const cardBtns = instance.querySelectorAll(".card-video");

		if (!cardBtns.length > 0) {
			return false;
		}

		const popups = document.querySelectorAll(".popup-video");

		const activePopups = (id) => {
			popups.forEach((popup) => {
				const video = popup.querySelector("video");
				popup.classList.remove("active");
				video.pause();
				video.currentTime = 0;

				if (popup.dataset.popup === id) {
					popup.classList.add("active");
					video.play();
				}
			});
		};

		cardBtns.forEach((btn) => {
			btn.addEventListener("click", () => {
				activePopups(btn.dataset.id);
			});
		});

		popups.forEach((popup) => {
			const closeBtn = document.querySelector(".btn--close-popup");

			popup.addEventListener("click", (e) => {
				if (e.target === popup || e.target === closeBtn) {
					activePopups(0);
				}
			});
		});

		document.addEventListener("keyup", (event) => {
			if (event.key === "Escape" || event.key === "Esc") {
				activePopups(0);
			}
		});
	});
};

export { popupVideo as default };
