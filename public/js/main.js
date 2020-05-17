const signUpButton = document.getElementById('registrarsebutton');
const signInButton = document.getElementById('ingresarbutton');
const container = document.getElementById('contenedor');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});