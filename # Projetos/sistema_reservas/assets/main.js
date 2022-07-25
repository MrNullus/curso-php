document.addEventListener('DOMContentLoaded', () => {
	const buttonShowModalCars = document.getElementById("btn-show-modal-cars");
	const wrapper = document.querySelector('.wrapper');

	buttonShowModalCars.addEventListener('click', (e) => {
		wrapper.classList.toggle("show-modal");
	});
});
