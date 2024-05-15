import offset from "../util/offset";
import scrollY from "../util/scrollY";

const questionTabs = () => {
	const instances = document.querySelectorAll(".section--questions");

	if (!instances.length > 0) {
		return false;
	}

	instances.forEach((instance) => {
		const tabBtns = instance.querySelectorAll(".btn--tab");
		const tabs = instance.querySelectorAll(".question-tab");

		console.log(tabBtns);

		const setActiveTab = (id) => {
			tabBtns.forEach((btn) => {
				btn.classList.remove("active");

				if (btn.dataset.id === id) {
					btn.classList.add("active");
				}
			});

			tabs.forEach((tab) => {
				tab.classList.remove("active");

				if (tab.dataset.tab === id) {
					tab.classList.add("active");

					const sectionOffset = offset(tab).top - 300;
					scrollY(sectionOffset, 300, "easeInOutQuint");
				}
			});
		};

		tabBtns.forEach((btn) => {
			btn.addEventListener("click", (ev) => {
				setActiveTab(ev.target.dataset.id);
			});
		});
	});
};

export { questionTabs as default };
