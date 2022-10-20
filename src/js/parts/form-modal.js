const jobsFormModal = () => {
	const formTrigger = document.querySelector(".form-trigger");

	if (formTrigger) {
		const formModalClose = document.querySelectorAll(".form-modal__close");
		const formModal = document.querySelector(".form-modal");
		formTrigger.addEventListener("click", () => {
			formModal.classList.add("form-modal--visible");
		});

		formModalClose.forEach((close) => {
			close.addEventListener("click", (e) => {
				e.preventDefault();
				e.stopPropagation();
				formModal.classList.remove("form-modal--visible");
			});
		});
	}
};

export default jobsFormModal;
