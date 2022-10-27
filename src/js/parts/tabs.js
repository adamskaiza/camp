const tabs = () => {
	const selectTab = (element) => {
		const tabs = element.closest(".tabs");
		if (tabs) {
			const active = tabs.querySelector(".tabs-link--active"),
				visible = tabs.querySelector(".tabs-content--visible"),
				tabContent = tabs.querySelector(`[data-display = '${element.value}']`);

			if (active) {
				active.classList.remove("tabs-link--active");
			}

			element.classList.add("tabs-link--active");

			if (visible) {
				visible.classList.remove("tabs-content--visible");
			}

			tabContent.classList.add("tabs-content--visible");
		}
	};

	const tabLinks = [...document.querySelectorAll(".tabs-link")];
	tabLinks.map((tabLink) => {
		tabLink.addEventListener("click", (e) => {
			selectTab(e.currentTarget);
		});
	});
};

export default tabs;
