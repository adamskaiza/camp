const burger = () => {
	const menuBtn = document.querySelector(".menu-btn");
	const navDropdown = document.querySelector(".nav-dropdown");
	const html = document.querySelector("html");
	let menuOpen = false;
	menuBtn.addEventListener("click", () => {
		if (!menuOpen) {
			menuBtn.classList.add("open");
			menuOpen = true;

			navDropdown.classList.add("active");
			html.style.overflow = "hidden";
		} else {
			menuBtn.classList.remove("open");
			menuOpen = false;
			navDropdown.classList.remove("active");
		}
	});
};

export default burger;
