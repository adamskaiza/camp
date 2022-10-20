const offerObserver = () => {
	const offerIntroItems = document.querySelectorAll(".offer-intro-item");
	console.log(offerIntroItems, "wykonuję się");
	const options = {
		threshold: 1,
	};

	const observer = new IntersectionObserver((entries) => {
		const images = document.querySelectorAll(".offer-intro-img__wrapper > img");
		entries.forEach((entry, index) => {
			if (entry.isIntersecting) {
				entry.target.classList.add("offer-intro-item--active");
				entry.target.previousElementSibling?.classList.remove(
					"offer-intro-item--active"
				);
				entry.target.nextElementSibling?.classList.remove(
					"offer-intro-item--active"
				);

				images.forEach((image) => {
					image.classList.remove("top");
				});
				images[entry.target.dataset.index].classList.add("top");
			} else {
				entry.target.classList.remove("offer-intro-item--active");
			}
		});
	}, options);

	offerIntroItems.forEach((item) => {
		observer.observe(item);
	});
};

export default offerObserver;
