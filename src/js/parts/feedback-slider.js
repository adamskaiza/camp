import Glide from "@glidejs/glide";

const feedbackSlider = () => {
	const feedbackSliders = document.querySelectorAll(".feedback-slider");
	if (feedbackSliders) {
		feedbackSliders.forEach((item) => {
			const logosGlide = new Glide(item, {
				type: "carousel",
				autoplay: 5000,
				hoverpause: true,
				focusAt: "center",
				perView: 1,
			});
			logosGlide.mount();
		});
	}
};

export default feedbackSlider;
