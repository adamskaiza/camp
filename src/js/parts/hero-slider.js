import Glide from "@glidejs/glide";

const herosSlider = () => {
	const heroSliders = document.querySelectorAll(".hero-slider");
	if (heroSliders) {
		heroSliders.forEach((item) => {
			const logosGlide = new Glide(item, {
				type: "carousel",
				focusAt: "center",
				perView: 1,
			});
			logosGlide.mount();
		});
	}
};

export default herosSlider;
