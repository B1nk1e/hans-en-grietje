import gsap from "gsap";
import { hide, show } from "../util/show-hide";
import getParents from "../util/getParents";

const mobileNav = () => {
	const bodyTag = document.body;
	// const navbar = document.querySelector(".navbar-brand");
	const menu = document.querySelector(".mobile-nav");

	if (!menu) {
		return false;
	}

	const navBtn = document.querySelector(".navbar-right .navbar-btn");
	const navToggle = document.querySelector(".navbar-toggler");
	const links = menu.querySelectorAll(".nav-link, .service-nav__title, .mobile-nav__bottom");
	const tl = gsap.timeline({ paused: true });
	const menus = document.querySelectorAll(".navbar-menu__parent.has-children");

	const activeMenu = (parent) => {
		menus.forEach((menu) => {
			const submenu = menu.querySelector(".navbar-menu__inner");

			if (parent === menu) {
				if (submenu.classList.contains("show")) {
					hide(submenu);
				} else {
					show(submenu);
				}
			} else {
				hide(submenu);
			}
		});
	};

	menus.forEach((menu) => {
		const menuToggle = menu.querySelector(".icon-chevron-down");

		menuToggle.addEventListener("click", (e) => {
			e.preventDefault();
			const parent = getParents(e.target, ".navbar-menu__parent");
			activeMenu(parent);
		});
	});

	tl.to(navBtn, {});
	tl.to(menu, {
		duration: 0.3,
		opacity: 1,
		height: "100vh", // change this to 100vh for full-height menu
		ease: "expo.inOut",
	});
	tl.from(
		links,
		{
			duration: 0.4,
			opacity: 0,
			y: 20,
			stagger: 0.1,
			ease: "expo.inOut",
		},
		"-=0.5"
	);

	tl.reverse();

	navToggle.addEventListener("click", () => {
		tl.reversed(!tl.reversed());
		bodyTag.classList.toggle("menu-is-open");
	});
};

export { mobileNav as default };
